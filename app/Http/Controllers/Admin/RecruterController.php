<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobQuestion;
use Illuminate\Http\Request;
use App\Models\RecruterJob;
use Illuminate\Support\Facades\Validator;
use Storage;

class RecruterController extends Controller {
    //

    public function index( Request $request ) {
        if ( $request->search != '' ) {
            $jobpost = RecruterJob::where( 'title', 'LIKE', '%' . $request->search . '%' )->orWhere( 'location', 'LIKE', '%' . $request->search . '%' )->paginate( 9 );
        } else {
            $jobpost = RecruterJob::paginate( 9 );
        }
        return view( 'admin.recruter.index', compact( 'jobpost' ) );
    }

    public function add( Request $request ) {
        return view( 'admin.recruter.add' );
    }

    public function store( Request $request ) {
        $request->validate( [
            'title'             => 'required',
            'workplace_type'    => 'required',
        ] );
        $filename = '';
        if ( $request->has( 'fileUpload' ) ) {
            $filename = date( 'ymdhis' ) . '_' . $request->fileUpload->getClientOriginalName();
            Storage::disk( 'uploads' )->put( $filename, file_get_contents( $request->fileUpload->getRealPath() ) );
        }
        $job_id = RecruterJob::create(
            [
                'title'             => $request->title,
                'specification'     => $request->job_specification,
                'location'          => $request->location,
                'work_place'        => $request->workplace_type,
                'experience'        => $request->experience,
                'salary'            => $request->salary,
                'schedule'          => $request->schedule,
                'skill1'            => $request->skill1,
                'skill2'            => $request->skill2,
                'skill3'            => $request->skill3,
                'upload_file'       => $filename,
                'employment_type'   => $request->type_employee,
                'other_description' => $request->other_description,
                'vacancy'           => $request->vacancy,
                'payout'            => $request->payout
            ]
        );
        foreach ( $request->question as $post ) {
            JobQuestion::create(
                [
                    'job_id'    => $job_id->id,
                    'question'  => $post,
                ]
            );
        }
        return redirect( 'admin/recruter' )->with( 'success', 'Job Post Added Succfully' );
    }

    public function detail( $id, Request $request ) {
        $recruter               = RecruterJob::whereId( $id )->first();
        $recruterjobQuestions   = $recruter->jobQuestions;
        return view( 'admin.recruter.detail', compact( 'recruter', 'recruterjobQuestions' ) );
    }

    public function update( Request $request ) {
        $job_id = RecruterJob::where( 'id', $request->id )->update(
            [
                'specification'     => $request->specification,
                'location'          => $request->location,
                'work_place'        => $request->workplace_type,
                'experience'        => $request->experience,
                'salary'            => $request->salary,
                'schedule'          => $request->schedule,
                'skill1'            => $request->skill1,
                'skill2'            => $request->skill2,
                'skill3'            => $request->skill3,
                'vacancy'           => $request->vacancy,
                'employment_type'   => $request->employment_type,
                'payout'            => $request->payout
            ]
        );
        return redirect( 'admin/recruter/details/' . $request->id )->with( 'success', 'Job Post Updated Succfully' );
    }
}

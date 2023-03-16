<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\RecruterJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;


class CandidateController extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->has('job_id')){
            if ($request->search != '') {
                $candidates = Candidate::where([['name', 'LIKE', '%' . $request->search . '%'],['job_id' , '=' , $request->job_id]])->orWhere('country', 'LIKE', '%' . $request->search . '%')->orWhere('email', 'LIKE', '%' . $request->search . '%')->orderBy('id', 'desc')->with('job')->get();
            } else {
                $candidates = Candidate::where('job_id' , $request->job_id)->orderBy('id', 'desc')->with('job')->get();
            }
        }else{
            if ($request->search != '') {
                $candidates = Candidate::where('name', 'LIKE', '%' . $request->search . '%')->orWhere('country', 'LIKE', '%' . $request->search . '%')->orWhere('email', 'LIKE', '%' . $request->search . '%')->orderBy('id', 'desc')->with('job')->get();
            } else {
                $candidates = Candidate::orderBy('id', 'desc')->with('job')->get();
            }
        }
        return view('admin.candidate.index', compact('candidates'));
    }
    public function show($id)
    {
        $candidate = Candidate::where('id', $id)->first();
        return view('admin.candidate.detail', compact('candidate'));
    }
    public function changeStatus($id, $status)
    {

        Candidate::where('id', $id)->update(['status' => $status]);
        $candidate=Candidate::where('id', $id)->first();
        if ($status == 1) {
            $data['name'] = $candidate->name;
            $data['title'] = $candidate->job->title;
            Mail::send('mail.select', $data, function ($message) use ($candidate) {
                $message->to($candidate->email, $candidate->name)->subject('Sortlisted');
                $message->from('novaeo@gmail.com');
            });
        }
        

        return redirect()->back();
    }
    public function changeResult($id, $result)
    {
        $candidate = Candidate::where('id', $id)->first();
        if ($result == 1) {
            $jobpost = RecruterJob::where('id', $candidate->job_id)->first();
            $vacancy = $jobpost->vacancy - 1;
            RecruterJob::where('id', $candidate->job_id)->update(['vacancy' => $vacancy]);
            $data['name'] = $candidate->name;
            $data['title'] = $candidate->job->title;
            Mail::send('mail.result', $data, function ($message) use ($candidate) {
                $message->to($candidate->email, $candidate->name)->subject('Selected');
                $message->from('novaeo@gmail.com');
            });
        }
        Candidate::where('id', $id)->update(['result' => $result]);

        return redirect()->back();
    }
    public function scheduleInterview(Request $request)
    {
        $candidate = Candidate::where('id', $request->candidate_id)->first();
        Candidate::where('id', $request->candidate_id)->update(['interview_date' => $request->interview_date]);
        $data['name'] = $candidate->name;
        $data['interview_date'] = date('d-m-Y h:i A', strtotime($request->interview_date));
        Mail::send('mail.interview', $data, function ($message) use ($candidate) {
            $message->to($candidate->email, $candidate->name)->subject('Interview Schedule');
            $message->from('novaeo@gmail.com');
        });
        return redirect()->back()->with('success', 'Interview Scheduled Successfully');
    }
}

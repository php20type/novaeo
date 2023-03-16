<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web')->except(['adminLogout', 'showAdminLoginForm', 'adminLogin','logout']);
    }
    public function showAdminLoginForm()
    {
        $this->middleware('guest:admin')->except('adminLogout');
        return view('admin.auth.login');
    }

    public function adminLogin(Request $request)
    {
        $this->middleware('guest:admin')->except('adminLogout');

        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt($request->only(['email', 'password']), $request->get('remember'))) {
            return redirect()->intended('/admin/dashboard');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();
        return view('admin.logout');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected function redirectTo() {
        
        return route('user.top');
    }

    public function showLoginForm()
    {
        return view('user.form');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function logout()
    {
        // $this->middleware('guest')->except('logout');
        Auth::guard()->logout();


        return redirect()->route('user.login');
    }
}

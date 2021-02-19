<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    //protected $redirectTo = RouteServiceProvider::HOME;

    protected $redirectTo;

    protected function redirectTo()
    {
        if (Auth::user()->usertype == 'admin') {

            $this->redirectTo ='dashboard/';

            return $this->redirectTo;

        } elseif (Auth::user()->usertype == 'boss') {

            $this->redirectTo ='boss/';

            return $this->redirectTo;

        } elseif (Auth::user()->usertype == 'member_bde') {

            $this->redirectTo ='member_bde/';

            return $this->redirectTo;

        } elseif (Auth::user()->usertype == 'student') {

            $this->redirectTo ='student/';

            return $this->redirectTo;

        } elseif (Auth::user()->usertype == 'teacher') {

            $this->redirectTo ='teacher/';

            return $this->redirectTo;

        }else {
            # code...
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

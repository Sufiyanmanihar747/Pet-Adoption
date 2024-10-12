<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
    protected function authenticated($request, $user)
    {
        if ($redirectTo = session()->get('url.intended')) {
            return redirect($redirectTo);
        }
        // dd($request);
        if ($user->hasRole('admin')) {
            // dd("this is login controller");
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('owner')) {
            return redirect()->route('home');
        } elseif ($user->hasRole('user')) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login');
        }
    }
}

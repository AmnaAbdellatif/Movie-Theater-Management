<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use Illuminate\Http\Request;
Use Redirect;
use App\User;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function show()
    {

        return \View::make('auth.login');
    }

    public function do(Request $request)
    {
        /* $data=array(
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        );

       $credentials = $request->only('email', 'password');

       $user = User::where('email',$request->get('email'));
       Auth::login($user);


        return back()->with(["error"=>"Authentication failed: User not found"]); */

        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('home');
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
}

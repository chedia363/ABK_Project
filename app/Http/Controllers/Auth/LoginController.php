<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**show login form */
    public function showLoginForm()
    {
        if (Auth()->user()) {
            return redirect('/abk_project');
        }
        return view('auth.login');
    }

   /**login to admin dashboard */
    public function login(Request $request)
    {
        $user = User::where('email',$request->email)->first();

  
        if($user != NULL){
    
            $this->validateLogin($request);

           
            if ($this->hasTooManyLoginAttempts($request)) {
                $this->fireLockoutEvent($request);
    
                return $this->sendLockoutResponse($request);
            }
            $remember_me = $request->has('remember_token') ? true : false; 
            $details = $request->only('email', 'password');
           
            if (auth()->guard('user')->attempt($details, $remember_me)) {
                
                 auth()->attempt($details, $remember_me);
                 
                
                 $this->sendLoginResponse($request);

                //  redirect to dashboard admin
                return redirect()->intended('/home');
            }
    
          
            $this->incrementLoginAttempts($request);
    
            return $this->sendFailedLoginResponse($request);
       
        
        } 
        
        
    }

    public function logout(){
        
        Auth::logout();
        return redirect('/');
    }

}

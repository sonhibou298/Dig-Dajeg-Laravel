<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    public function redirectTo(){
        if (Auth::user()->role_id == 3){
            return route('homePatient');
        }elseif (Auth::user()->role_id == 2){
            return route('homeMedecin');
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
//    public function login(Request $request)
//    {
//        $input = $request->all();
//        $this->validate($request, [
//            'email'=>'required|email',
//            'password'=>'required'
//        ]);
//        if ( auth()->attempt(array('email'=>$input['email'], 'password'=>$input['password'])))
//        {
//            if ( auth()->user()->role_id == 3){
//                return redirect()->route('homePatient');
//            }
//            elseif ( auth()->user()->role_id == 2)
//            {
//                return redirect()->route('homeMedecin');
//            }
//
//        }
//        else{
//            return redirect()->route('loginPatient')->with('errors', 'Email ou mot de passe incorrect');
//        }
//    }

}

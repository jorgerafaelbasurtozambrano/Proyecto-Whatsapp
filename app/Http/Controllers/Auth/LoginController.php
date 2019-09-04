<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
      $departamentos=\App\AreadesModel::all();
      $tipos=\App\tipo::all();
      return view('adminlte::auth.login',compact('departamentos','tipos'));
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/administrador';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function redirectTo($user)
     {
         if ($user->idtipo==4) {
             return '/administrador';
         }else if ($user->idtipo!=4) {
            return '/acceso';
         }
     }
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
}

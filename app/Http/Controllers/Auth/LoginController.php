<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Socialite;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use App\User;


class LoginController extends Controller
{
  public function logout()
    {
      Auth::logout();
      return redirect('/');
    }
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
    }



//INICIAR SESION
    public function redirectToGoogle()
        {
            return Socialite::driver('google')->redirect();
        }

    public function handleGoogleCallback()
      {
        $userGoogle = Socialite::driver('google')->user();
        $user = User::where('email', $userGoogle->email)->first();
        // $user->token;

        if (!$user)
        {
          $user = new User;
          $user->email = $userGoogle->email;
          $user->name= $userGoogle->name;
          $user->apellido= '';
          $user->pais= 'Argentina';
          $user->password =  12345678;
          $user->save();
        };

        return redirect('/')
            ->with('status', 'Perfil modificado exitosamente!')
            ->with('operation', 'success');
      }


//con facebook

public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

public function handleFacebookCallback()
  {
    $userFacebook = Socialite::driver('facebook')->user();
    $user = User::where('email', $userFacebook->email)->first();
    // $user->token;

    if (!$user)
    {
      $user = new User;
      $user->email = $userFacebook->email;
      $user->name= $userFacebook->name;
      $user->apellido= '';
      $user->pais= 'Argentina';
      $user->password =  12345678;
      $user->save();
    };

    return redirect('/')
        ->with('status', 'Perfil modificado exitosamente!')
        ->with('operation', 'success');
  }


}

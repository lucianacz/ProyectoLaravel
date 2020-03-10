<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */


}
    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */



    /*   public function updatePassword(Request $request, $id)
      {
          //primero valido los datos
          $message=[
              "email.required"=> 'El usuario no puede estar vacio',
              "email.unique"=> 'Ese usuario ya existe',
          ];

           $rules=[
              'email' => ['required', 'unique:users', 'email'],
              //'fecha' => 'required',
          ];

         $this->validate($request, $rules, $message);

          //instacio una Nota
          $usuario = User::find($id);
          //asigno a los atributos de trs maneras distinta

          $usuario->email = $request['email'];

           //lo guardo en la BD
           $usuario->save();


          //redirijo
          return redirect('/perfil')
              ->with('status', 'Perfil modificado exitosamente!')
              ->with('operation', 'success');
      }

    $redirectTo = 'password/email';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
        //$this->middleware('guest');
    //}
//}

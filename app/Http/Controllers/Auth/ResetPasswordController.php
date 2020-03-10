<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Auth;
use Hash;
use Carbon;
use App\User;

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


    public function showPasswordResetForm($id){
       $usuario = User::find($id);
       return view('passwords/email',compact('usuario'));
     }

    public function resetPassword(Request $request, $token)
   {
       //some validation

            $message=[
                "email.required"=> 'El usuario no puede estar vacio',
                "email.unique"=> 'Ese usuario ya existe',
            ];

             $rules=[
                'email' => ['required', 'unique:users', 'email'],
                //'fecha' => 'required',
            ];

             $this->validate($request, $rules, $message);

       $password = $request->password;
       $tokenData = DB::table('password_resets')
       ->where('token', $token)->first();

       $user = User::where('email', $tokenData->email)->first();
       if ( !$user ) return redirect()->to('login'); //or wherever you want

       $user->password = Hash::make($password);
       $user->update(); //or $user->save();

       //do we log the user directly or let them login and try their password for the first time ? if yes
       Auth::login($user);

      // If the user shouldn't reuse the token later, delete the token
      User::table('password_resets')->where('email', $user->email)->delete();

  //redirijo
        return redirect('/perfil')
            ->with('status', 'Perfil modificado exitosamente!')
            ->with('operation', 'success');
    }
//redirect where we want according to whether they are logged in or not.


}

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





    //$redirectTo = 'password/reset';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
        //$this->middleware('guest');
    //}



     public function showPasswordResetForm(Request $request, $token)
     {
        return view('auth.passwords.email');
     }

    public function resetPassword(Request $request, $token)
   {
       //some validation

            $message=[
                "email.required"=> 'El usuario no puede estar vacio',
                "email.unique"=> 'Ese usuario ya existe',
            ];

             $rules=[
               'token' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed|min:6'
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
*/
    public function resetPassword(Request $request)
{
    //Validate input
    $validator = Validator::make($request->all(), [
        'email' => 'required|exists:users,email',
        'password' => 'required|confirmed'
    ]);

    //check if input is valid before moving on
    if ($validator->fails()) {
        return redirect()->back()->withErrors(['email' => 'Please complete the form']);
    }

    $password = $request->password;
// Validate the token
    $tokenData = DB::table('password_resets')
    ->where('token', $request->token)->first();
// Redirect the user back to the password reset request form if the token is invalid
    if (!$tokenData) return view('auth.passwords.email');

    $user = User::where('email', $tokenData->email)->first();
// Redirect the user back if the email is invalid
    if (!$user) return redirect()->back()->withErrors(['email' => 'Email not found']);
//Hash and update the new password
    $user->password = \Hash::make($password);
    $user->update(); //or $user->save();

    //login the user immediately they change password successfully
    Auth::login($user);

    //Delete the token
    DB::table('password_resets')->where('email', $user->email)
    ->delete();

    //Send Email Reset Success Email
    if ($this->sendSuccessEmail($tokenData->email)) {
        return view('index');
    } else {
        return redirect()->back()->withErrors(['email' => trans('A Network Error occurred. Please try again.')]);
    }

}
//redirect where we want according to whether they are logged in or not.


}

<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
          $message=[
              "name.required"=> 'El nombre no puede estar vacio',
              "apellido.required" => 'El :attribute no puede estar vacio',
              "email.required" => 'El :attribute no puede estar vacio',
              "password.required" => 'El :attribute no puede esta vacio',
              "password.confirmed" =>"Las contraseñas no coinciden",
              "password.min" =>"La :attribute debe tener al menos 8 caracteres",
          ];
          return Validator::make($data, [
              'name' => ['required', 'string', 'max:255'],
              'apellido' => ['required', 'string', 'max:255'],
              'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
              'password' => ['required', 'string', 'min:3', 'confirmed'],
          ],$message);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      return User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'apellido'=>$data['apellido'],
          'pais'=>$data['pais'],
          'password' => Hash::make($data['password']),
      ]);

      
    }
}

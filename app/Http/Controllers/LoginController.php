<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  protected function validator(array $data)
  {
      $message=[
          "email.required" => 'El :attribute no puede estar vacio',
          "password.required" => 'El :attribute no puede esta vacio',
          "password.min" =>"La :attribute debe tener al menos 8 caracteres",
      ];
      return Validator::make($data, [
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
  /*protected function create(array $data)
  {
    $imagen="";
    if (isset ($data['avatar']))
    {
    $imagen=$data['avatar']->store['public'];
    $imagen=basename($imagen);
    }
      return User::create
      ([
          'nombre' => $data['nombre'],
          'email' => $data['email'],
          "apellido"=>$data['apellido'],
          'password' => Hash::make($data['password']),
          'avatar'=> $imagen,
      ]);
  }
  */
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
  protected function validator(array $data)
  {
      $message=[
          'nombre.required'=> 'El :attribute no puede estar vacio',
          "apellido.required" => 'El :attribute no puede estar vacio',
          "email.required" => 'El :attribute no puede estar vacio',
          "password.required" => 'El :attribute no puede esta vacio',
          "password.confirmed" =>"Las contraseñas no coinciden",
          "password.min" =>"La :attribute debe tener al menos 8 caracteres",
      ];
      return Validator::make($data, [
          'nombre' => ['required', 'string', 'max:255'],
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
    dd($data);
    $imagen="";
    if (isset ($data['avatar'])){
    $imagen=$data['avatar']->store['public'];
    $imagen=basename($imagen);
    }
      return User::create([
          'nombre' => $data['nombre'],
          'email' => $data['email'],
          'apellido'=>$data['apellido'],
          'pais'=>$data['pais'],
          'password' => Hash::make($data['password']),
      ]);
  }
}

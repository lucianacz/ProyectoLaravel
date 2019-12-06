<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;
use App\Usuario;

class MainController extends Controller
{

  public function index (){
    $notas = Nota::orderby('Pais')->get();
    $usuarios = Usuario::find(1);
      //dd($usuarios->notas);
    return view ('index', compact('notas', 'usuarios'));
  }


  public function gente (){
    $notas = Nota::orderby('titulo')->get();
    $usuarios = Usuario::orderby('nombre')->get();
    return view ('gente', compact('notas','usuarios'));
  }



  public function edit (){
    $notas = Nota::orderby('titulo')->get();
    $usuarios = Usuario::orderby('nombre')->get();
    return view ('edit', compact('notas','usuarios'));
  }

  public function viewNota($id){
    $nota = Nota::find($id);
    return view('nota',compact('nota'));
  }


  public function explora() {
      return view('explora');
  }



  public function newNote() {
      return view('newNote');
  }


  public function nota() {
    $notas = Nota::orderby('Titulo')->get();
    $usuarios = Usuario::orderby('Nombre')->get();
    return view ('nota', compact('notas'), compact('usuarios'));
  }

  public function qs() {
      return view('quienessomos');
  }

  public function contacto() {
      return view('contacto');
  }

  public function login() {
      return view('login');
  }


  public function register() {
      return view('register');
  }


  public function perfil() {
    $notas = Nota::orderby('Pais')->get();
    $usuario = \Auth::user();
      //dd($usuarios->notas);
    return view ('perfil', compact('usuario'));
  }

  public function list() {
    $notas = Nota::orderby('titulo')->get();
    $usuarios = Usuario::orderby('nombre')->get();
    return view ('edit', compact('notas','usuarios'));
  }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Nota;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Validator;
use App\Usuario;


class MainController extends Controller
{

  public function index (){
    $notas = Nota::orderby('id')->take(4)->get();
    $cuatroSegundas = Nota::orderby('id')->take(4)->offset(4)->get();
    $usuarios = Usuario::find(1);
      //dd($usuarios->notas);
    return view ('index', compact('notas', 'cuatroSegundas', 'usuarios'));
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

  public function editNota($id){
    $nota = Nota::find($id);
    return view('edit/nota',compact('nota'));
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


  public function delete($id)
  {
      //buscamos la pelicula por su id
      $nota = Nota::find($id);

      //si tiene imagen la borro
      $image_path = storage_path('app/storage') . $nota->foto;
      if ($nota->foto && file_exists($image_path)) {
          unlink($nota_path);
      }
      //elimino los actor_movie
      // TODO: hacerlo

      //elimino de los que es favorit

      //la elimino de la bd
      $nota->delete();

      return redirect('/edit')
          ->with('status', 'Nota eliminada exitosamente!')
          ->with('operation', 'warning');
  }




public function recordNote(Request $r){

    $message=[
        "title.required"=> 'El :attribute no puede estar vacio',
        "subtitulo.required" => 'El :attribute no puede estar vacio',
        "pais.required" => 'El :attribute no puede estar vacio',
        "region.required" => 'La :attribute no puede estar vacia',
        "parrafo1.required" =>'El parrafo no puede estar vacio',
        "parrafo2.required" =>'El parrafo no puede estar vacio',
        "destacado.required" =>'El :attribute no puede estar vacio',
        "epigrafe.required" =>'El :attribute no puede estar vacio',
        "fecha.required" =>'La :attribute no puede estar vacia',
        "foto.required" =>'La :attribute no puede estar vacia',
        "foto.mimes" =>'La :attribute tiene que ser jpg o png',
    ];
     $this->validate($r, [
        'title' => ['required', 'string', 'max:255'],
        'subtitulo' => ['required', 'string', 'max:255'],
        'pais' => ['required'],
        'region' => ['required'],
        'parrafo1' => ['required', 'string', 'max:5000'],
        'parrafo2' => ['required', 'string', 'max:5000'],
        'destacado' => ['required', 'string', 'max:100'],
        'epigrafe' => ['required', 'string', 'max:100'],
        'foto' => ['required', 'mimes:jpeg,png'],
        'fecha' => ['required'],
    ],$message);

    $imagen=$r->file('foto')->store('public');
    $imagen=basename($imagen);


   Nota::create([
    'titulo' => $r['title'],
    'subtitulo' => $r['subtitulo'],
    'pais' => $r['pais'],
    'region' => $r['region'],
    'destacado' => $r['destacado'],
    'epigrafe'=>$r['epigrafe'],
    'parrafo1'=>$r['parrafo1'],
    'parrafo2'=>$r['parrafo2'],
    'video'=>$r['video'],
    'fecha'=>$r['fecha']. '-01',
    'user_id' => \Auth::user()->id,
    'foto' => $imagen,
    ]);

    return redirect('/gente');

  }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Nota;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Validator;
use App\Usuario;
use App\Photo;
use App\User;

class MainController extends Controller
{

  public function index (){
    $notas = Nota::orderby('id')->take(4)->get();
    $cuatroSegundas = Nota::orderby('id')->take(1)->offset(4)->get();
    $usuarios = Usuario::find(1);
      //dd($usuarios->notas);
    return view ('index', compact('notas', 'cuatroSegundas', 'usuarios'));
  }


  public function gente (){
    $notas = Nota::all();
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
    $ant = Nota::orderby('id','desc')->where('id', '<', $id)->first();
    $sig = Nota::orderby('id','asc')->where('id', '>', $id)->first();
    return view('nota',compact('nota', 'sig', 'ant'));
  }

 public function editNota($id){
    $nota = Nota::find($id);
    return view('edit/nota',compact('nota'));
  }

  public function editFoto($id){
     $foto = Photo::find($id);
     return view('edit/foto',compact('foto'));
   }


  public function editPerfil($id){
     $usuario = User::find($id);
     return view('edit/perfil',compact('usuario'));
   }



  public function explora() {
    $fotos = Photo::orderby('photo_id')->get();
    $usuarios = User::orderby('name')->get();
    $logeado = \Auth::user();
    return view ('explora', compact('fotos', 'usuarios', 'logeado'));
  }



  public function newNote() {
      return view('newNote');
  }

  public function newPhoto() {
      return view('newPhoto');
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
          unlink($image_path);
      }
      // TODO: hacerlo

      //elimino de los que es favorit

      //la elimino de la bd
      $nota->delete();

      return redirect('/edit')
          ->with('status', 'Nota eliminada exitosamente!')
          ->with('operation', 'warning');
  }


  public function deletePhoto($id)
  {
      //buscamos la pelicula por su id
      $foto = Photo::find($id);


      //si tiene imagen la borro
      $image_path = storage_path('app/storage') . $foto->nombre;
      if ($foto->nombre && file_exists($image_path)) {
          unlink($image_path);
      }
      // TODO: hacerlo

      //elimino de los que es favorit

      //la elimino de la bd
      $foto->delete();

      return redirect('/explora')
          ->with('status', 'Foto eliminada exitosamente!')
          ->with('operation', 'warning');
  }




public function recordNote(Request $r){

    $message=[
        "titulo.required"=> 'El :attribute no puede estar vacio',
        "titulo.max"=> 'El :attribute supera la cantidad de caracteres',
        "subtitulo.required" => 'El :attribute no puede estar vacio',
        "subtitulo.max" => 'El :attribute supera la cantidad de caracteres',
        "pais.required" => 'El :attribute no puede estar vacio',
        "region.required" => 'La :attribute no puede estar vacia',
        "parrafo.required" =>'El parrafo no puede estar vacio',
        "parrafo.max" =>'El parrafo supera la cantidad de caracteres',
        "fecha.required" =>'La :attribute no puede estar vacia',
        "foto.required" =>'La :attribute no puede estar vacia',
        "foto.mimes" =>'La :attribute tiene que ser jpg o png',
    ];
     $this->validate($r, [
        'titulo' => ['required', 'string', 'max:40'],
        'subtitulo' => ['required', 'string', 'max:40'],
        'pais' => ['required'],
        'region' => ['required'],
        'parrafo' => ['required', 'string', 'max:5000'],
        'foto' => ['required', 'mimes:jpeg,png'],
        'fecha' => ['required'],
    ],$message);


      $imagen=$r->file('foto');
      //FOTO GIRADA
      $exif = exif_read_data($imagen);
      $ort = $exif['Orientation'];

      $image = WideImage::load($imagen);

      // GD doesn't support EXIF, so all information is removed.
      $image->exifOrient($ort)->saveToFile($imagen);

      $edit=$image->store('public');
      $edit=basename($edit);

      class WideImage_Operation_ExifOrient
      {
        /**
         * Rotates and mirrors and image properly based on current orientation value
         *
         * @param WideImage_Image $img
         * @param int $orientation
         * @return WideImage_Image
         */
        function execute($img, $orientation)
        {
          switch ($orientation) {
            case 2:
              return $img->mirror();
              break;

            case 3:
              return $img->rotate(180);
              break;

            case 4:
              return $img->rotate(180)->mirror();
              break;

            case 5:
              return $img->rotate(90)->mirror();
              break;

            case 6:
              return $img->rotate(90);
              break;

            case 7:
              return $img->rotate(-90)->mirror();
              break;

            case 8:
              return $img->rotate(-90);
              break;

            default: return $img->copy();
          }
        }

    //FIN FOTO GIRADA

    //$imagen=$r->file('foto')->store('public');
    //$imagen=basename($imagen);

   Nota::create([
    'titulo' => $r['titulo'],
    'subtitulo' => $r['subtitulo'],
    'pais' => $r['pais'],
    'region' => $r['region'],
    'parrafo'=>$r['parrafo'],
    'fecha'=>$r['fecha']. '-01',
    'user_id' => \Auth::user()->id,
    'foto' => $edit,
    ]);

    return redirect('/gente')
    ->with('status', 'Nota subida exitosamente!')
    ->with('operation', 'success');

  }




  public function update(Request $request, $id)
   {
       //primero valido los datos
       $message=[
           "titulo.required"=> 'El :attribute no puede estar vacio',
           "subtitulo.required" => 'El :attribute no puede estar vacio',
           "parrafo.required" =>'El parrafo no puede estar vacio',
           "parrafo.max" =>'El parrafo supera la cantidad de caracteres',
           "fecha.required" =>'La :attribute no puede estar vacia',
           "foto.required" =>'La :attribute no puede estar vacia',
           "foto.image" =>'La :attribute tiene que ser jpg o png',
       ];

        $rules=[
           'titulo' => 'required', 'string', 'max:30',
           'subtitulo' => 'required', 'string', 'max:50',
           'parrafo' => 'required', 'string', 'max:5000',
           'foto' => 'nullable', 'image',
           //'fecha' => 'required',
       ];

      $this->validate($request, $rules, $message);

       //instacio una Nota
       $nota = Nota::find($id);
       //asigno a los atributos de trs maneras distinta

       $nota->titulo = $request['titulo'];
       $nota->subtitulo = $request['subtitulo'];
       $nota->parrafo=$request['parrafo'];
       $nota->fecha=$request['fecha']. '-01';

       $imagen = $nota->foto;
        //si mandé una imagen la guardo
        if ($request->file('foto')) {
            $imagen = $request->file('foto')->store('public');
            $imagen = basename($imagen);
        }

        $nota->foto = $imagen;

        //lo guardo en la BD
        $nota->save();


       //redirijo
       return redirect('/gente')
           ->with('status', 'Nota modificada exitosamente!')
           ->with('operation', 'success');
   }


   public function recordPhoto(Request $r){

       $message=[
           "pais.required" => 'El :attribute no puede estar vacio',
           "region.required" => 'La :attribute no puede estar vacia',
           "nombre.required" =>'La foto no puede estar vacia',
           "nombre.mimes" =>'La foto tiene que ser jpg o png',
       ];
        $this->validate($r, [
           'pais' => ['required'],
           'region' => ['required'],
           'nombre' => ['required', 'mimes:jpeg,png'],
       ],$message);

       $imagen=$r->file('nombre')->store('public');
       $imagen=basename($imagen);


      Photo::create([
       'pais' => $r['pais'],
       'region' => $r['region'],
       'user_id' => \Auth::user()->id,
       'nombre' => $imagen,
       ]);

       return redirect('/explora')
       ->with('status', 'Foto subida exitosamente!')
       ->with('operation', 'success');

     }



     public function updatePerfil(Request $request, $id)
      {
          //primero valido los datos
          $message=[
              "name.required"=> 'El :attribute no puede estar vacio',
              "apellido.required" => 'El :attribute no puede estar vacio',
              "nombreUsuario.required"=> 'El usuario no puede estar vacio',
              "nombreUsuario.unique"=> 'Ese usuario ya existe',
          ];

           $rules=[
              'name' => 'required', 'string', 'max:100',
              'apellido' => 'required', 'string', 'max:100',
              'nombreUsuario' => ['required', 'unique:users', 'string', 'max:20'],
              'pais' => 'nullable'
              //'fecha' => 'required',
          ];

         $this->validate($request, $rules, $message);

          //instacio una Nota
          $usuario = User::find($id);
          //asigno a los atributos de trs maneras distinta

          $usuario->name = $request['name'];
          $usuario->apellido = $request['apellido'];
          $usuario->nombreUsuario = $request['nombreUsuario'];
          $usuario->pais=$request['pais'];




           //lo guardo en la BD
           $usuario->save();


          //redirijo
          return redirect('/perfil')
              ->with('status', 'Perfil modificado exitosamente!')
              ->with('operation', 'success');
      }




}

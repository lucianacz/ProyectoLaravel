<link rel="stylesheet" href="/css/estilosformulario.css">



@extends('layout')

@section('main')

<main>
<section class="culturas">
  <div class="col-lg-4 col-md-8 col-10">
      <h4 style="color:grey;">EDITA TU EMAIL</h4>


    <form method="POST" enctype="multipart/form-data" class="align-items-center">
      @csrf


          <div class="align-items-center">
              <label for="email" class="col-form-label">{{ __('Email') }}</label>

                  <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$usuario->email}}" >

                  @error('nombreUsuario')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
          </div>


        <button type="submit" class="btn boton btn-primary col-8" style="padding-top:10px;">
            {{ __('Editar') }}
        </button>

        <div class="">
          <a href="http://culturasariri.com.ar/perfil/{{$usuario->id}}" style="padding-top:5px;"> VER PERFIL</a>
          <br>
          <a href="http://culturasariri.com.ar/edit/perfil/{{$usuario->id}}" style="padding-top:5px;"> EDITA TU PERFIL</a>
        </div>

    </form>
  </div>
</section>
</main>

@endsection

<link rel="stylesheet" href="/css/estilosformulario.css">



@extends('layout')

@section('main')

<main>
<section class="culturas">
  <div class="col-lg-4 col-md-8 col-10">
      <h4 style="color:grey;">EDITA TU USUARIO</h4>


    <form method="POST" enctype="multipart/form-data" class="align-items-center">
      @csrf


          <div class="align-items-center">
              <label for="nombreUsuario" class="col-form-label">{{ __('Usuario') }}</label>

                  <input id="nombreUsuario" type="text" class="form-control @error('nombreUsuario') is-invalid @enderror" name="nombreUsuario" value="{{$usuario->nombreUsuario}}" >

                  @error('nombreUsuario')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
          </div>

        <button type="submit" class="btn boton btn-primary col-8" style="margin-top:10px;">
            {{ __('Editar') }}
        </button>

        <div class="">
          <a href="http://culturasariri.com.ar/perfil/" style="margin-top:5px;"> VER PERFIL</a>
          <br>
          <a href="http://culturasariri.com.ar/edit/perfil/{{$usuario->id}}" style="margin-top:5px;"> EDITA TU PERFIL</a>
        </div>

    </form>
  </div>
</section>
</main>


@endsection

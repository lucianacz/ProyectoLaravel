@extends('layout')

@section('main')

<link rel="stylesheet" href="css/estilosformulario.css">

<main>



    <section class="culturas">
      <div class="col-lg-6 col-md-8 col-10">
        <h4 style="color:grey;">INICIA SESION</h4>
        <h5> ¡No te pierdas ninguna novedad!</h5>





    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="align-items-center casilleros">

      <div class="form-row align-items-center col-lg-8 col-md-8">
          <label for="email" class="col-md-4 col-form-label">{{ __('E-Mail') }}</label>

          <div class="col-md-10">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

    <div class="form-row align-items-center col-lg-8 col-md-8">
      <label for="password" class="col-md-4">{{ __('Constraseña') }}</label>

      <div class="col-md-10">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
    </div>
  </div>


    <div class="form-row">
      <div class="form-check align-items-center">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Recuerdame') }}
            </label>
        </div>
    </div>
  </div>

  <div class="form col-10 form-row">
    <button type="submit" class="btn boton col-6 btn-primary align-items-center">
        {{ __('Login') }}
    </button>
  </div>
    <div class="">
      @if (Route::has('password.request'))
          <a class="btn  btn-link" style="text-decoration:none;" href="{{ route('password.request') }}">
              {{ __('Te olvidaste la contraseña?') }}
          </a>
      @endif
    </div>

    </div>





    </form>

        </div>
      </div>
    </section>
    </main>







@endsection

@extends('layout')

@section('main')

<link rel="stylesheet" href="css/estiloscarga.css">

<main>



    <section class="culturas">
      <div class="col-lg-6 col-md-8 col-10">
        <h4 style="color:grey;">INICIA SESION</h4>
        <h5> ¡No te pierdas ninguna novedad!</h5>





    <form class="row" method="POST" action="{{ route('login') }}">
      @csrf


      <div class="form-row align-items-center col-lg-8 col-md-8">
            <label for="email" class="col-md-10">{{ __('E-Mail') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
          </div>

    <div class="form-row align-items-center col-lg-8 col-md-8">
      <label for="password" class="col-md-10 col-form-label">{{ __('Constraseña') }}</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
    </div>


        <div class="form-row align-items-center col-lg-8 col-md-8 check">
            <input  style="display:inline;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label style="display:inline;" class="form-check-label col-md-6" for="remember">
                {{ __('Recuerdame') }}
            </label>
        </div>


          <div class="form-row align-items-center col-lg-8 col-md-8">
        <button type="submit" class="btn boton btn-primary col-md-12">
            {{ __('Login') }}
        </button>
        </div>


        <div class="form-row align-items-center col-lg-8 col-md-8">
        <a class="loginBtn loginBtn--facebook" style="color:white; font-weight:400;" href='/facebook/login/'>
        Login con Facebook
      </a>

        <a class="loginBtn loginBtn--google" style="color:white; font-weight:400;" href="google/login">
        Login con Google
      </a>
        </div>



    <div class="form-row align-items-center col-lg-8 col-md-8">
    <a href="/register"> Registrarse </a><
  </div>

  
    <div class="form-row align-items-center col-lg-8 col-md-8">
      @if (Route::has('password.request'))
          <a class="btn-link" style="text-decoration:none;" href="{{ route('password.request') }}">
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

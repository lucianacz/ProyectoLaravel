<link rel="stylesheet" href="css/estiloscarga.css">



@extends('layout')

@section('main')

<main>
<section class="culturas">
  <div class="col-lg-4 col-md-8 col-10">
      <h4 style="color:grey;">REGISTRATE</h4>
      <h5> ¡Vení, sumate!</h5>

    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
      @csrf


        <div class="form-row align-items-center col-12">
        <label for="name" class="col-md-12 col-form-label"> Nombre </label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">

                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
          </div>


              <div class="form-row align-items-center col-12">
                <label for="name"  class="col-md-12 col-form-label">Apellido </label>
                  <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}">

                  @error('apellido')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
          </div>

            <div class="form-row align-items-center col-12">
              <label for="email"  class="col-md-12 col-form-label">{{ __('E-Mail') }}</label>

                  <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" >

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
          </div>


          <div class="form-row align-items-center col-12">
          <label for="nombreUsuario" class="col-md-12 col-form-label"> Usuario </label>
          <input id="nombreUsuario" type="text" class="form-control @error('nombreUsuario') is-invalid @enderror" name="nombreUsuario" value="{{ old('nombreUsuario') }}">

                    @error('nombreUsuario')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>


            <div class="form-row align-items-center col-12">
              <label for="password"  class="col-md-12 col-form-label">{{ __('Contraseña') }}</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  >

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
          </div>

        <div class="form-row align-items-center col-12">
        <label for="password-confirm" class="col-md-10 col-form-label">{{ __('Confirma contraseña') }}</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
        </div>

        <div class="form-row align-items-center col-12">
        <label for="pais" class="col-md-10 col-form-label">{{ __('Pais') }}</label>
        <select class="custom-select" id="paises" name="pais"></select>
        </div>

        <div class="form-row align-items-center col-12">
        <button type="submit" class="btn boton btn-primary col-12">
            {{ __('Register') }}
        </button>
        </div>


    </form>
  </div>
</section>
</main>

<script type="text/javascript">
function getPaises(){
  fetch('https://restcountries.eu/rest/v2/all')
    .then(response => {
      return response.json()
    })
    .then(data => {
      for(let i = 0; i < data.length; i++){
        let paises = document.querySelector("#paises")
        let option = document.createElement("option")
        option.text = data[i].name
        option.value = data[i].name
        paises.appendChild(option)
      }
    })
}

getPaises()

</script>
@endsection

<link rel="stylesheet" href="css/estilosformulario.css">



@extends('layout')

@section('main')

<main>
<section class="row gente">
  <div class="culturas col-lg-6 col-md-6 col-10">
    <h4 style="color:grey;">REGISTRATE</h4>
    <h5> ¡Comenzá a formar parte de esta comunidad!</h5>


                    <form method="POST" action="{{ route('register') }}">
                        @csrf



                        <div class="form-row align-items-center col-lg-8 col-md-8">
                            <label for="name" class="col-md-10 col-form-label">{{ __('Nombre') }}</label>

                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-row align-items-center col-lg-8 col-md-8">
                            <label for="name" class="col-md-10 col-form-label">{{ __('Apellido') }}</label>

                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('name') }}" required autocomplete="apellido" autofocus>

                                @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row align-items-center col-lg-8 col-md-8">
                            <label for="email" class="col-md-10 col-form-label">{{ __('E-Mail') }}</label>

                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row align-items-center col-lg-8 col-md-8">
                            <label for="password" class="col-md-10 col-form-label">{{ __('Contraseña') }}</label>

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row align-items-center col-lg-8 col-md-8">
                            <label for="password-confirm" class="col-md-10 col-form-label">{{ __('Confirma contraseña') }}</label>

                            <div class="col-md-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-row align-items-center col-lg-8 col-md-8">
                            <label for="pais" class="col-md-10 col-form-label">{{ __('Pais') }}</label>

                            <div class="col-md-10">
                              <select class="custom-select" id="paises" name="pais">

                              </select>
                            </div>
                        </div>


                        <div class="form-row align-items-center col-10">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn boton btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
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
        let opcion = document.createElement("option")
        opcion.text = data[i].name
        opcion.value = data[i].name
        paises.appendChild(opcion)
      }
    })
}

getPaises()

</script>
@endsection

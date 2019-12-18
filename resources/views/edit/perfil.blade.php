<link rel="stylesheet" href="/css/estilosformulario.css">



@extends('layout')

@section('main')

<main>
<section class="culturas">
  <div class="col-lg-4 col-md-8 col-10">
      <h4 style="color:grey;">REGISTRATE</h4>
      <h5> ¡Vení, sumate!</h5>

    <form method="POST" enctype="multipart/form-data" class="align-items-center">
      @csrf


          <div class="align-items-center">
              <label for="name" class="col-form-label">{{ __('Nombre') }}</label>



                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$usuario->name}}">

                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
          </div>


          <div class="align-items-center">
              <label for="name" class="col-form-label">{{ __('Apellido') }}</label>

                  <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{$usuario->apellido}}">

                  @error('apellido')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
          </div>

          <div class="align-items-center">
              <label for="email" class="col-form-label">{{ __('E-Mail') }}</label>

                  <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$usuario->email}}" >

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
          </div>


        <label for="pais" class="col-md-10 col-form-label">{{ __('Pais') }}</label>
        <select class="custom-select" id="paises" name="pais" >
          <option value="{{$usuario->pais}}" selected>{{$usuario->pais}}</option>          
        </select>



        <button type="submit" class="btn boton btn-primary">
            {{ __('Editar') }}
        </button>

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



<link rel="stylesheet" href="css/estiloscarga.css">


@extends('layout')

@section('main')



<main>

  <section class="culturas">
    <div class="col-lg-6 col-md-6 col-10">
      <h4 style="color:grey;">NUEVA FOTO</h4>
      <h5> Gracias por sumar contenido a la red ☺</h5>


  <form method="post" target="" enctype="multipart/form-data">
  @csrf
  <div class="form-row">
  <div class="col-lg-6 col-md-12">
    <label for="title">Titulo: ¿En qué lugar específico?* </label>
    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">

    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>


  <div class="col-lg-6 col-md-12">
    <label for="pais" class="form-label @error('pais') is-invalid @enderror">{{ __('Pais') }}*</label>
    <select class="custom-select" id="paises" name="pais">{{ old('pais') }}</select>
    @error('pais')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

  <div class="col-lg-6 col-md-12">
    <label for="region" class="form-label @error('region') is-invalid @enderror">{{ __('Region') }}*</label>
    <select class="custom-select" id="regiones" name="region">{{ old('region') }}</select>
    @error('region')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

  <div class="col-lg-6 col-md-12">
    <label for="nombre">Imagen</label>
    <input id="files" class="form-control @error('foto') is-invalid @enderror" name="nombre" style="display: null;" type="file">
    @error('nombre')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>


  <div class="col-12">
  <button class="btn col-12" type="submit">Subir foto</button>
  </div>

  </form>
</div>

</section>
</main>


<script type="text/javascript">
function getPaises(){
  fetch('https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master/countries%2Bstates%2Bcities.json')
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

document.querySelector('#paises').onchange = (function(){
  let selector = document.querySelector('#paises')
  let pais = selector.value

  fetch('https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master/countries%2Bstates%2Bcities.json')
    .then(response => {
      return response.json()
    })
    .then(data => {
      for(let i = 0; i < data.length; i++){
        if(data[i].name == pais ){
          let regionesJson = data[i].states
          regiones.innerHTML = ''
          for(var j in regionesJson){
            console.log(j)
            let regiones = document.querySelector("#regiones")
            let option = document.createElement("option")
            option.text = j
            option.value = j
            regiones.appendChild(option)

          }
        }
      }
    })
})






getPaises()

</script>



@endsection

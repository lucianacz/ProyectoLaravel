

<link rel="stylesheet" href="css/estiloscarga.css">


@extends('layout')

@section('main')



<main>

  <section class="culturas">
    <div class="col-lg-6 col-md-6 col-10">
      <h4 style="color:grey;">NUEVA NOTA</h4>
      <h5> Gracias por sumar contenido a la red ☺</h5>


  <form method="post" target="" enctype="multipart/form-data">
  @csrf
  <div class="form-row">
  <div class="col-12">
    <label for="title">Titulo: ¿En qué lugar específico?* </label>
    <input id="title" type="text"  onkeyup="validateTitle(this.value)"  id="textbox" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
    <span id=title style="color:#00A79D;"></span>
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

  <div class="col-12" style="padding-top:5px;">
    <label for="subtitulo">Subtitulo: ¿Qué fue lo que pasó?*</label>
    <input id="subtitulo" type="text" class="form-control @error('subtitulo') is-invalid @enderror" name="subtitulo" value="{{ old('subtitulo') }}">

    @error('subtitulo')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

  <div class="col-lg-6 col-md-12" style="padding-top:5px;">
    <label for="pais" class="form-label @error('pais') is-invalid @enderror">{{ __('Pais') }}*</label>
    <select class="custom-select" id="paises" name="pais">
        <option value="{{ old('pais') }}" selected> {{ old('pais') }}</option>
    </select>
    @error('pais')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

  <div class="col-lg-6 col-md-12" style="padding-top:5px;">
    <label for="region" class="form-label @error('region') is-invalid @enderror">{{ __('Region') }}*</label>
    <select class="custom-select" id="regiones" name="region">
      <option value="{{ old('region') }}" selected>{{ old('region') }}</option>
      </select>
    @error('region')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>


  <div class="col-12" style="padding-top:5px;">
    <label for="parrafo">Primer Parrafo*</label>
    <textarea type="text" id="textbox" maxlength="550" onkeyup="charcountupdate(this.value)" rows="8" class="form-control @error('parrafo1') is-invalid @enderror" placeholder="" name="parrafo1">{{ old('parrafo1') }}</textarea>
    <span id=charcount style="color:#00A79D;"></span>

    @error('parrafo1')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

  </div>

  <div class="col-12" style="padding-top:5px;">
    <label for="destacado">Destacado*</label>
    <input type="text" class="form-control @error('destacado') is-invalid @enderror" placeholder="" name="destacado" value="{{ old('destacado') }}">

    @error('destacado')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

  <div class="col-12" style="padding-top:5px;">
    <label for="parrafo">Segundo Parrafo*</label>
    <textarea type="text" maxlength="550" rows="8" id="textbox2" onkeyup="charcountupdate2(this.value)" class="form-control @error('parrafo2') is-invalid @enderror" placeholder="" name="parrafo2">{{ old('parrafo2') }}</textarea>
    <span id=charcount2 style="color:#00A79D;"></span>
    @error('parrafo2')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror  </div>

  <div class="col-12" style="padding-top:5px;">
    <label for="video">Link de Youtube</label>
    <input type="text" class="form-control" placeholder="" name="video" value="{{ old('video') }}">
  </div>

  <div class="col-12" style="padding-top:5px;">
    <label for="epigrafe">Epigrafe*</label>
    <input type="text" class="form-control @error('epigrafe') is-invalid @enderror" placeholder="" name="epigrafe" value="{{ old('epigrafe') }}">

    @error('epigrafe')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>


  <div class="col-6" style="padding-top:5px;">
      <label for="fecha">Fecha de Visita</label>
      <input type="month" name="fecha" class="form-control @error('fecha') is-invalid @enderror" min="1939-01-01" max="2017-12-31" value="{{ old('fecha') }}">
      @error('fecha')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
  </div>

  <div class="col-6" style="padding-top:5px;">
    <label for="foto">Imagen</label>
    <input id="files" class="form-control @error('foto') is-invalid @enderror" name="foto" style="display: null;" type="file">
    @error('foto')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>



  <div class="col-12" style="padding-top:5px;">
  <button class="btn col-12" type="submit">Subir nota</button>
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

function validateTitle(str){
  var lng = 40 - str.length;
  document.getElementById("title").innerHTML = lng + ' de 40 caracteres';
  }


function charcountupdate(str) {
	var lng = 500 - str.length;
	document.getElementById("charcount").innerHTML = lng + ' de 500 caracteres';
}

function charcountupdate2(str) {
	var lng = 500 - str.length;
	document.getElementById("charcount2").innerHTML = lng + ' de 500 caracteres';
}

</script>



@endsection

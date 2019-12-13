<link rel="stylesheet" href="/css/estiloscarga.css">


@extends('layout')

@section('main')

<main>

  <section class="culturas">
    <div class="col-lg-6 col-md-6 col-10">
      <h4 style="color:grey;">{{$nota->pais}}, {{$nota->region}}</h4>
      <h5> Siempre se puede mejorar :)</h5>


  <form action="/gente" method="post" target="" enctype="multipart/form-data">
  <div class="form-row">
  <div class="col-12">
    <label for="title">Titulo</label>
    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$nota->titulo}}">
          @error('title')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>

  <div class="col-12">
    <label for="subtitle">Subtitulo</label>
    <input id="subtitle" type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" value="{{$nota->subtitulo}}">
          @error('subtitle')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
    </div>

  <div class="col-12">
    <label for="paragraph">Primer Parrafo</label>
    <textarea id="paragraph" type="text" maxlength="5000" rows="8" class="form-control" placeholder="" name="paragraph">{{$nota->parrafo1}}</textarea>
    @error('paragraph')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

  <div class="col-12">
    <label for="destacado">Destacado</label>
    <input id="destacado" type="text" class="form-control @error('destacado') is-invalid @enderror" name="destacado" value="{{$nota->destacado}}">
          @error('destacado')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>

  <div class="col-12">
    <label for="paragraph">Segundo Parrafo</label>
    <textarea type="text" maxlength="5000" rows="8" class="form-control" placeholder="" name="paragraph">{{$nota->parrafo2}}</textarea>
    @error('paragraph')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>



  <div class="col-12">
    <label for="video">Link de Youtube</label>
    <input type="text" class="form-control" placeholder="" name="video" value="{{$nota->video}}">
  </div>

  <div class="col-12">
    <label for="epigrafe">Epigrafe*</label>
    <input type="text" class="form-control @error('epigrafe') is-invalid @enderror" placeholder="" name="epigrafe" value="{{$nota->epigrafe}}">

    @error('epigrafe')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>


  <div class="col-12">
      <label for="fecha">Fecha de Visita: {{$nota->fecha->format('m-Y')}}</label>
      <input type="month" name="fecha" class="form-control @error('fecha') is-invalid @enderror" min="1939-01-01" max="2017-12-31" value="">
      @error('fecha')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
  </div>

  <div class="col-12">
    <label for="foto">Imagen</label>
    <div class="">
      <img src="/storage/{{$nota->foto}}" alt="">
    </div>
    <input id="files" class="form-control @error('foto') is-invalid @enderror" name="foto" style="display: null;" type="file">
    @error('foto')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

  <div class="col-12">
  <button class="btn col-12" type="submit">Editar nota</button>
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


@endsection

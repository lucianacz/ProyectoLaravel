<link rel="stylesheet" href="/css/estiloscarga.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


@extends('layout')

@section('main')

<main>

  <section class="culturas">
    <div class="col-lg-6 col-md-6 col-10">
      <h4 style="color:grey;">{{$nota->pais}}, {{$nota->region}}</h4>
      <h5> Siempre se puede mejorar :)</h5>


<form method="post" target="" enctype="multipart/form-data" id="editForm">
  @csrf
    <div class="form-row">
  <div class="col-12">
    <label for="titulo">Titulo</label>
    <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{$nota->titulo}}">
          @error('titulo')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>

  <div class="col-12">
    <label for="subtitulo" style="padding-top:5px;">Subtitulo</label>
    <input id="subtitulo" type="text" class="form-control @error('subtitulo') is-invalid @enderror" name="subtitulo" value="{{$nota->subtitulo}}">
          @error('subtitulo')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
    </div>



  <div class="col-12">
      <label for="fecha" style="padding-top:5px;">Fecha de Visita: {{$nota->fecha->format('m-Y')}}</label>
      <input type="month" name="fecha" class="form-control @error('fecha') is-invalid @enderror" min="1939-01-01" max="2017-12-31" value="{{$nota->fecha->format('Y-m')}}">
      @error('fecha')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
  </div>

  <div class="col-12">
      <span class="uk-icon-button" uk-icon="camera"></span> <label for="foto">Imagen 1</label>
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




  <div class="col-12" style="padding-top:5px;">
    <label for="parrafo">Parrafo 1 *</label>
    <textarea type="text" id="textbox" maxlength="3000" onkeyup="charcountupdate(this.value)" rows="8" class="form-control @error('parrafo') is-invalid @enderror" placeholder="" name="parrafo">{{$nota->parrafo}}</textarea>
    <span id=charcount style="color:#00A79D;"></span>

    @error('parrafo')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>




  <div class="col-12" style="padding-top:5px;">
    <span class="uk-icon-button" uk-icon="camera"></span> <label for="foto2">Imagen 2 (OPCIONAL)</label>
    <div class="">
      <img src="/storage/{{$nota->foto2}}" alt="">
    </div>
    <input id="files" class="form-control @error('foto2') is-invalid @enderror" name="foto2" type="file">
    @error('foto2')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>



  <div class="col-12" style="padding-top:5px;">
    <label for="parrafo2">Parrafo 2 (OPCIONAL)</label>
    <textarea type="text" id="textbox" maxlength="3000" onkeyup="charcountupdate(this.value)" rows="8" class="form-control @error('parrafo2') is-invalid @enderror" placeholder="" name="parrafo2">{{$nota->parrafo2}}</textarea>
    <span id=charcount style="color:#00A79D;"></span>

    @error('parrafo2')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

  <div class="col-12" style="padding-top:5px;">
    <span class="uk-icon-button" uk-icon="camera"></span> <label for="foto3">Imagen 3 (OPCIONAL)</label>
    <div class="">
      <img src="/storage/{{$nota->foto3}}" alt="">
    </div>
    <input id="files" class="form-control @error('foto3') is-invalid @enderror" name="foto3" type="file">
    @error('foto3')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

  <div class="col-12" style="padding-top:5px;">
    <label for="parrafo3">Parrafo 3 (OPCIONAL)</label>
    <textarea type="text" id="textbox" maxlength="3000" onkeyup="charcountupdate(this.value)" rows="8" class="form-control @error('parrafo3') is-invalid @enderror" placeholder="" name="parrafo3">{{$nota->parrafo3}}</textarea>
    <span id=charcount style="color:#00A79D;"></span>

    @error('parrafo3')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>









  <div class="col-12" style="padding-top:5px;">
  <button class="btn col-12" onclick="event.preventDefault();confirmUpdate();">Editar nota</button>
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
});



function confirmUpdate(event){
  swal({
  title: "Estas seguro?",
  text: "Una vez editada no podrás volver atrás!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willUpdate) => {
  if (willUpdate) {
    swal("La nota fue editada exitosamente", {
      icon: "success",
    });
    document.querySelector('#editForm').submit();
  } else {
    swal("La nota sigue igual :)");
    event.preventDefault();
  }
});
}



function charcountupdate(str) {
	var lng = 500 - str.length;
	document.getElementById("charcount").innerHTML = lng + ' de 5000 caracteres';
}

</script>

@endsection

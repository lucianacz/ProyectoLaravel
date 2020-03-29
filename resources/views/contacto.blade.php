<link rel="stylesheet" href="css/estilosformulario.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



@extends('layout')

@section('main')


<main>

  <section class="culturas">
    <div class="col-lg-6 col-md-6 col-10">
      <h4 style="color:grey;">ESCRIBINOS</h4>
      <h5> culturasariri@gmail.com</h5>
      <h5> Buenos Aires, Argentina</h5>


      <form action="contact.php" method="post">
        <div class="form-row">

<div class="col-md-6 mb-3">
  <input type="text" class="form-control" name="name" placeholder="Nombre" required>
</div>

<div class="col-md-6 mb-3">
  <input type="email" class="form-control" name="email" placeholder="Email" required>
</div>


<div class="col-md-12 mb-3">
  <textarea type="text" class="form-control" name="mensaje" placeholder="Mensaje" rows="7"required>
  </textarea>
</div>

</div>


<button class="btn btn-primary boton col-8" type="submit">Enviar</button>
</form>






    </div>
  </section>



  <section>
    <div uk-slider="center: true">

      <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

          <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
              @foreach ($notas as $nota)
              <li>
                <a href="{{url('nota/'.$nota->id)}}">
                  <div class="uk-card uk-card-default">
                      <div class="uk-card-media-top">
                          <img src="/storage/{{$nota->foto}}" alt="">
                      </div>
                      <div class="uk-card-body">
                          <h3 class="uk-card-title">@ {{$nota->usuario->nombreUsuario}}</h3>
                          <p>{{$nota->subtitulo}}.
                          <br>En: {{$nota->titulo}}, {{$nota->pais}}
                          <br>VER MÁS</p>
                      </div>
                  </div>
                  </a>
              </li>
              @endforeach
          </ul>

          <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
          <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

      </div>

      <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

  </div>
  </section>
</main>

@endsection

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@extends('layout')

@section('main')


<main>




  <section class="explora">
    <div class="col-lg-10 col-md-8 col-10">
      <h4 style="color:grey;">GALERIA DE FOTOS</h4>
      <h5> SUBI TU FOTO</h5>
      <a href="/newPhoto" class="uk-icon-button  uk-margin-small-right" uk-icon="plus"></a>

      <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push; min-height: 300; max-height: 400">
        <BR>

        <ul class="uk-slideshow-items">

            <li>
                 <img src="/img/portada.jpg" alt="" uk-cover>
                 <div class="uk-position-center uk-position-small uk-text-center">
                     <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Bakhtapur, Nepal</h2>
                 </div>
             </li>

             <li>
                  <img src="/img/portada1.jpg" alt="" uk-cover>
                  <div class="uk-position-center uk-position-small uk-text-center">
                      <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Bagan, Myanmar</h2>
                  </div>
              </li>


              <li>
                   <img src="/img/portada2.jpg" alt="" uk-cover>
                   <div class="uk-position-center uk-position-small uk-text-center">
                       <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Okhinawa, Japon</h2>
                   </div>
               </li>
    </ul>


    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
  <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>


</div>

<div class="row col-12" style="display:flex; justify-content:center; margin: 0 auto;">
    @foreach ($fotos as $foto)
    <article class="col-lg-3 col-md-4 col-11" style="padding:10px;">
      <div class="uk-inline" uk-lightbox="animation: fade">



        <div class="uk-inline" style="">

              <div>
                  <div class="uk-card uk-card-default">
                      <div class="uk-card-media-top">
                          <a class="uk-inline" href="/storage/{{$foto->nombre}}" data-caption="{{$foto->pais}}, {{$foto->region}}">
                          <img src="/storage/{{$foto->nombre}}" alt="">
                      </div>

                      <div class="uk-card-body">
                        <p>  En: {{$foto->region}}, {{$foto->pais}}</p>

                          @guest

                          @else
                            <?php if ($foto->usuario->id == $logeado->id || $logeado->adm == 1) :  ?>
                              <form id="deletePhoto{{$foto->photo_id}}" action="{{ url('http://culturasariri.com.ar/delete/photo/')}}{{$foto->photo_id}} " method="POST" >
                                  @csrf
                                  <button style="border:0;" type="submit" onclick="event.preventDefault();confirmDelete(event,this,{{$foto->photo_id}});" class="uk-icon-button  uk-margin-small-right" uk-icon="trash">
                                  </button>
                              </form>
                            <?php endif; ?>
                            @endguest




                      </div>
                  </div>
              </div>


        </div>
      </div>
    </article>
    @endforeach
</div>








  </section>
<script>


function confirmDelete(event,tag,idFoto){
  swal({
  title: "Estas seguro?",
  text: "Una vez borrada no podrás recuperarla!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("La foto fue borrada exitosamente", {
      icon: "success",
    });

    document.querySelector('#deletePhoto'+idFoto).submit();
  } else {
    swal("La foto sigue online :)");
    event.preventDefault();
  }
});
}
</script>


</main>

@endsection

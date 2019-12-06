<header>
      <div class="imagen">
        <a href="/"><img src="/img/logohome-01.png" alt="Cultura Sariri"></a>
      </div>

      <div id="sideNavigation" class="sidenav">
        <ul>
          <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a></li>
          <li><a href="/"> Home </a></li>
          <li><a href="/quienessomos"> Quienes Somos </a></li>
          <li><a href="/gente"> Gente y Culturas </a></li>
          <li><a href="/explora"> Explora </a></li>
          <li><a href="/contacto"> Contacto </a></li>


          @guest
          <li><a href="/login"> Login </a></li>
          <li><a href="/register"> Registrarse </a></li>
          @else
          <li><a href="perfil"> Mi Perfil </a></li>
          <li><a href="/newNote"> Nueva Nota </a></li>
          <li><a href="/edit"> Editar </a></li>
          <li><a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }} </a></li>
          @endguest
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>

      </div>

      <nav class="topnav">
        <a href="#" onclick="openNav()" class="posicionIcono">
          <svg width="30" height="30" id="icoOpen" class="icono">
          <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
          <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
          <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
      </svg>
    </a>
  </nav>
  </div>
  </header>


<script>
function openNav() {
    document.getElementById("sideNavigation").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Pastas Barletta</title>
      <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Headland+One" rel="stylesheet">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/index.css">
        <link rel="stylesheet" href="/css/logyregistro.css">
        <link rel="stylesheet" href="/css/carrito.css">
        <link rel="stylesheet" type="text/css" href="js/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css"/>
  </head>

  <!-- class="enlace_desactivado" -->

  <body>

    
     
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
         
             <form class="buscador" action="/listaProductos" method="get">
              <div class="input-group mt-3">
                <input type="text" name="name" class="form-control" placeholder="¿Qué estás buscando?" aria-label="¿QUE ESTÁS BUSCANDO?" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="input-group-text" id="basic-addon2" type="submit"><i class="fas fa-search"></i></button>
                    </div>
              </div>
            </form>
         
         
         

         <div class="logo">
             <a href="/"><img src="/img/barletta-productos.png" class="logo-nav" alt=""></a>
         </div>
          
          
          
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
          </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav ml-auto">

  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><ion-icon name="restaurant-outline"></ion-icon>Productos</a>
      <div class="dropdown-menu">
	<a class="dropdown-item" href="/productos/com">Todos los fideos</a>
      <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="{{route('soperos')}}">Soperos</a>
              <a class="dropdown-item" href="{{route('guiseros')}}">Guiseros</a>
              <a class="dropdown-item" href="{{route('monitos')}}">Moñitos</a>
              <a class="dropdown-item" href="{{route('nidos')}}">Nidos</a>
              <a class="dropdown-item" href="{{route('tricolor')}}">Tricolor</a>

          
      </div>
      
  </li>




  <li><a href="/"><ion-icon name="chatbubbles-outline"></ion-icon>Ayuda</a></li>

            @if((Auth::user()) && (Auth::user()->admin))
  <li>
    <a href="/productos/agregar"><ion-icon name="beer-outline"></ion-icon><br>Crear<br>Producto</a>
  </li>
  <!-- <li class="nav-item active">
    <a  href="/categoriecreate"><i class="fas fa-plus"></i></i></ion-icon><br>Agregar <br> Categoria </a>
  </li>
  <li class="nav-item active">
    <a  href="/subcategoriecreate"><i class="fas fa-plus"></i></i></ion-icon><br>Agregar <br> Subcategoria </a>
  </li>  -->
  @endif

  @if($user = Auth::user())
  <li class="nav-item active">
    <a  href="/carrito" ><ion-icon name="cart-outline"></ion-icon>
      (<span style="color:red"; id="cantCar">{{ $user->carrito()->sum('quantity') }}</span>)
      <br> Carrito</a>
    </li>

    @endif

  @guest
  <li class="nav-item active">
    <a  href="/register"><ion-icon name="pencil-outline"></ion-icon>Registrate</a>
  </li>
  <li class="nav-item active">
    <a href="/login"><ion-icon name="person-outline"></ion-icon>Ingresar</a>
  </li>

    @else

    <ul>

<li> <a class="enlace_desactivado"> <img src="/storage/{{Auth::user()->foto}}" alt="" class="foto">
        <br>

        {{ Auth::user()->name }} <span class="flecha">&#9660;</span><span class="caret"></span></a>
  <ul>
    <li>
    @if((Auth::user()->admin))
     <a href="/pedidos/cliente"> Pedidos </a>
  @elseif($user = Auth::user())
  <a href="/pedidos"> Mis Pedidos </a>
  @endif
     </li>
    <li> <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a> <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form></li>
  </ul>

</li>
</ul>

<!--
    <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
        <img src="/storage/{{Auth::user()->foto}}" alt="" class="foto">
        <br>
        {{ Auth::user()->name }} <span class="caret"></span>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="/pedidos">Perfil <br>{{Auth::user()->name}} </a>
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>

        </div>
    </li> -->

      @endguest
      
    </ul>
  </div>


</div>
</nav>


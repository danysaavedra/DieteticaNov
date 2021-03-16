@extends('layouts.plantilla')

@section('contenido')

<div class="container-fluid">
    <!-- volverArriba -->
    <a class="ir-arriba"  javascript:void(0) title="Volver arriba">
      <span class="fa-stack">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
      </span>
    </a>
<!-- volverArriba -->
  @if (session('mensaje'))
  <div style="margin: 0px auto" class="alert alert-success" role="alert">
   <strong>{{ session('mensaje') }}</strong>
  </div>
  @endif



<!-- primer carrusel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active banner1">
            <div class="carousel-caption">
                <h2>Elaboradas con
                100% trigo candeal
                de la más alta calidad.</h2>
            </div>
        </div>

        <div class="carousel-item banner1">
            <div class="carousel-caption">
                <h2>Texto de prueba</h2>
            </div>
        </div>
        <div class="carousel-item banner1">
            <div class="carousel-caption">
                <h2>Bla bla bla</h2>
            </div>
        </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
  </div>
 <!-- primer carrusel -->




 <!-- promociones -->
<!--  <section id="productosDestacados">
    <div class="titulo-productos">
        <h3>PROMOCIONES <br>Semana del 3/7 al 10/7</h3>
      <hr>
    </div>
    @if(isset($productos))
    <div class="center">
          @foreach ($productos as $producto)
          @if( $producto->promo === 1 && $producto->stock === 0)
          <div style="text-align:center">
            <a href="/productos/detalles/{{$producto->id}}">
            <ul class="list-group">
              <li class="list-group-item list-group-item-danger">Sin Stock</li>
            </ul>
            <br>
            <img class="productoPromo"src="/storage/{{$producto->avatar}}"alt="">
            <strong class="titulo-productos">{{$producto->name}}</strong>
            <br>
            <strong class="titulo-productos">${{$producto->price}}</strong>
            </a>
          </div>

         @elseif( $producto->promo === 1 && $producto->stock < 50 )
            <div style="text-align:center">
              <a href="/productos/detalles/{{$producto->id}}">
              <ul class="list-group">
              <li class="list-group-item list-group-item-warning">Stock Limitado</li>
              </ul>
                <img class="productoPromo"src="/storage/{{$producto->avatar}}"alt="">
              <br>
              <strong class="titulo-productos">{{$producto->name}}</strong>
              <br>
              <strong class="titulo-productos">${{$producto->price}}</strong>
              </a>
            </div>
            @elseif($producto->promo === 1 && $producto->stock >= 50)
            <div style="text-align:center">
              <a href="/productos/detalles/{{$producto->id}}">
              <ul class="list-group">
                <li class="list-group-item list-group-item-success">Disponible</li>
              </ul>
              <img class="productoPromo"src="/storage/{{$producto->avatar}}"alt="">
              <br>
              <strong class="titulo-productos">{{$producto->name}}</strong>
              <br>
              <strong class="titulo-productos">${{$producto->price}}</strong>
              </a>
            </div>
            @endif
          @endforeach
        </div>
      @endif
  </section> -->
 <!-- promo -->




<!-- CATEGORIA -->
<section class="container" id="productosDestacados">
    @if($categorias)
       <div class="titulo-seccion">
           <h3>SELECCION&Aacute; UNA CATEGOR&Iacute;A</h3>
       </div>
       <div class="row">
    @foreach($categorias as $categoria)
    @if($categoria->name == "Soperos")

          <div class="col-md-4">
      <a href="{{route('soperos')}}"><img src="/storage/{{$categoria->imagen}}" class="img-fluid" alt="...">
      <div class="card-body">
        <p class="card-text">{{$categoria->name}}</p>
      </div></a>
    </div>
          @elseif($categoria->name=="Guiseros")

          <div class="col-md-4">
      <a href="{{route('guiseros')}}"><img src="/storage/{{$categoria->imagen}}" class="img-fluid" alt="...">
      <div class="card-body">
      <p class="card-text">{{$categoria->name}}</p>
      </div></a>
    </div>
          @elseif($categoria->name=="Moños")

          <div class="col-md-4">
      <a href="{{route('monitos')}}"><img src="/storage/{{$categoria->imagen}}" class="img-fluid" alt="...">
      <div class="card-body">
      <p class="card-text">{{$categoria->name}}</p>
      </div></a>
    </div>
          @elseif($categoria->name=="Nidos")

          <div class="col-md-4">
      <a href="{{route('nidos')}}"><img src="/storage/{{$categoria->imagen}}" class="img-fluid" alt="...">
      <div class="card-body">
      <p class="card-text">{{$categoria->name}}</p>
      </div></a>
    </div>
          @else($categoria->name=="Tricolor")

          <div class="col-md-4">
      <a href="{{route('tricolor')}}"><img src="/storage/{{$categoria->imagen}}" class="img-fluid" alt="...">
      <div class="card-body">
      <p class="card-text">{{$categoria->name}}</p>
      </div></a>
    </div>
          @endif
    @endforeach
    </div>
    @endif
</section>
<!-- CATEGORIA -->

<br>





<!-- SUBCATEGORIA -->
<section class="container" id="productosDestacados">
    @if($subcategorias)
       <div class="titulo-seccion">
           <h3>SELECCION&Aacute; UNA CATEGOR&Iacute;A</h3>
       </div>
       <div class="row">
    @foreach($subcategorias as $subcategoria)
    @if($subcategoria->name == "Pasta corta")

          <div class="col-md-4">
      <a href="{{route('pastacorta')}}"><img src="/storage/{{$subcategoria->imagen}}" class="img-fluid" alt="...">
      <div class="card-body">
        <p class="card-text">{{$subcategoria->name}}</p>
      </div></a>
    </div>
          @elseif($subcategoria->name=="Especialidades")

          <div class="col-md-4">
      <a href="{{route('especialidades')}}"><img src="/storage/{{$subcategoria->imagen}}" class="img-fluid" alt="...">
      <div class="card-body">
      <p class="card-text">{{$subcategoria->name}}</p>
      </div></a>
    </div>
          @else($subcategoria->name=="Pasta Larga")

          <div class="col-md-4">
      <a href="{{route('pastalarga')}}"><img src="/storage/{{$subcategoria->imagen}}" class="img-fluid" alt="...">
      <div class="card-body">
      <p class="card-text">{{$subcategoria->name}}</p>
      </div></a>
    </div>

          @endif
    @endforeach
    </div>
    @endif
</section>
<!-- SUBCATEGORIA -->


<!-- La Pasta familias -->

<div class="container pasta-familiar">
      <div class="row">
          <div class="col-lg-12 cuadro-borde text-center">
              <p>La pasta familiar desde 1888</p>
          </div>
      </div>
    </div>
<!-- La pasta familiar -->

<!-- Tipo de envio -->

<div class="barra">
     <div class="container">
      <div class="row">

        <div class="col-lg-4 text-center">
            <img src="/img/metodos-de-pago.png">
            <h5>MÉTODOS DE PAGO</h5>
            <p>Conocé nuestros métodos de pago <u><strong>
Elegí método que quieras</strong></u></p>
        </div>
        <div class="col-lg-4 text-center">
            <img src="/img/metodos-de-envio.png">
            <h5>MÉTODOS DE ENVÍO</h5>
            <p>Envíos a domicilio a todo el país <u><strong>Calculá el costo de envío!</strong></u></p>
        </div>
        <div class="col-lg-4 text-center">
            <img src="/img/como-comprar.png">
            <h5>CÓMO COMPRAR</h5>
            <p>Te ayudamos con tus compras <u><strong>Cómo compro?</strong></u></p>
        </div>

      </div>
    </div>
    </div>
<!-- Tipo de envio -->


</div>




<script type="text/javascript" src="js/slide.js"></script>
<script src="js/botonarriba.js"></script>
<script src="../js/librerias.js"></script>
<script src="../js/products.js"></script>
@endsection

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

  
<!-- buscador -->
<!-- <form  class="buscador" action="/listaProductos" method="get">
  <div class="input-group mt-3">
    <input type="text" name="name" class="form-control" placeholder="¿QUE ESTÁS BUSCANDO?" aria-label="¿QUE ESTÁS BUSCANDO?" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="input-group-text" id="basic-addon2" type="submit"><i class="fas fa-search"></i></button>
        </div>
  </div>
</form> -->

<!-- fin-buscador -->




 <!-- botonera productos
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('soperos')}}">Soperos</a></li>
  <li class="breadcrumb-item"><a href="{{route('guiseros')}}">Guiseros</a></li>
  <li class="breadcrumb-item"><a href="{{route('monitos')}}">Moñitos</a></li>
  <li class="breadcrumb-item"><a href="{{route('nidos')}}">Nidos</a></li>
  <li class="breadcrumb-item"><a href="{{route('tricolor')}}">Tricolor</a></li>
</ol>
botonera productos -->

 <!-- promociones
  <section id="productosDestacados">
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

                  <!-- https://fullstacklima2.slack.com/files/U6G1JK4KX/FRWDVE1UG/mercadopago_edit.mp4 -->

   <!--         @elseif( $producto->promo === 1 && $producto->stock < 50 )
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
  </section>
 promo -->

<!-- primer carrusel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <!--   <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active banner1">
            <div class="carousel-caption">
                <h2>Elaboradas con 
                100% trigo candeal 
                de la más alta calidad.</h2>
            </div>
        </div>
<!--
          <div class="carousel-item">
          
            </div>  -->
<!--
          <div class="carousel-item">
              <img src="/img/limpieza.jpg" class="d-block w-100" alt="...">
            </div> -->

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

  <!-- seccion Comestibles-->
  <section id="productosDestacados">
      <div class="titulo-productos">
          <h3>SELECCION&Aacute; UNA CATEGOR&Iacute;A</h3>
        <hr>
      </div>
        @if(isset($productos))
      <div class="container-productos">
          @foreach ($productos as $producto)
          @if($producto->category->dameSubCategoria() == 'Comestibles' && $producto->dameCategoria() == 'Nidos')

          <article class="producto">
            <a href="/productos/detalles/{{$producto->id}}">
              <div class="producto-hover">
                  <div class="producto-hover-content">
                    @if($producto->stock > 0)
                    <ion-icon style='color:rgba(0, 150, 0 ,0.5);' name="checkmark-done-outline"></ion-icon>
                    @elseif($producto->stock == 0)
                    <strong style='color:rgba(200 ,0 ,0 ,0.7); font-size:2rem;'>Sin Stock</strong>
                    <br>
                    <ion-icon style='color:rgba(200 ,0 ,0 ,0.7);font-size:2.5rem;' name="alert-outline"></ion-icon>
                    @endif
                  </div>
              </div>
              </a>

              <div class="titulo">
            <a href="/productos/detalles/{{$producto->id}}"><h5>{{$producto->name}}</h5>
            

                  <img src="/storage/{{$producto->avatar}}"alt="Comestible">
                  </a>
            </div>

                  @if($producto->stock == 0)

            <br>
            <p>{{$producto->description}}</p>
            <br>
            <strong>${{$producto->price}}</strong>
            <br>
            <ul class="list-group">

            <li class="list-group-item list-group-item-danger">Sin Stock</li>

          </ul>
            <br>
            @elseif($producto->stock < 50)
            <a href="/productos/detalles/{{$producto->id}}">
            <br>
            <p>{{$producto->description}}</p>
            <br>
            <strong>${{$producto->price}}</strong>
            <br>
            <ul class="list-group">
            <li class="list-group-item list-group-item-warning">Stock Limitado</li>
            </ul>
            <br>

          </a>
            @elseif($producto->stock >= 50)
            <a href="/productos/detalles/{{$producto->id}}">
            <br>
            <p>{{$producto->description}}</p>
            <br>
            <strong>${{$producto->price}}</strong>
            <br>
            <ul class="list-group">
            <li class="list-group-item list-group-item-success">Disponible</li>
            </ul>
            <br>
        </a>
        @endif
            </article>
          @endif

          @endforeach
          </div>
          @endif
    </section>
<!-- seccion Comestibles-->

<!-- botonVerMas
<div class="verMas">
<a href="{{route('nidos')}}"> <button type="button" class="btnon">Ver Más</button></a>
</div>
 botonVerMas -->

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


    <!-- Perfu y Limpieza -->

    <section id="productosDestacados">
      <div class="titulo-productos">
          <h3>Fideos Tricolor</h3>
        <hr>
      </div>
      @if(isset($productos))
      <div class="container-productos">
        @foreach ($productos as $producto)
        @if($producto->category->dameSubCategoria() == 'Comestibles' && $producto->dameCategoria() == 'Tricolor')

        <article class="producto">

            <a href="/productos/detalles/{{$producto->id}}">
              <div class="producto-hover">
                  <div class="producto-hover-content">
                    @if($producto->stock > 0)
                    <ion-icon style='color:rgba(0, 150, 0 ,0.5);' name="checkmark-done-outline"></ion-icon>
                    @elseif($producto->stock == 0)
                    <strong style='color:rgba(200 ,0 ,0 ,0.7); font-size:2rem;'>Sin Stock</strong>
                    <br>
                    <ion-icon style='color:rgba(200 ,0 ,0 ,0.7);font-size:2.5rem;' name="alert-outline"></ion-icon>
                    @endif
                  </div>
              </div>
              </a>

              <div class="titulo">
                  <a href="/productos/detalles/{{$producto->id}}"><h5>{{$producto->name}}</h5>
            

                  <img src="/storage/{{$producto->avatar}}"alt="Comestible">
                  </a>
                </div>

                  @if($producto->stock == 0)

            <br>
            <p>{{$producto->description}}</p>
            <br>
            <strong>${{$producto->price}}</strong>
            <br>
            <ul class="list-group">

  <li class="list-group-item list-group-item-danger">Sin Stock</li>

</ul>
            <br>
            @elseif($producto->stock < 50)
            <a href="/productos/detalles/{{$producto->id}}">
            <br>
            <p>{{$producto->description}}</p>
            <br>
            <strong>${{$producto->price}}</strong>
            <br>
            <ul class="list-group">
  <li class="list-group-item list-group-item-warning">Disp. Limitada</li>
</ul>
            <br>
</a>

  @elseif($producto->stock >= 50)
  <a href="/productos/detalles/{{$producto->id}}">
  <br>
            <p>{{$producto->description}}</p>
            <br>
            <strong>${{$producto->price}}</strong>
            <br>
            <ul class="list-group">
            <li class="list-group-item list-group-item-success">Disponible</li>
</ul>
            <br>
            </a>
@endif
            </article>

        @endif
        @endforeach
        </div>
      @endif
    </section>

     <!-- Perfu y Limpieza -->

     <!-- botonVerMas -->

    <div class="verMas">
      <a href="{{route('tricolor')}}"> <button type="button" class="btnon">Ver Más</button></a>
    </div>

<!-- botonVerMas -->

</div>




<script type="text/javascript" src="js/slide.js"></script>
<script src="js/botonarriba.js"></script>
<script src="../js/librerias.js"></script>
<script src="../js/products.js"></script>
@endsection

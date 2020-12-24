@extends('layouts.plantilla')

@section('contenido')

<div class="container">
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

    <!-- Elegi como hacer tus compras en tu SuperMigue -->

  <!--     <div id="inf" >

      </div>
 -->
 <!-- Elegi como hacer tus compras en tu SuperMigue -->

 <!-- botonera productos -->
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="/productos/limp">Perfumería y Limpieza</a></li>
  <li class="breadcrumb-item"><a href="/productos/beb">Bebidas</a></li>
  <li class="breadcrumb-item"><a href="/productos/com">Comestibles</a></li>
</ol>
<!-- botonera productos -->

 <!-- promociones -->
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
  </section>
<!-- promo -->

<!-- primer carrusel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <!--   <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="\img\bannerMigue.jpg" class="d-block w-100" alt="...">
        </div>

          <div class="carousel-item">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52512.53898028717!2d-58.59321136907228!3d-34.653852189889605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc7d93bab75a3%3A0xaafe140bc9dea3db!2sRamos%20Mej%C3%ADa%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1603384577977!5m2!1ses-419!2sar" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
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
          <h3>Comestibles// <br>
          Infusiones y Endulzantes</h3>
        <hr>
      </div>
        @if(isset($productos))
      <div class="container-productos">
          @foreach ($productos as $producto)
          @if($producto->category->dameSubCategoria() == 'Comestibles' && $producto->dameCategoria() == 'Infusiones y Endulzantes')
          @if($loop->odd)
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
            </div>

                  <img src="/storage/{{$producto->avatar}}"alt="Comestible">
                  </a>


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
          @endif
          @endforeach
          </div>
          @endif
    </section>
<!-- seccion Comestibles-->

<!-- botonVerMas -->
<div class="verMas">
<a href='/productos/detallesSub/com/infusiones'> <button type="button" class="btnon">Ver Más</button></a>
</div>
<!-- botonVerMas -->

<!-- Tipo de envio -->

<div class="barra">
      <div class="row-barra">
        <div class="col-12 col-sm-2 col-md-2 col-lg-1" id="relativo">
          <a href="/" id="enlace"></a>
          <img class="creditcard" src="/img/wspBlanco.png" alt="">
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-2" id="relativo">
          <a href="/" id="enlace"></a>
          <p class="texto1">¡TAMBIÉN POR WHATSAPP!</p>
          <p class="texto2">Para todas tus compras</p>
        </div>

        <div class="col-12 col-sm-2 col-md-2 col-lg-1" id="relativo">
          <a href="/" id="enlace"></a>
          <img class="delivery" src="/img/truck.png" alt="">
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-2" id="relativo">
          <a href="/" id="enlace"></a>
          <p class="texto1">ENVIOS A DOMICILIO</p>
          <p class="texto2">¡Rápido,sin vueltas!</p>
        </div>

        <div class="col-12 col-sm-2 col-md-2 col-lg-1" id="relativo">
          <a href="/" id="enlace"></a>
          <img class="location" src="/img/barbijo.png" alt="">
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-2" id="relativo">
          <a href="/" id="enlace"></a>
          <p class="texto1">¡PREVENCIÓN COVID-19!</p>
          <p class="texto2">Cumplimos requerimientos <br>
             sanitarios y de higiene</p>
        </div>

        <div class="col-12 col-sm-2 col-md-2 col-lg-1" id="relativo">
          <a href="/" id="enlace"></a>
          <img class="ok" src="/img/ok.png" alt="">
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-2" id="relativo">
          <a href="/c"  id="enlace"></a>
          <p class="texto1">COMPRA 100% SEGURA</p>
          <p class="texto2">Hasta la puerta de tu casa!</p>
        </div>
      </div>
    </div>
<!-- Tipo de envio -->


    <!-- Perfu y Limpieza -->

    <section id="productosDestacados">
      <div class="titulo-productos">
          <h3>Perfumería y Limpieza //<br> Higiene Personal
        </h3>
        <hr>
      </div>
      @if(isset($productos))
      <div class="container-productos">
        @foreach ($productos as $producto)
        @if($producto->category->dameSubCategoria() == 'Perfumería y Limpieza' && $producto->dameCategoria() == 'Higiene Personal')

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
            </div>

                  <img src="/storage/{{$producto->avatar}}"alt="Comestible">
                  </a>


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
      <a href='/productos/detallesSub/limp/higiene'> <button type="button" class="btnon">Ver Más</button></a>
    </div>

<!-- botonVerMas -->

</div>




<script type="text/javascript" src="js/slide.js"></script>
<script src="js/botonarriba.js"></script>
<script src="../js/librerias.js"></script>
<script src="../js/products.js"></script>
@endsection

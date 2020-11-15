@extends('layouts.plantilla')

@section('contenido')



<div class="container">
  <form  class="buscador" action="/listaProductos" method="get">
    <div class="input-group mt-3">
      <input type="text" name="name" class="form-control" placeholder="¿¿QUE ESTÁS BUSCANDO??" aria-label="¿¿QUE ESTÁS BUSCANDO??" aria-describedby="basic-addon2">
          <div class="input-group-append">
              <button class="input-group-text" id="basic-addon2" type="submit"><i class="fas fa-search"></i></button>
          </div>
    </div>
  </form>
  <a class="ir-arriba"  javascript:void(0) title="Volver arriba">
    <span class="fa-stack">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
    </span>
  </a>

  @if (session('mensaje'))
  <div class="alert alert-warning">
    {{ session('mensaje') }}
  </div>
  @endif
  <br>
  <h2 style="text-align :center" class="titulo-productos"><strong>Perfumería y Limpieza</strong></h2>

<ol  id="linkCat"
 class="breadcrumb">
  <li class="breadcrumb-item"><a href="/productos/com">Comestibles</a></li>
  <li class="breadcrumb-item"><a href="/productos/beb">Bebidas</a></li>
  <li class="breadcrumb-item active" aria-current="page">Perfumería y Limpieza</li>
</ol>







<div style="display:flex" class="botoncat">


  <div class="dropdown">

      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      Categorías
      </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">


    <a class="dropdown-item" href="/productos/detallesSub/limp/higiene">Higiene Personal</a>
    <a class="dropdown-item" href="/productos/detallesSub/limp/super">Superficies y pisos</a>
    <a class="dropdown-item" href="/productos/detallesSub/limp/ropa">Ropa</a>
    <a class="dropdown-item" href="/productos/detallesSub/limp/varios">Repelentes</a>

  </div>
</div>

</div>
<br>
<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ordenar por
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item"href="/productos/limp/Mayor-Lim">Precio:Mayor</a>
    <a class="dropdown-item" href="/productos/limp/Menor-Lim">Precio:Menor</a>
    <a class="dropdown-item" href="/productos/limp/a-z-Lim">A-Z</a>
    <a class="dropdown-item" href="/productos/limp/z-a-Lim">Z-A</a>
    <a class="dropdown-item" href="/productos/limp/Desc-Lim">Del mas Viejo al mas Nuevo</a>
    <a class="dropdown-item" href="/productos/limp/Asc-Lim">Del mas Nuevo al mas Viejo</a>
    <a class="dropdown-item" href="/productos/limp/promo-Lim">En Promo</a>
  </div>
</div>

<br>




    <div class="row" id="div-papi">
@if(isset($productos))
      @foreach ($productos as $product)

 @if($product->dameSubCategoria()   == "Perfumería y Limpieza")
      <div class="col-sm-4" id="div-producto{{$product->id}}">
    <div class="card mb-3">
        <div class="card-producto">
          <div class="producto-hover">
              <div class="producto-hover-content">
                  <form action="/productos/agregarCarrito" method="post">
                  @csrf

                  @if(Auth::user() && $product->stock > 0)


                  <button type="submit" class=""  name="product_id" value="{{$product->id}}"><i class="fas fa-cart-plus"></i></button>
                  @endif
                  @if($product->stock == 0)

                    <!-- <a href="/productos/detalles/{{$product->id}}"><i class="fas fa-search-plus"></i></a> -->
                    <strong >Sin stock</strong>

                    @elseif($product->stock > 0)

                    <a href="/productos/detalles/{{$product->id}}"><i class="fas fa-search-plus"></i></a>
                    @endif

              </div>
          </div>

          @if($product->stock == 0)


          <ul class="list-group">

            <li class="list-group-item list-group-item-danger">Sin stock</li>

            </ul>
            <br>
            @elseif($product->stock < 50)

            <ul class="list-group">

            <li class="list-group-item list-group-item-warning">Stock Limitado</li>

            </ul>
            <br>
            @elseif($product->stock >= 50)


            <ul class="list-group">

            <li class="list-group-item list-group-item-success">Disponible</li>

            </ul>
            <br>

            @endif


            <img src="/storage/{{$product->avatar}}" alt="">

            </div>


            <div class="titulo">
                <a href="/productos/detalles/{{$product->id}}"><h5>{{$product->name}}
                <br>
                {{$product->dameSubCategoria()}}</h5></a>
                <p style="color:black; font-size:1em"><em> @if($product->stock > 0)
                    Cuántos querés?         <input style="text-align:center;margin-left: 5%;width:10%"type="number" min =1  name="quantity" placeholder="0" required>
                @endif <br> Precio: $ {{$product->price}} </em></p>

            </div>
     </form>
        </div>
        </div>
    @endif
      @endforeach



@endif
</div>
</div>




<script src="../js/botonarriba.js"></script>
<script src="../js/librerias.js"></script>
<script src="../js/products.js"></script>

@endsection

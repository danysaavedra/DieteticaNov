@extends('layouts.plantilla')

@section('contenido')


<div class="fondo-categorias">
<div class="container">
<!--   <form  class="buscador" action="/listaProductos" method="get">
    <div class="input-group mt-3">
      <input type="text" name="name" class="form-control" placeholder="¿¿QUE ESTÁS BUSCANDO??" aria-label="¿¿QUE ESTÁS BUSCANDO??" aria-describedby="basic-addon2">
          <div class="input-group-append">
              <button class="input-group-text" id="basic-addon2" type="submit"><i class="fas fa-search"></i></button>
          </div>
    </div>
  </form> -->
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

<h2 style="text-align:center" class="titulo-productos">Pasta corta</h2>
<ul class="row caja-bt-cat justify-content-center align-self-center ">
       <li class="boton-subcat"><a href="{{route('pastacorta')}}">
           <img src="/img/seedPro/soperos.png" class="" style="vertical-align: middle;">
            <h3 style="text-align:center">Todas</h3>
       </a> </li>   
       <li class="boton-subcat"> <a href="{{route('soperos')}}">
        
           <img src="/img/seedPro/soperos.png" class="">
            <h3 style="text-align:center">Soperos</h3>
        
       </a></li>
    <li class="boton-subcat"><a href="{{route('guiseros')}}">
        
           <img src="/img/seedPro/guiseros.png">
            <h3 style="text-align:center">Guiseros</h3>
        
    </a></li>
</ul>

<!-- <div style="display:flex" class="botoncat">
  <div class="dropdown">
      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      Fideos
      </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
  <a class="dropdown-item" href="{{route('soperos')}}">Soperos</a>
  <a class="dropdown-item" href="{{route('guiseros')}}">Guiseros</a>
  </div>
</div>

</div> -->



<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ordenar por
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item"href="{{route('precioMayor')}}">Precio:Mayor</a>
    <a class="dropdown-item" href="{{route('precioMenor')}}">Precio:Menor</a>
    <a class="dropdown-item" href="{{route('az')}}">A-Z</a>
    <a class="dropdown-item" href="{{route('za')}}">Z-A</a>
    <a class="dropdown-item" href="{{route('desc')}}">Del mas Viejo al mas Nuevo</a>
    <a class="dropdown-item" href="{{route('men')}}">Del mas Nuevo al mas Viejo</a>
    <a class="dropdown-item" href="{{route('pro')}}">En Promo</a>
  </div>
</div>


<br>

    <div class="row" id="div-papi">
@if(isset($productos))
      @foreach ($productos as $product)

 @if($product->dameSubCategoria()   == "Pasta corta")
      <div class="col-sm-4" id="div-producto{{$product->id}}">
    <div class="card mb-3">
        <div class="card-producto">
           <div class="producto-hover">
              <div class="producto-hover-content">
                  <form action="/productos/agregarCarrito" method="post">
                  @csrf

                  @if(Auth::user() && $product->stock > 0)


                  <button type="submit" class=""  name="product_id" value="{{$product->id}}"><ion-icon name="cart-outline"></ion-icon></button>
                  @endif
                  @if($product->stock == 0)

                     <a href="/productos/detalles/{{$product->id}}"><i class="fas fa-search-plus"></i></a>
                    <strong >Sin stock</strong>

                    @elseif($product->stock > 0)

                    <a href="/productos/detalles/{{$product->id}}"><ion-icon name="cart-outline"></ion-icon></a>
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



            @endif


            <img src="/storage/{{$product->avatar}}" alt="">

            </div>


            <div class="titulo">
                <h4>{{$product->name}}</h4>
                <p style="color:black; font-size:1em"><em> @if($product->stock > 0)
                    Cantidad         <input style="text-align:center;margin-left: 5%;width:15%;  margin-bottom:0px;"type="number" min =1  name="quantity" placeholder="0" required>
                @endif  </em></p>
                <p>{{$product->description}} </p>
                <h7>$ {{$product->price}}</h7>
                <br>
                @if($user = !Auth::user())
                <div class="alert alert-danger" role="alert">
                Registrate o logueate para poder comprar
                </div>


               @elseif($user = Auth::user())
               <button type="submit" class="agregar"  name="product_id" value="{{$product->id}}"><h5>Agregar al carrito</h5></button>

               @endif

            </div>
     </form>
        </div>
        </div>
    @endif
      @endforeach

@endif
</div>
</div>
</div>




<script src="../js/botonarriba.js"></script>
<script src="../js/librerias.js"></script>
<script src="../js/products.js"></script>

@endsection

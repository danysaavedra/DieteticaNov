@extends('layouts.plantilla')

@section('contenido')

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
    @if(isset($categorias))
      @foreach($categorias as $categoria)
      @if($categoria->name == "Soperos")
      <h2 class="titulo-productos">Fideos Soperos</h2>
      @elseif($categoria->name=="Guiseros")
      <h2 class="titulo-productos">Fideos Guiseros</h2>
      @elseif($categoria->name=="Moños")
      <h2 class="titulo-productos">Fideos Moños</h2>
      @else($categoria->name=="Nidos")
      <h2 class="titulo-productos">Fideos Nidos</h2>
      @endif
  @endforeach
@endif


@if(isset($categorias))
  <div class="dropdown">

    @foreach($categorias as $categoria)

    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
     aria-haspopup="true" aria-expanded="false">
      {{$categoria->name}}
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

      <a class="dropdown-item" href="{{route('soperos')}}">Soperos</a>
      <a class="dropdown-item" href="{{route('guiseros')}}">Guiseros</a>


      <a class="dropdown-item" href="{{route('monitos')}}">Moños</a>
      <a class="dropdown-item" href="{{route('nidos')}}">Nidos</a>


      @endforeach
    </div>
  </div>
@endif




@if(isset($categorias))
    <div class="row" id="div-papi">
      @foreach($categorias as $categoria)
      @foreach ($categoria->products as $product)

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

           <!-- @if($product->stock == 0)


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

            @endif  -->


            <img src="/storage/{{$product->avatar}}" alt="">

        </div>


        <div class="titulo">
                <h4>{{$product->name}}</h4>
                <p style="color:black; font-size:1em"><em> @if($product->stock > 0)
                    Cuántos querés?         <input style="text-align:center;margin-left: 5%;width:10%"type="number" min =1  name="quantity" placeholder="0" required>
                @endif  </em></p>
                <p>{{$product->description}} </p>
                <h7>$ {{$product->price}}</h7>
                <br>
                @if($user = !Auth::user())
                <div class="alert alert-danger" role="alert">
                Registrate o logueate para poder comprar
                </div>


               @elseif($user = Auth::user())
               <button type="submit" class=""  name="product_id" value="{{$product->id}}"><h5>Agregar al carrito</h5></button>

               @endif

            </div>
        </form>
        </div>
      </div>

    <!-- <div class="modal fade" id="producto{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <form class="modal-eliminar" id="form-{{$product->id}}" action="/productos/delete/{{$product->id}}" method="post">
          @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Seguro querés eliminar este producto?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="color: black;">
              {{$product->name}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>

              <input type="hidden" name="id" value="{{$product->id}}">
              <input type="submit" class="btn btn-danger" name="" value="Borrar Producto">
            </div>
          </form>

        </div>
      </div>
    </div> -->
      @endforeach
      @endforeach
    </div>
@endif
</div>

<script src="/js/botonarriba.js"></script>
<script src="/js/librerias.js"></script>
<script src="/js/products.js"></script>

@endsection

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
        @if(isset($categorias))
  @foreach($categorias as $categoria)
  @if($categoria->name == "Higiene Personal"||$categoria->name=="Superficies y Pisos"||$categoria->name=="Repelentes"||$categoria->name=="Ropa"||$categoria->name=="Varios")
      <h2 style="text-align :center" class="titulo-productos">Perfumería y Limpieza</h2>
  @elseif($categoria->name=="Con Alcohol"||$categoria->name=="Sin Alcohol")
    <h2 style="text-align :center" class="titulo-productos">Bebidas</h2>
      @elseif($categoria->name=="Fiambres y Quesos"||$categoria->name=="Aceites y Vinagres"||$categoria->name=="Dulces y Mermeladas"||$categoria->name=="Condimentos y Aderezos"||$categoria->name=="Galletitas"||$categoria->name=="Infusiones y Endulzantes"||$categoria->name=="Conservas y Legumbres"||$categoria->name=="Rebozadores"||$categoria->name=="Harinas y Premezclas"||$categoria->name=="Arroz"||$categoria->name=="Fideos"||$categoria->name=="Snacks"||$categoria->name=="Repostería"||$categoria->name=="Lácteos"||$categoria->name=="Panes"||$categoria->name=="Cereales"||$categoria->name=="Congelados")
      <h2 style="text-align :center" class="titulo-productos">Comestibles</h2>
      @endif
  @endforeach


    @foreach($categorias as $categoria)
    @if($categoria->name=="Higiene Personal"||$categoria->name=="Superficies y Pisos"||$categoria->name=="Repelentes"||$categoria->name=="Ropa"||$categoria->name=="Varios")
    <ol style='padding-left:18%' class="breadcrumb">
      <li class="breadcrumb-item"><a href="/productos/com">Comestibles</a></li>
      <li class="breadcrumb-item"><a href="/productos/beb">Bebidas</a></li>
      <li class="breadcrumb-item active" aria-current="page">Perfumería y Limpieza</li>
    </ol>
    @elseif($categoria->name=="Con Alcohol"||$categoria->name=="Sin Alcohol")
    <ol style='padding-left:18%' class="breadcrumb">
      <li class="breadcrumb-item"><a href="/productos/com">Comestibles</a></li>
      <li class="breadcrumb-item"><a href="/productos/limp">Perfumería y Limpieza</a></li>
      <li class="breadcrumb-item active" aria-current="page">Bebidas</li>
    </ol>
    @elseif($categoria->name=="Fiambres y Quesos"||$categoria->name=="Aceites y Vinagres"||$categoria->name=="Dulces y Mermeladas"||$categoria->name=="Condimentos y Aderezos"||$categoria->name=="Galletitas"||$categoria->name=="Infusiones y Endulzantes"||$categoria->name=="Conservas y Legumbres"||$categoria->name=="Rebozadores"||$categoria->name=="Harinas y Premezclas"||$categoria->name=="Arroz"||$categoria->name=="Fideos"||$categoria->name=="Snacks"||$categoria->name=="Repostería"||$categoria->name=="Lácteos"||$categoria->name=="Panes"||$categoria->name=="Cereales"||$categoria->name=="Congelados")
    <ol style='padding-left:18%' class="breadcrumb">
    <li class="breadcrumb-item"><a href="/productos/limp">Perfumería y Limpieza</a></li>
      <li class="breadcrumb-item"><a href="/productos/beb">Bebidas</a></li>
    <li class="breadcrumb-item active" aria-current="page">Comestibles</li>
    </ol>
    @endif
    @endforeach



@foreach($categorias as $categoria)
<h2>{{$categoria->name}}</h2>
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
      @if($categoria->name=="Con Alcohol"||$categoria->name=="Sin Alcohol")
      <a class="dropdown-item" href="/productos/detallesSub/beb/alcohol">Con Alcohol</a>
      <a class="dropdown-item" href="/productos/detallesSub/beb/sinAlcohol">Sin Alcohol</a>

      @elseif($categoria->name=="Higiene Personal"||$categoria->name=="Superficies y Pisos"||$categoria->name=="Repelentes"||$categoria->name=="Ropa"||$categoria->name=="Varios")
      <a class="dropdown-item" href="/productos/detallesSub/limp/higiene">Higiene Personal</a>
      <a class="dropdown-item" href="/productos/detallesSub/limp/super">Superficies y Pisos</a>
      <a class="dropdown-item" href="/productos/detallesSub/limp/repelentes">Repelentes</a>
      <a class="dropdown-item" href="/productos/detallesSub/limp/ropa">Ropa</a>
      <a class="dropdown-item" href="/productos/detallesSub/limp/varios">Varios</a>
     @elseif($categoria->name=="Fiambres y Quesos"||$categoria->name=="Aceites y Vinagres"||$categoria->name=="Dulces y Mermeladas"||$categoria->name=="Condimentos y Aderezos"||$categoria->name=="Galletitas"||$categoria->name=="Infusiones y Endulzantes"||$categoria->name=="Yerbas"||$categoria->name=="Conservas y Legumbres"||$categoria->name=="Rebozadores"||$categoria->name=="Harinas y Premezclas"||$categoria->name=="Arroz"||$categoria->name=="Fideos"||$categoria->name=="Snacks"||$categoria->name=="Repostería"||$categoria->name=="Lácteos"||$categoria->name=="Panes"||$categoria->name=="Cereales"||$categoria->name=="Congelados")

      <a class="dropdown-item" href="{{route('fiambres')}}">Fiambres y Quesos</a>
      <a class="dropdown-item" href="{{route('aceitesYvinagres')}}">Aceites y Vinagres</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/dulces">Dulces y Mermeladas</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/condimentos">Condimentos y Aderezos</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/galletitas">Galletitas</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/infusiones">Infusiones y Endulzantes</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/yerbas">Yerbas</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/conservas">Conservas y Legumbres</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/rebozadores">Rebozadores</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/arroz">Arroz</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/fideos">Fideos</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/snacks">Snacks</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/reposteria">Repostería</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/lacteos">Lácteos</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/panes">Panes</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/cereales">Cereales</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/congelados">Congelados</a>
      @endif
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
            <a href="/productos/detalles/{{$product->id}}"><h5>{{$product->name}}</h5></a>
            <p style="color:black; font-size:1em"><em> @if($product->stock > 0)
                  Cuántos querés?         <input style="text-align:center;margin-left: 5%;width:10%"type="number" min =1  name="quantity" placeholder="0" required>
              @endif <br> Precio: $ {{$product->price}} </em></p>

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

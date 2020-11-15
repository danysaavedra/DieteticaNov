@extends('layouts.plantilla')

@section('contenido')


<div class="container">
  <section id="detalle-producto">

    <div class="row" id="div-papi">
      <div class="col-12">
<br>
      <a style="border: 2px solid black;
    background-color: #346397!important;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 0.8em;
    letter-spacing: 1px;
    padding: 10px 24px;
    transition: 0.2s background-color;" href="{{ url()->previous() }}">Seguir comprando</a>
  <br>
  <br>
        <ul>
          <li><a href="/listaProductos">Productos</a></li> /
          <li><a href="#"><strong>{{$caca->name}}</strong></a></li>
        </ul>
      </div>
    </div>


    <div id="div-producto{{$caca->name}}">
      <div class="row">
        <div class="col-sm-4" id="div-producto{{$caca->name}}">
          @if (session('mensaje'))
            <div class="alert alert-warning">
              {{ session('mensaje') }}
            </div>
          @endif


      <img src="/storage/{{$caca->avatar}}" class="card-img" alt="...">


        </div>
        <div class="col-sm-6 tarjeta">

              <h2 id="titDetalle">{{$caca->name}}</h2>
              <p><span>Descripción:</span>  {{$caca->description}}</p>
              <br>
              <p class="precio">Precio: $ {{$caca->price}}</p>
              <br>


              <form action="/productos/agregarCarrito" method="post">



              @csrf

              @if($caca->stock > 0)
              <label for="quantity"> <strong> Cuántos te llevo?? <ion-icon style="font-size:1.5rem"; name="arrow-forward-circle-outline"></ion-icon></strong> </label>
              <input style="text-align:center;width:10%"type="number" min =1  name="quantity" placeholder="0" required>
                <br>
                @if(Auth::user())
                <button type="submit" class=""  name="product_id" value="{{$caca->id}}">Agregar al carrito</button>
                  <br><br><br>
                  @endif
                  @elseif($caca->stock === 0)
                  <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">SIN STOCK.</h4>

                  </div>
                <a href="{{ url()->previous() }}">Volver</a>
                <br><br><br>
                @endif
                  @if((Auth::user())&& (Auth::user()->admin))
                    <a href="/productos/editar/{{$caca->id}}">Editar producto</a><br><br>
                    <a href="#" data-toggle="modal" data-target="#producto{{$caca->id}}">Borrar producto</a>

                @endif

              </form>

        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="producto{{$caca->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">

              <form class="modal-eliminar" id="form-{{$caca->id}}" action="/productos/delete/{{$caca->id}}" method="post">
                @csrf
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Seguro querés eliminar este producto?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" style="color: black;">
                {{$caca->name}}
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                <input type="hidden" name="id" value="{{$caca->id}}">
                <input type="submit" class="btn btn-danger" name="" value="Borrar Producto">
              </div>
            </form>

            </div>
          </div>
        </div>
        <!-- end Modal -->
      </div>
    </section>
    </div>


<script src="js/librerias.js"></script>
<script src="js/products.js"></script>

@endsection

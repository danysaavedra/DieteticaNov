@extends('layouts.plantilla')

@section('contenido')



<div class="fondo-categorias">


<div class="container-fluid carritocompras">


<div class="containerCarroPapa text-center" >
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

  @if(isset($detalles))
  <div class="carrito">
    <h2 class="miCarrito">Este es tu carrito <span>{{Auth::user()->name}}</span></h2>
        <a href="/listaProductos">Seguir Comprando</a>
              <?php $suma = 0; ?>
      @foreach($detalles as $detalle)
      <div class="row col-lg-10 mx-auto text-center">
      
      <form class="col-lg-1 bor-carrito" action="/carrito/sacarCarrito" method="post">
          @csrf
          
        
          <div id="boton-sacarCarrito">
              <button class="btn btn-outline-danger" type="submit" name="detalle_id" value="{{$detalle->id}}"><strong>X</strong> </button>
          </div>
          
      </form>

        <div class="col-lg-2 bor-carrito" id="avatar-carrito">
            <img src="storage/{{$detalle->avatar}}" alt="" style="max-width:50%;">
        </div>
        <div class="col-lg-2 bor-carrito" id="prodcuto-nombre" >
          
          <p class="card-text"><small class="text-muted">{{$detalle->name}}</small>
        </div>
        
        <div class="col-lg-3 bor-carrito" id="producto-precio">
          
            <p class="card-text"><small class="text-muted">Precio por Unidad:<strong>  ${{$detalle->price}}</strong></small></p>
          
        </div>
        <div class="col-lg-2 bor-carrito" id="producto-precio">
          
            <p><small class="text-muted">Seleccionados: <strong>{{$detalle->pivot->quantity}}</strong></small></p>
          
        </div>
        <div class="col-lg-2 bor-carrito" id="producto-precio">
          
            <p><small class="text-muted">Subtotal: <strong>${{$detalle->price * $detalle->pivot->quantity }}</strong></small></p>
          
        </div>
        
      </div> 
        
        
        <!--
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="storage/{{$detalle->avatar}}" alt="">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{$detalle->name}}</h5>
                <p class="card-text">Precio por Unidad:  ${{$detalle->price}}</p>
                <p class="card-text"><small class="text-muted">Seleccionados: {{$detalle->pivot->quantity}}<br>Subtotal: ${{$detalle->price * $detalle->pivot->quantity }}</small></p>
              </div>
            </div>
          </div>
        </div> -->


            <?php
            $subtotal[]= $detalle->price * $detalle->pivot->quantity;
            $suma = array_sum($subtotal);
            ?>
            @endforeach

            @endif


<!-- NO INVERTIR ORDEN DE LOS INPUTS -->
      @if(isset($detalle))
      <form action="/pedidos" method="post">
      @csrf
      @foreach($detalles as $detalle)

      <input type="hidden" value='{{$detalle->name}}' name="carrito[]"> <!-- producto -->
      <input type="hidden" value='{{$detalle->price}}' name="carrito[]"> <!-- precio -->
      <input type="hidden" value='{{$detalle->pivot->quantity}}' name="carrito[]"><!-- cantidad -->
      <input type="hidden" value='{{$detalle->id}}' name="numberId[]">
      <input type="hidden" value='{{$loop->count}}' name="qty">
      <input type="hidden" value='{{$suma}}' name="total">
      @endforeach
<!-- NO INVERTIR ORDEN DE LOS INPUTS -->

   <div class="row col-lg-10 mx-auto mt-1">
       <div  class="total-carrito col-lg-8 text-left">
           <h4>IMPORTANTE</h4>
           <p>*Una vez finalizado el pedido nos podremos en contacto para coordinar el pago y envío. 
           <br> Le llegará a su casilla de correo el detalle de la compra.</p>
       </div>
        <div  class="total-carrito col-lg-4">
          <ul class="list-group list-group-flush text-left">
            <li class="list-group-item"><strong>Total Del Carrito</strong></li>
            <li class="list-group-item">SUBTOTAL: ${{$suma}}</li>
            <li class="list-group-item">ENVÍO:(ACA SE PODRIA CALCULAR..)</li>
            <li class="list-group-item"> <strong>TOTAL: ${{$suma}}</strong></li>
            <li class="list-group-item">
                <button id="finalizar" type="submit" name="" value="">Finalizar compra</button>
            </li>
          </ul>
        </div>
      </div>
      @else
      <h1>No hay Productos en tu Carrito</h1>
      @endif
      </form>

</div>
        

</div>
</div>


<script src="/js/botonarriba.js"></script>
<script src="/js/librerias.js"></script>
<script src="/js/products.js"></script>
   @endsection
</div>
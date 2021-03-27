@extends('layouts.plantilla')
@section('contenido')
<div class="container home">
    <h2></h2>
    @foreach($orders as $order)

    <table id="data_table" class="table table-striped">
    <a href=" /pedidos/cliente/{{$order->id}}"><strong>BORRAR ESTE PEDIDO</strong></a>
    <br>
    <br>
    <strong>PEDIDO N°: {{$order->id}} </strong>
    ,
    <strong>Fecha y Hora: {{date_format($order->created_at,"d/m/y g:i a")}} </strong>
    <br>
    <strong>Cliente : {{$order->dameUsuario()->name}},{{$order->dameUsuario()->lastname}} </strong>
    <br>
    <strong>Teléfonos de contacto: {{$order->dameUsuario()->tel1}} , {{$order->dameUsuario()->tel2}} </strong>
        <thead>
            <tr>
            <th>Producto</th>
            <th>Precio Unitario</th>
            <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @if($order->cart->carrito)
            @for($x=0;$x < sizeof($order->cart->carrito);$x++)
            @if($x%3 == 0)
<tr>

<td>{{$order->cart->carrito[$x]}} </td>

@endif

@if($x%3 == 0+1)

<td>${{$order->cart->carrito[$x]}} </td>

@endif

@if($x%3 == 0+2)

<td>{{$order->cart->carrito[$x]}}U.</td>

@endif
@endfor

@endif
</tr>

<td> </td>
<td> </td>
<td>  <strong>Total del Pedido: $ {{$order->cart->total}}</strong>  </td>

@endforeach

        </tbody>

    </table>

</div>


@endsection
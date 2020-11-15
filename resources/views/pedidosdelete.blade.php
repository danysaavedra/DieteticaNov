<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Eliminar Pedido</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/logyregistro.css">
    <link rel="stylesheet" href="/css/products.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/carrito.css">
</head>
<body>
    <div class="container productos">
@if($orders)
        <form class="" action="/pedidos/cliente/{id}" method="post">
          @csrf
          <h2>¿Seguro quiere borrar este pedido?</h2>
          <h3 style="text-transform:uppercase; color:black;">Cliente : {{$orders->dameUsuario()->name}},{{$orders->dameUsuario()->lastname}} </h3>
          <strong>N° Pedido: {{$orders->id}} </strong>
          <br>
          <input type="hidden" name="id" value="{{$orders->id}}">
          <input type="submit" class="btn btn-danger" name="" value="Borrar Pedido">
        </form>
        @else
        NO HAY PEDIDOS
        @endif

    </div>
</body>
</html>


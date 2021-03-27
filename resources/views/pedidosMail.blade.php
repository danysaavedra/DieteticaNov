<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


        h2 {
            color: rgb(230, 107, 0);
        }
        body {font-family: Arial, Helvetica, sans-serif;}

        table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            font-size: 12px;    margin: 45px;     width: 480px; text-align: left;    border-collapse: collapse; }

        th {     font-size: 13px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
            border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

        td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
            color: #669;    border-top: 1px solid transparent; }

        tr:hover td { background: #d0dafd; color: #339; }

        </style>
</head>
<body>
<div class="container home">
    <h2>Confirmacion de Pedidos</h2>
<p>Hola <strong>{{$info->dameUsuario()->name}}</strong>, <br> en breve nos comunicaremos con vos para coordinar la entrega de tu pedido!</p>




    <strong>Fecha y Hora del Pedido: {{date_format($info->created_at,"d/m/y g:i a")}} </strong>
    <br>
    <table id="data_table" class="table table-striped">

        <thead>
            <tr>
            <th>Producto</th>
            <th>Precio Unitario</th>
            <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>


            @if($info->cart->carrito)
            @for($x=0;$x < sizeof($info->cart->carrito);$x++)
            @if($x%3 == 0)
<tr>

<td>{{$info->cart->carrito[$x]}} </td>

@endif

@if($x%3 == 0+1)

<td>${{$info->cart->carrito[$x]}} </td>

@endif

@if($x%3 == 0+2)

<td>{{$info->cart->carrito[$x]}}U.</td>

@endif
@endfor

@endif
</tr>

<td> </td>
<td> </td>
<td>  <strong>Total del Pedido: $ {{$info->cart->total}}</strong>  </td>



        </tbody>

    </table>

<h2>Pastas Barletta</h2>
<li><strong>Teléfono | Fax (0220) 4771106</strong></li>
<li><strong>Dr. Marcos Paz 1702 Marcos Paz | Bs. As. Argentina</strong></li>
<li><strong>© Copyright 2020. Todos los derechos reservados. Pipa Design</strong></li>
</div>





</body>
</html>
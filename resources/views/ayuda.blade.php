@extends('layouts.plantilla')

@section('contenido')

<div class="ayu">
    <div class="row justify-content-center m-0">


        <div class="col-md-6 ayu-caja">
            <div class="card">
                <div style="background-color: #d1a158;" class="card-header" ><h4>{{ __('- ¿Cómo comprar? -') }}</h4></div>



                <div class="card-body text-left">
                    <p>Para poder realizar un pedido, deberá previamente tener un usuario y contraseña suministrado por nuestros operadores.

Ya logueado, podrá navegar a través de las distintas categorías, en donde tendrá los artículos cargados con sus fotos, descripciones, unidades por bultos (UxB) y sus precios. Una vez que encuentre el artículo que le interesa comprar, no tiene más que presionar AGREGAR previa selección de la UxB y la cantidad deseada.

En el caso que no encuentre un artículo de su interés o requiera encontrar un artículo rápidamente, puede realizar una búsqueda y selección de artículo en el "buscador" ubicado en la parte superior izquierda de su pantalla. Con solo incluir alguna palabra como el producto o la marca recibirá las distintas opciones acordes a los términos ingresados.

De igual manera, ya sea navegando por la página por categorias o por búsqueda, cuando encuentra el artículo el cual quiere sumar a su pedido, no tiene más que presionar AGREGAR previa selección de la UxB y la cantidad deseada.

Repita la operación la cantidad de veces necesarias.

Durante la realización de su pedido o una vez finalizado podrá optar por ver detalle presionando el carrito ubicado en la parte superior derecha en color Celeste, donde podrá controlar los artículos y cantidades de cada uno, con la posibilidad de "editar" o "anular" si fuera necesario en una ventana emergente.

Una vez finalizada y controlada su compra podrá finalizar su pedido presionando el icono de color verde “Finalizar Pedido”. Al presionar este botón deberá seguir una verificación de los datos de su pedido, completando campos requeridos para su correcta facturación y entrega, asi como también podrá enviarnos sus comentarios o recomendaciones. En la última instancia podrá nuevamente cambiar su pedido presionando Editar mi Pedido, o confirmarlo presionando el botón Realizar el Pedido.

Recibirá en su pantalla una Confirmación de que su pedido fue procesado, con un número de Pedido y se le informará que recibirá un mail automáticamente a su casilla Con la confirmación de que su pedido fue enviado correctamente.

Aguarde a ser contactado por el sector comercial de Maxiconsumo para poder coordinar entrega o retiro de mercadería y las formas de pago.

                        Muchas gracias por utilizar nuestro servicio web.</p>



                </div>

            </div>
             <div style="background-color: #d1a158;" class="card-header" ><h4>{{ __('- Envíos -') }}</h4></div>



                <div class="card-body text-left">
                    <p>CABA y GCBA</p>



                </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/login.js">

</script>
@endsection

<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Cart;
use \App\User;
use \App\Order;

class UsuarioController extends Controller
{
    public function getpedidos(){

        $orders = Order::all();

            $orders->transform(function($order, $key)
            {
                $order->cart = unserialize($order->cart);

                return $order;
            });


        return view('pedidos.cliente',['orders' => $orders]);

      }

      public function borrarPedido($id)
      {
        $orderBorrar = Order::find($id);

        return view('pedidosdelete',['orders' => $orderBorrar]);


      }

        public function borrarP(Request $request)
        {
            $id = $request['id'];

            $order = Order::find($id);
            $order->delete();

            if ($request->isJson()) {
              return response()->json(['mensaje' => 'que seas muy feliz']);
            }
           return redirect('/pedidos/cliente')->with('mensaje', 'Borrado del Pedido exitoso!');
        }


}


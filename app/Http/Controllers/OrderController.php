<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Cart;
use \App\User;
use \App\Product;
use App\Order;

use Illuminate\Support\Facades\Mail;
use App\Mail\CorreoDelPedido;
use App\Mail\CorreoParaAdmin;

class OrderController extends Controller
{

  public function  seccMigue(){

    $orders = Auth::user()->orders;

    $orders->transform(function($order, $key)
    {
        $order->cart = unserialize($order->cart);
        return $order;
    });

 return view('/pedidos',['orders' => $orders]);
    }


  public function finalizar(Request $request){
   $carritoCompra = $request->except('_token');
   if(isset($carritoCompra['numberId'])) {
    foreach($carritoCompra['numberId'] as $key => $value){
   $carritos = Cart::where('product_id', '=', $value);
   $carritos->delete();
     }
    }
   $cart = new Cart ($carritoCompra);
   $order = new Order();
   $order->cart = serialize($cart);
   Auth::user()->orders()->save($order);




   $orders = Auth::user()->orders;

   $orders->transform(function($order, $key)
   {
       $order->cart = unserialize($order->cart);
       return $order;
   });



   $email=Auth::user()->email;


    Mail::to($email)->send(new CorreoDelPedido($orders->last()));

    $orders = Order::all();

    $orders->transform(function($order, $key)
    {
        $order->cart = unserialize($order->cart);

        return $order;
    });


    Mail::to('maildepruebasdany@gmail.com')->send(new CorreoParaAdmin($orders->last()));


   return redirect('/')->with('mensaje', 'TU PEDIDO SE PROCESÓ CON EXITO! (En breve nos comunicaremos con vos.)');
  }








    public function borrarPedido($id)
  {
    $productoBorrar = Product::find($id);
    return view('product.delete')
    ->with([
    'products' => $productoBorrar
    ]);
  }

    public function borrarped(Request $request)
    {
        $id = $request['id'];

        $carritos = Cart::where('product_id', '=', $id);
        $carritos->delete();

        $product = Product::find($id);
        $product->delete();

        if ($request->isJson()) {
          return response()->json(['mensaje' => 'que seas muy feliz']);
        }
      return redirect('/productos')->with('mensaje', 'Borrado de Producto exitoso!');
    }
}

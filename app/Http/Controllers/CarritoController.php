<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Cart;
use \App\User;
use \App\Product;
use App\Category;
use App\Subcategory;



class CarritoController extends Controller
{

  public function index(){
    $subcategorias = Subcategory::all();
    return view('cart.carrito',compact('subcategorias'));
  }

  public function agregarAlCarrito(Request $request){

   $user = Auth::user();

   $producto = $user->carrito->where('id', $request->product_id)->first();
  //  dd($producto);

    if ($producto) {
      $cantidad = $producto->pivot->quantity + $request->quantity; 
      
      $user->carrito()->updateExistingPivot($request->product_id,['quantity'=> $cantidad ]);

    } else {

      $cantidad =  $request->quantity;
      $user->carrito()->attach($request->product_id,['quantity'=> $cantidad]);

    }

  if($request->isJson())
    {
      return response()->json(['exito' => true, 'cantidad' => $user->carrito->sum('quantity')])->with('mensaje', 'Producto agregado al carrito exitosamente!');
    }
    return redirect( $_SERVER['HTTP_REFERER'])->with('mensaje', 'Producto agregado al carrito exitosamente!');
  }
  
  public function miCarrito(){
    $user =Auth::user();
    $datalles=$user->carrito;
    $now = now();
    return view('cart.carrito')
      ->with([
        'detalles' => $datalles, 'now' => $now
      ]);
  }

  public function cantidadNav(){
    $user =Auth::user();

    $datalles=$user->carrito;

    return view('partial.nav')
      ->with(['detalles' => $datalles]);

  }


  

  public function sacarDelCarrito( Request $request){

    $user =Auth::user();

      $producto = $user->carrito->where('id', $request->product_id)->first();
      //  dd($producto);

        if ($producto) {
       $cantidad = $producto->pivot->quantity - 1;
          $user->carrito()->updateExistingPivot($request->product_id,['quantity'=> $cantidad ]);
        } else {
      $user->carrito()->detach($request->detalle_id,['quantity'=>1]);

    return redirect('/carrito');
  }

}


}

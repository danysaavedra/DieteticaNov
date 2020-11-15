<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use \App\Product;
use \App\Cart;
use App\Category;
use App\User;
use App\Subcategory;

class PrincipalController extends Controller
{

  public function buscador()
  {
    if(isset($_GET['name'])){
      $productos = Product::where('name', 'LIKE', '%'.$_GET['name'].'%')->get();
    } else{
      $productos = Product::orderBy('name', 'asc')->get();
    }
      return view('/index')->with( ['productos' => $productos] );
  }

public function productosDestacados(){

$productos = Product::orderBy('name', 'asc')->get();

    // $productos = Product::inRandomOrder()

    return view('/index', compact('productos'));


}




}

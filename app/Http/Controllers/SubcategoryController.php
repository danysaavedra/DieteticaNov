<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Product;
use App\User;
use App\Cart;
use App\Category;

class SubcategoryController extends Controller
{

  public function subcat(){
$subcategorias = Subcategory::all();
    return view('/categoriecreate');
  }
  public function subnav(){
$subcategorias = Subcategory::all();
    return view('partial.nav');
  }
  public function subcategory(){

    return view('/subcategoriecreate');
  }

  public function save(Request $request)
  {
    $this->validate($request,
    [
      'name' => 'required|unique:subcategories',
      'imagen' => 'required|image',


    ],

    [
      'name.required' => 'El nombre es obligatorio',
      'name.unique' => 'El nombre ya existe',

      'imagen.image' => 'Extension no valida como Imagen',
      'imagen.required' => 'La imagen es obligatoria',

    ]);

      $path= $request->file('imagen')->store('public');
      $imagen= basename($path);


    Subcategory::create(
      [
        'name' => $request->input('name'),
        'imagen'=> $imagen,



      ]
    );

    return view('/categoriecreate');
  }

  }

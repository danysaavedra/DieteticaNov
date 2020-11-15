<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Cart;
use App\Category;
use App\Subcategory;

class CategoryController extends Controller
{
  public function index()
  {
    if(isset($_GET['name'])){
      $categorias = Category::where('name', 'LIKE', '%'.$_GET['name'].'%')->get();
    } else{
      $categorias = Category::all();
    }
      return view('/categorieIndex')->with( [ 'categorias' => $categorias] );
}


public function createSub(){
  $subcategorias = Subcategory::all();
  $categorias = Category::all();
  return view('/categoriecreate')->with( [ 'categorias' => $categorias, 'subcategorias' => $subcategorias] );
}


public function category(){
  $subcategorias = Subcategory::all();
  $categorias = Category::all();
  return view('/categoriecreate')->with( ['subcategorias' => $subcategorias] );
}

public function save(Request $request)
{
  $this->validate($request,
  [
    'name' => 'required|unique:categories',
    'imagen' => 'required|image',
    'sub_category_id' => 'required',

  ],

  [
    'name.required' => 'El nombre es obligatorio',
    'name.unique' => 'El nombre ya existe',

    'imagen.image' => 'Extension no valida como Imagen',
    'imagen.required' => 'La imagen es obligatoria',
    'sub_category_id.required' => 'required',

  ]);

    $path= $request->file('imagen')->store('public');
    $imagen= basename($path);


  Category::create(
    [
      'name' => $request->input('name'),
      'imagen'=> $imagen,
      'sub_category_id' => $request->input('sub_category_id'),


    ]
  );

  return view('/categoriecreate');
}

}

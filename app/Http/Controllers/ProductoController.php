<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \App\Product;
use \App\Cart;
use App\Category;
use App\Subcategory;
use App\User;

class ProductoController extends Controller
{
  // detalle de producto
    public function detalle($id)
    {
      $products = Product::find($id);
      return view('product.detalles')->with( [ 'caca' => $products] );
    }


    public function prueba(){

      if(isset($_GET['name'])){
        $productos = Product::where('name', 'LIKE', '%'.$_GET['name'].'%')
        ->orderBy('name' , 'asc')->paginate(18);
      }else{
        $productos = Product::orderBy('name','desc')->paginate(18);
      }
        return view('product.listaProductos')->with( ['productos' => $productos] );
    }



    public function precMay(){
      $productos = Product::orderBy('price','desc')->paginate(18);
      return view('product.listaProductos')->with( ['productos' => $productos] );
    }

    public function precMen(){
      $productos = Product::orderBy('price','asc')->paginate(18);
      return view('product.listaProductos')->with( ['productos' => $productos] );
    }

    public function az(){
      $productos = Product::orderBy('name','asc')->paginate(18);
      return view('product.listaProductos')->with( ['productos' => $productos] );
    }
    public function za(){
      $productos = Product::orderBy('name','desc')->paginate(18);
      return view('product.listaProductos')->with( ['productos' => $productos] );
    }

    public function promo(){
      $productos = Product::where('promo','=', 1 )->paginate(18);
      return view('product.listaProductos')->with( ['productos' => $productos] );
    }

    public function stockMay(){
      $productos = Product::orderBy('stock','desc')->paginate(18);
      return view('product.listaProductos')->with( ['productos' => $productos] );
    }
    public function stockMen(){
      $productos = Product::orderBy('stock','asc')->paginate(18);
      return view('product.listaProductos')->with( ['productos' => $productos] );
    }



    public function catProdCom(){
      $productos = Product::all();
      return view('product.products')->with( ['productos' => $productos] );
    }


    public function precComMay(){
      $productos = Product::orderBy('price','desc')->get();
      return view('product.products')->with( ['productos' => $productos] );
    }

    public function precComMen(){
      $productos = Product::orderBy('price','asc')->get();
      return view('product.products')->with( ['productos' => $productos] );
    }

    public function azCom(){
      $productos = Product::orderBy('name','asc')->get();
      return view('product.products')->with( ['productos' => $productos] );
    }
    public function zaCom(){
      $productos = Product::orderBy('name','desc')->get();
      return view('product.products')->with( ['productos' => $productos] );
    }

    public function promoCom(){
      $productos = Product::where('promo','=', 1 )->get();
      return view('product.products')->with( ['productos' => $productos] );
    }

    public function stockMayCom(){
      $productos = Product::orderBy('stock','desc')->get();
      return view('product.products')->with( ['productos' => $productos] );
    }
    public function stockMenCom(){
      $productos = Product::orderBy('stock','asc')->get();
      return view('product.products')->with( ['productos' => $productos] );
    }



    public function catProdLimpi(){
      $productos = Product::all();
      return view('product.especialidades', compact('productos'));
    }

    public function precLimMay(){
      $productos = Product::orderBy('price','desc')->get();
      return view('product.especialidades')->with( ['productos' => $productos] );
    }

    public function precLimMen(){
      $productos = Product::orderBy('price','asc')->get();
      return view('product.especialidades')->with( ['productos' => $productos] );
    }

    public function azLim(){
      $productos = Product::orderBy('name','asc')->get();
      return view('product.especialidades')->with( ['productos' => $productos] );
    }
    public function zaLim(){
      $productos = Product::orderBy('name','desc')->get();
      return view('product.especialidades')->with( ['productos' => $productos] );
    }

    public function promoLim(){
      $productos = Product::where('promo','=', 1 )->get();
      return view('product.especialidades')->with( ['productos' => $productos] );
    }

    public function stockMenLim(){
      $productos = Product::orderBy('stock','asc')->get();
      return view('product.especialidades')->with( ['productos' => $productos] );
    }
    public function stockMayLim(){
      $productos = Product::orderBy('stock','desc')->get();
      return view('product.especialidades')->with( ['productos' => $productos] );
    }



    public function catProdBeb(){
      $productos = Product::all();
      return view('product.pastalarga', compact('productos'));
    }
    public function precBebMay(){
      $productos = Product::orderBy('price','desc')->get();
      return view('product.pastalarga')->with( ['productos' => $productos] );
    }

    public function precBebMen(){
      $productos = Product::orderBy('price','asc')->get();
      return view('product.pastalarga')->with( ['productos' => $productos] );
    }

    public function azBeb(){
      $productos = Product::orderBy('name','asc')->get();
      return view('product.pastalarga')->with( ['productos' => $productos] );
    }
    public function zaBeb(){
      $productos = Product::orderBy('name','desc')->get();
      return view('product.pastalarga')->with( ['productos' => $productos] );
    }

    public function promoBeb(){
      $productos = Product::where('promo','=', 1 )->get();
      return view('product.pastalarga')->with( ['productos' => $productos] );
    }

    public function stockMenBeb(){
      $productos = Product::orderBy('stock','asc')->get();
      return view('product.pastalarga')->with( ['productos' => $productos] );
    }
    public function stockMayBeb(){
      $productos = Product::orderBy('stock','desc')->get();
      return view('product.pastalarga')->with( ['productos' => $productos] );
    }



    public function sub(){
      $categorias = Category::all();
      return view('detallesSub', compact('categorias'));
    }

    public function subFiam(){
      $categorias = Category::where('name','=','Soperos')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subAcei(){
      $categorias = Category::where('name','=','Guiseros')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subDul(){
      $categorias = Category::where('name','=','Moños')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subCon(){
      $categorias = Category::where('name','=','Nidos')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subGalle(){
      $categorias = Category::where('name','=','Tricolor')->get();
      return view('detallesSub', compact('categorias'));
    }




  public function borrarProducto($id)
  {
    $productoBorrar = Product::find($id);
    return view('product.delete')
    ->with([
    'products' => $productoBorrar
    ]);
  }

    public function borrar(Request $request)
    {
        $id = $request['id'];

        $carritos = Cart::where('product_id', '=', $id);
        $carritos->delete();

        $product = Product::find($id);
        $product->delete();

        if ($request->isJson()) {
          return response()->json(['mensaje' => 'que seas muy feliz']);
        }
      return redirect('/listaProductos')->with('mensaje', 'Borrado de Producto exitoso!');
    }




//



    public function createProduct()
    {
        $subcategorias = Subcategory::all();
        $categorias = Category::all();
        $productos = Product::all();
        return view('product.create', compact('categorias'));
    }

    public function save(Request $request){
        $this->validate($request, [
            'name' => 'required|unique:products',
            'description' => 'required',
            'price' => 'required|between:0,99.99',

            'avatar' => 'required|image',
            'category_id' => 'required',

            'stock' => 'required|numeric',
            'promo' => 'required|numeric',
        ],
        [
            'name.required' => 'El nombre es obligatorio',
            'description.required' => 'La descripción es obligatorio',
            'price.required' => 'El precio es obligatorio',
            'price.numeric' => 'Ingrese solo numeros',


            'image' => 'Imagen invalida',
            'category_id.required' => 'required',
            'stock.required' => 'Completar cantidad del proucto',
            'stock.numeric' => 'Ingrese solo numeros',
            'promo.required' => 'Completar cantidad del proucto',
            'promo.numeric' => 'Ingrese solo numeros',
        ]);

        $product = new Product([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
            'stock' => $request->input('stock'),
            'promo' => $request->input('promo'),
        ]);


          //al archivo que subi lo voy a guardar en el filesystem de laravel
          $rutaDelArchivo = $request->file('avatar')->store('public');
          //le saco solo el nombre
          $nombreArchivo = basename($rutaDelArchivo);
          //guardo el nombre del archivo en el campo poster
          $product->avatar = $nombreArchivo;


          $product->save();
          if($request->isJson()){
              return response()->json(['products' => $products]);
          }
          return redirect('/productos/agregar')->with('mensaje', 'Producto Guardado exitosamente!');
  }



    public function edit($id)
    {
        $productoEditado = Product::find($id);
        return view('product.edit')
        ->with([
        'producto' => $productoEditado
      ]);
    }

    public function update($id, Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:products',
            'description' => 'required',
            'price' => 'required|between:0,99.99',


            'avatar' => 'required|image',
            'stock' => 'required|numeric',
            'promo' => 'required|numeric',

          ],
          [
            'name.required' => 'El nombre es obligatorio',
            'description.required' => 'La descripción es obligatorio',
            'price.required' => 'El precio es obligatorio',
            'price.numeric' => 'Ingrese solo numeros',

            'image' => 'avatarImagen invalida',
            'stock.required' => 'Completar cantidad del proucto',
            'stock.numeric' => 'Ingrese solo numeros',
            'promo.required' => 'Completar cantidad del proucto',
            'promo.numeric' => 'Ingrese solo numeros',
          ]);

          //me traigo a la producto usando el find
          $productoAEditar = Product::find($id);
          //le cambio los atributos o valores al objeto que me traje arriba
          $productoAEditar->name = $request->name;
          $productoAEditar->description = $request->description;
          $productoAEditar->price = $request->price;

          $productoAEditar->stock = $request->stock;
          $productoAEditar->promo = $request->promo;


          //si subo un archivo, lo guardo.
          if($request->file('avatar')){
            //al archivo que subi lo voy a guardar en el filesystem de laravel
            $rutaDelArchivo = $request->file('avatar')->store('public');
            //le saco solo el nombre
            $nombreArchivo = basename($rutaDelArchivo);
            //guardo el nombre del archivo en el campo avatar
            $productoAEditar->avatar = $nombreArchivo;
          }


          $productoAEditar->save();
          if($request->isJson()){
            return redirect('/productos/limp')->with('mensaje', 'Producto Editado exitosamente!');
          }else{
          return redirect('/productos/limp')->with('mensaje', 'Producto Editado exitosamente!');
                  }
}
}

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
      return view('product.productsLimp', compact('productos'));
    }

    public function precLimMay(){
      $productos = Product::orderBy('price','desc')->get();
      return view('product.productsLimp')->with( ['productos' => $productos] );
    }

    public function precLimMen(){
      $productos = Product::orderBy('price','asc')->get();
      return view('product.productsLimp')->with( ['productos' => $productos] );
    }

    public function azLim(){
      $productos = Product::orderBy('name','asc')->get();
      return view('product.productsLimp')->with( ['productos' => $productos] );
    }
    public function zaLim(){
      $productos = Product::orderBy('name','desc')->get();
      return view('product.productsLimp')->with( ['productos' => $productos] );
    }

    public function promoLim(){
      $productos = Product::where('promo','=', 1 )->get();
      return view('product.productsLimp')->with( ['productos' => $productos] );
    }

    public function stockMenLim(){
      $productos = Product::orderBy('stock','asc')->get();
      return view('product.productsLimp')->with( ['productos' => $productos] );
    }
    public function stockMayLim(){
      $productos = Product::orderBy('stock','desc')->get();
      return view('product.productsLimp')->with( ['productos' => $productos] );
    }



    public function catProdBeb(){
      $productos = Product::all();
      return view('product.productsBeb', compact('productos'));
    }
    public function precBebMay(){
      $productos = Product::orderBy('price','desc')->get();
      return view('product.productsBeb')->with( ['productos' => $productos] );
    }

    public function precBebMen(){
      $productos = Product::orderBy('price','asc')->get();
      return view('product.productsBeb')->with( ['productos' => $productos] );
    }

    public function azBeb(){
      $productos = Product::orderBy('name','asc')->get();
      return view('product.productsBeb')->with( ['productos' => $productos] );
    }
    public function zaBeb(){
      $productos = Product::orderBy('name','desc')->get();
      return view('product.productsBeb')->with( ['productos' => $productos] );
    }

    public function promoBeb(){
      $productos = Product::where('promo','=', 1 )->get();
      return view('product.productsBeb')->with( ['productos' => $productos] );
    }

    public function stockMenBeb(){
      $productos = Product::orderBy('stock','asc')->get();
      return view('product.productsBeb')->with( ['productos' => $productos] );
    }
    public function stockMayBeb(){
      $productos = Product::orderBy('stock','desc')->get();
      return view('product.productsBeb')->with( ['productos' => $productos] );
    }



    public function sub(){
      $categorias = Category::all();
      return view('detallesSub', compact('categorias'));
    }

    public function subHig(){
      $categorias = Category::where('name','=','Higiene Personal')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subSuper(){
      $categorias = Category::where('name','=','Superficies y Pisos')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subRepe(){
      $categorias = Category::where('name','=','Repelentes')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subRopa(){
      $categorias = Category::where('name','=','Ropa')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subCA(){
      $categorias = Category::where('name','=','Con Alcohol')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subSA(){
      $categorias = Category::where('name','=','Sin Alcohol')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subFiam(){
      $categorias = Category::where('name','=','Fiambres y Quesos')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subAcei(){
      $categorias = Category::where('name','=','Aceites y Vinagres')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subDul(){
      $categorias = Category::where('name','=','Dulces y Mermeladas')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subCon(){
      $categorias = Category::where('name','=','Condimentos y Aderezos')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subGalle(){
      $categorias = Category::where('name','=','Galletitas')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subInf(){
      $categorias = Category::where('name','=','Infusiones y Endulzantes')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subYer(){
      $categorias = Category::where('name','=','Yerbas')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subCons(){
      $categorias = Category::where('name','=','Conservas y Legumbres')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subRebo(){
      $categorias = Category::where('name','=','Rebozadores')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subHari(){
      $categorias = Category::where('name','=','Harinas y Premezclas')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subArroz(){
      $categorias = Category::where('name','=','Arroz')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subFid(){
      $categorias = Category::where('name','=','Fideos')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subSnacks(){
      $categorias = Category::where('name','=','Snacks')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subRepo(){
      $categorias = Category::where('name','=','Repostería')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subLac(){
      $categorias = Category::where('name','=','Lácteos')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subPan(){
      $categorias = Category::where('name','=','Panes')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subCere(){
      $categorias = Category::where('name','=','Cereales')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subCong(){
      $categorias = Category::where('name','=','Congelados')->get();
      return view('detallesSub', compact('categorias'));
    }
    public function subVar(){
      $categorias = Category::where('name','=','Varios')->get();
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

 <?php

//Para el Administrador

Route::get('/categoriecreate','CategoryController@category')->middleware(['auth', 'admin']);
Route::post('/categoriecreate', 'CategoryController@save')->middleware(['auth', 'admin']);
Route::get('/categoriecreate','CategoryController@createSub')->middleware(['auth', 'admin']);
Route::get('/subcategoriecreate','SubcategoryController@subcategory')->middleware(['auth', 'admin']);
Route::post('/subcategoriecreate', 'SubcategoryController@save')->middleware(['auth', 'admin']);


Route::get('/productos/agregar', 'ProductoController@createProduct')->middleware(['auth', 'admin']);
Route::post('/productos', 'ProductoController@save')->middleware(['auth', 'admin']);
Route::get('/productos/editar/{id}', 'ProductoController@edit')->middleware(['auth', 'admin']);
Route::post('/productos/editar/{id}', 'ProductoController@update')->middleware(['auth', 'admin']);
Route::get('/productos/delete/{id}', 'ProductoController@borrarProducto')->middleware(['auth', 'admin']);
Route::post('/productos/delete/{id}', 'ProductoController@borrar')->middleware(['auth', 'admin']);

//PEDIDOS
Route::get('/pedidos/cliente', 'UsuarioController@getpedidos')->middleware(['auth', 'admin']);
Route::post('/pedidos/cliente', 'UsuarioController@postpedidos')->middleware(['auth', 'admin']);

Route::get('/pedidos/cliente/{id}', 'UsuarioController@borrarPedido')->middleware(['auth', 'admin']);
Route::post('/pedidos/cliente/{id}', 'UsuarioController@borrarP')->middleware(['auth', 'admin']);

//Usuarios
Route::get('/', 'PrincipalController@buscador');
Route::get('/', 'PrincipalController@productosDestacados');
//Route::get('/', 'PrincipalController@categoryindex');



Route::prefix('/productos')->group(function(){
Route::get('detalles/{id}', 'ProductoController@detalle');

//CATEGORIAS
Route::get('detallesSub', 'ProductoController@sub');


//ComestiblesCat

Route::get('/fideosSoperos', 'ProductoController@subFiam')->name('soperos');

Route::get('/fideosGuiseros', 'ProductoController@subAcei')->name('guiseros');

Route::get('/fideosMonitos', 'ProductoController@subDul')->name('monitos');

Route::get('fideosNidos', 'ProductoController@subCon')->name('nidos');

Route::get('fideosTricolor', 'ProductoController@subGalle')->name('tricolor');



//ComestiblesFiltrado
Route::get('com', 'ProductoController@catProdCom');

Route::get('com/Mayor-Com', 'ProductoController@precComMay');
Route::get('com/Menor-Com', 'ProductoController@precComMen');
Route::get('com/a-z-Com', 'ProductoController@azCom');
Route::get('com/z-a-Com', 'ProductoController@zaCom');
Route::get('com/Desc-Com', 'ProductoController@stockMayCom');
Route::get('com/Asc-Com', 'ProductoController@stockMenCom');
Route::get('com/promo-Com', 'ProductoController@promoCom');
});

//BUSCADOR

Route::get('/listaProductos', 'ProductoController@prueba');

Route::prefix('/listaProductos')->group(function(){

Route::get('PrecioMay', 'ProductoController@precMay');
Route::get('PrecioMen', 'ProductoController@precMen');
Route::get('a-z', 'ProductoController@az');
Route::get('z-a', 'ProductoController@za');
Route::get('Desc', 'ProductoController@stockMay');
Route::get('Asc', 'ProductoController@stockMen');
Route::get('Promociones', 'ProductoController@promo');
});

//CARRITO
Route::get('/carrito', 'CarritoController@index')->middleware('auth');
Route::get('/carrito', 'CarritoController@miCarrito')->middleware('auth');
Route::post('/productos/agregarCarrito', 'CarritoController@agregarAlCarrito')
->middleware('auth');
Route::post('/carrito/sacarCarrito', 'CarritoController@sacarDelCarrito')->middleware('auth');

//CHECKOUT
Route::get('/pedidos', 'OrderController@seccMigue')->middleware(['auth']);
Route::post('/pedidos', 'OrderController@finalizar')->middleware(['auth']);



Route::get('/pedidosMail', function(){
  return view('pedidosMail');
});




Route::get('/home', 'HomeController@index')->middleware(['auth','verified']);

Auth::routes(['verify' => true]);


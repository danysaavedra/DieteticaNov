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

Route::prefix('/productos')->group(function(){
Route::get('detalles/{id}', 'ProductoController@detalle');

//CATEGORIAS
Route::get('detallesSub', 'ProductoController@sub');

//Perfumería y Limpieza
Route::get('detallesSub/limp/higiene', 'ProductoController@subHig');
Route::get('detallesSub/limp/super', 'ProductoController@subSuper');
Route::get('detallesSub/limp/repelentes', 'ProductoController@subRepe');
Route::get('detallesSub/limp/ropa', 'ProductoController@subRopa');
Route::get('detallesSub/limp/varios', 'ProductoController@subVar');

//limpiezaFiltrado
Route::get('limp', 'ProductoController@catProdLimpi');

Route::get('limp/Mayor-Lim', 'ProductoController@precLimMay');
Route::get('limp/Menor-Lim', 'ProductoController@precLimMen');
Route::get('limp/a-z-Lim', 'ProductoController@azLim');
Route::get('limp/z-a-Lim', 'ProductoController@zaLim');
Route::get('limp/Desc-Lim', 'ProductoController@stockMayLim');
Route::get('limp/Asc-Lim', 'ProductoController@stockMenLim');
Route::get('/imp/promo-Lim', 'ProductoController@promoLim');

//Bebidas
Route::get('detallesSub/beb/alcohol', 'ProductoController@subCA');
Route::get('detallesSub/beb/sinAlcohol', 'ProductoController@subSA');

//bebidasFiltrado
Route::get('beb', 'ProductoController@catProdBeb');

Route::get('beb/Mayor-Beb', 'ProductoController@precBebMay');
Route::get('beb/Menor-Beb', 'ProductoController@precBebMen');
Route::get('beb/a-z-Beb', 'ProductoController@azBeb');
Route::get('beb/z-a-Beb', 'ProductoController@zaBeb');
Route::get('beb/Desc-Beb', 'ProductoController@stockMayBeb');
Route::get('beb/Asc-Beb', 'ProductoController@stockMenBeb');
Route::get('beb/promo-Beb', 'ProductoController@promoBeb');


//ComestiblesCat

Route::get('/fiambresQuesos', 'ProductoController@subFiam')->name('fiambres');

Route::get('/aceitesVinagres', 'ProductoController@subAcei')->name('aceitesYvinagres');
Route::get('detallesSub/com/dulces', 'ProductoController@subDul');
Route::get('detallesSub/com/condimentos', 'ProductoController@subCon');
Route::get('detallesSub/com/galletitas', 'ProductoController@subGalle');
Route::get('detallesSub/com/infusiones', 'ProductoController@subInf');
Route::get('detallesSub/com/yerbas', 'ProductoController@subYer');

Route::get('detallesSub/com/conservas', 'ProductoController@subCons');
Route::get('detallesSub/com/rebozadores', 'ProductoController@subRebo');
Route::get('detallesSub/com/harinas', 'ProductoController@subHari');
Route::get('detallesSub/com/arroz', 'ProductoController@subArroz');

Route::get('detallesSub/com/fideos', 'ProductoController@subFid');
Route::get('detallesSub/com/snacks', 'ProductoController@subSnacks');
Route::get('detallesSub/com/reposteria', 'ProductoController@subRepo');
Route::get('detallesSub/com/lacteos', 'ProductoController@subLac');

Route::get('detallesSub/com/panes', 'ProductoController@subPan');
Route::get('detallesSub/com/cereales', 'ProductoController@subCere');
Route::get('detallesSub/com/congelados', 'ProductoController@subCong');




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


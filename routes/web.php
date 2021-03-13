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









//especialidadesFiltrado
Route::get('especialidades', 'ProductoController@catProdLimpi')->name('especialidades');

Route::get('Mayor-esp', 'ProductoController@precLimMay')->name('mayor-esp');
Route::get('Menor-esp', 'ProductoController@precLimMen')->name('menor-esp');
Route::get('a-z-esp', 'ProductoController@azLim')->name('az-esp');
Route::get('z-a-esp', 'ProductoController@zaLim')->name('za-esp');
Route::get('Desc-esp', 'ProductoController@stockMayLim')->name('desc-esp');
Route::get('Asc-esp', 'ProductoController@stockMenLim')->name('asc-esp');
Route::get('promo-esp', 'ProductoController@promoLim')->name('pro-esp');



//pastalargaFiltrado
Route::get('pastalarga', 'ProductoController@catProdBeb')->name('pastalarga');

Route::get('beb/Mayor-Beb', 'ProductoController@precBebMay');
Route::get('beb/Menor-Beb', 'ProductoController@precBebMen');
Route::get('beb/a-z-Beb', 'ProductoController@azBeb');
Route::get('beb/z-a-Beb', 'ProductoController@zaBeb');
Route::get('beb/Desc-Beb', 'ProductoController@stockMayBeb');
Route::get('beb/Asc-Beb', 'ProductoController@stockMenBeb');
Route::get('beb/promo-Beb', 'ProductoController@promoBeb');

//CpastacortaFiltrado
Route::get('pastacorta', 'ProductoController@catProdCom')->name('pastacorta');




Route::get('Mayor-pasc', 'ProductoController@precComMay')->name('precioMayor');
Route::get('Menor-pasc', 'ProductoController@precComMen')->name('precioMenor');
Route::get('a-z-pasc', 'ProductoController@azCom')->name('az');
Route::get('z-a-pasc', 'ProductoController@zaCom')->name('za');
Route::get('Desc-pasc', 'ProductoController@stockMayCom')->name('desc');
Route::get('Asc-pasc', 'ProductoController@stockMenCom')->name('men');
Route::get('promo-pasc', 'ProductoController@promoCom')->name('pro');
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

Route::get('/ayuda', function(){
  return view('ayuda');
});


Route::get('/home', 'HomeController@index')->middleware(['auth','verified']);

Auth::routes(['verify' => true]);


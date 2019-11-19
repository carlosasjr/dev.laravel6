<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//rotas nomeadas

Route::get('/redirect3', function () {
    return redirect()->route('url.name');
});

Route::get('/nome.url', function () {
    return 'Hey hey';
})->name('url.name');

//na view chamar via route('url.name');

//chamando view diretamente pela rota
Route::view('/view', 'site.contact');

//redirecionar rota
/*
Route::get('redirect1', function () {
  return redirect('/redirect2');
});*/

Route::redirect('/redirect1', 'redirect2');

Route::get('redirect2', function () {
 return 'Redirect 02';
});

//parametro opcional
Route::get('/produtos/{id?}', function ($id = null) {
   return 'Produtos ' . $id;
});

Route::get('/categoria/{flag}/posts', function ($flag) {
    return "Posts da categoria {$flag}";
});

Route::get('/categorias/{flag}', function ($flag) {
    return "Produtos da categoria {$flag}";
});

//definir os verbos permitidos
Route::match(['get', 'post'], 'match', function () {
    return 'get e post';
});

//todos os verbos
Route::any('/any', function () {
    return 'Any';
});

Route::get('/empresa', function () {
    return 'empresa';
});

Route::get('/contato', function () {
    return view('site.contact');
});



Route::get('/', function () {
    return view('welcome');
});

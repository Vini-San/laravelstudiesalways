<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicial', function () {
    return view('inicial/welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/* Route::get('/departamento', function () {
    return view('departamento');
})->middleware(['auth'])->name('departamento'); */

Route::view('/departamento', 'departamento')->name('departamento');

/* Route::match(['post'],'/departamento', function () {
    return view('departamento');
})->middleware(['auth'])->name('departamento'); */

Route::get('/departamentoid/{id}/{categoria?}', function ($id,$cat = '') {
    return "O Id do Produto é: ".$id.".<br>A Categoria é: ".$cat;
})->middleware(['auth'])->name('departamento');

/* Route::get('/sobre', function () {
    return redirect('/departamentoid/48956/Vassouras');
}); */

Route::redirect('/sobre', '/departamentoid/48956/Vassouras');

require __DIR__.'/auth.php';

Route::get('/news', function () {
    return view('news');
})->middleware(['auth'])->name('noticias');

Route::get('/novidades', function () {
    return redirect()->route('noticias');
});

/* Route::prefix('admin')->group(function(){
    Route::get('dashboard', function () {
        return "dashboard";
    });
    Route::get('users', function () {
        return "users";
    });
    Route::get('clientes', function () {
        return "clientes";
    });
}); */

Route::group([
    'prefix' => 'admin',
    "as" => 'admin'
], function(){
    Route::get('dashboard', function () {
        return "dashboard";
    });
    Route::get('users', function () {
        return "users";
    });
    Route::get('clientes', function () {
        return "clientes";
    });
});

/* Route::get('/produto/{id?}', [ProdutoController::class, 'show']); */

/* Route::resource('produtos', ProdutoController::class); */

Route::resource('bencao', CategoriaController::class);
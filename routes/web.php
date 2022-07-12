<?php

//use App\Http\Controllers\Dashboard\MensajeController;
//use App\Http\Controllers\Dashboard\UserController;
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

Route::get('/index', function () {
    return view('index');
})->middleware('auth');;

//Route::resource('mensaje', MensajeController::class);
//Route::resource('user', App\Http\Controllers\Dashboard\UserController::class);

Route::get('/', function () {
    return view('auth.login');
});



Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', "admin"]], function () {
    Route::get('/', function(){
        return view('dashboard');
    })->name("dashboard");
    Route::resources([
        'user' => App\Http\Controllers\Dashboard\UserController::class,
        'mensaje' => App\Http\Controllers\Dashboard\MensajeController::class,
        'menu' => App\Http\Controllers\Dashboard\MenuController::class,
        'lista' => App\Http\Controllers\Dashboard\ListaController::class,
        'listas' => App\Http\Controllers\Dashboard\ListasController::class
    ]);
});

require __DIR__.'/auth.php';

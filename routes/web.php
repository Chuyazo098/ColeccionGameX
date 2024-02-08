<?php

use App\Http\Controllers\Controller;
use App\Models\colecciones;
use App\Models\juegos;
use App\Models\Progreso;
use Illuminate\Support\Facades\Route;
use Laravel\Ui\ControllersCommand;
use App\Http\Controllers\juegoController;
use App\Http\Controllers\coleccionController;
use App\Http\Controllers\progresoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/juegos','App\Http\Controllers\juegoController')
->except(['show'])
->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/progresos','App\Http\Controllers\progresoController')
->except(['show'])
->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/colecciones','App\Http\Controllers\coleccionController')
->except(['show'])
->middleware('auth');

Route::get('/juegos/create', [JuegoController::class, 'createJuego'])->name('createJuego');
Route::get('/progresos/create', [ProgresoController::class, 'create'])->name('createProgreso');
Route::get('/colecciones/create', [coleccionController::class, 'createColeccion'])->name('createColeccion');

Route::get('/juegos/{juego}/edit', [juegoController::class, 'edit'])->name('juegos.edit');
Route::get('colecciones/{coleccion}/edit', 'coleccionController@edit')->name('colecciones.edit');
Route::get('/progresos/{progreso}/edit', [ProgresoController::class, 'edit'])->name('progresos.edit');

Route::delete('/juegos/{id}', [juegos::class, 'destroy'])->name('juegos.destroy');
Route::delete('/colecciones/{id}', [colecciones::class, 'destroy'])->name('colecciones.destroy');
Route::delete('/progresos/{id}', [progreso::class, 'destroy'])->name('progresos.destroy');

Route::get('/delete-juego/{juegos_id}', array(
    'as' => 'deleteJuego',
    'middleware' => 'auth',
    'uses' => '\App\Http\Controllers\juegoController@deleteJuego'
 ));

Route::get('/delete-coleccion/{colecciones_id}', array(
    'as' => 'deleteJColeccion',
    'middleware' => 'auth',
    'uses' => '\App\Http\Controllers\coleccionController@deleteJuego'
 ));

 Route::get('/delete-progreso/{progresos_id}', array(
    'as' => 'deleteJprogreso',
    'middleware' => 'auth',
    'uses' => '\App\Http\Controllers\progresoController@deleteJuego'
 ));

 Route::name('print')->get('/imprimir', '\App\Http\Controllers\GeneradorController@imprimir');
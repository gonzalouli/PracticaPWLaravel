<?php

use Illuminate\Support\Facades\Auth;

use App\Providers\RouteServiceProvider;
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

//Estos dos cabrones hacen posible el logout
Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/logout', function () {
    return redirect()->route('login');
});

Route::get('/login', function () {
    return Route('login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/userEvents', 'EventsController@index')->name('events.index');

Route::get('/baja', function(){
    return view('solbaja');
})->name('baja');

//Route::match(['get', 'post'], 'input', 'solicitudBaja@solicitar');
Route::post('/baja/solicitada','SolBajaController@solicitar')->name('solicitudBaja');

Route::get('/vacaciones', function(){
    return view('vacaciones');
})->name('vacaciones');

Route::get('/ficha', function(){
    return view('fichaje');
})->name('fichar');

Route::post('fichaje/entrada',"FichaController@fichaEntrada")->name('fentrada');

Route::post('fichaje/salida',"FichaController@fichaSalida")->name('fsalida');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/vacaciones', function(){
    return view('solvacaciones');
})->name('SolVacaciones');

Route::post('vacaciones/tramo',"SolVacacionesController@tramo")->name('tramovacaciones');

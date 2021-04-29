<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
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

Route::get('/userEvents', 'EventsController@ShowEvents')->name('userEvents');

Route::get('/baja', function(){
    return view('baja');
})->name('baja');

Route::get('/vacaciones', function(){
    return view('vacaciones');
})->name('vacaciones');

Route::get('/ficha', function(){
    return view('ficha');
})->name('ficha');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

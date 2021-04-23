<?php

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

Route::get('/',function (){
    return view('welcome');
});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/calendar',[\App\Http\Controllers\SystemCalendarController::class,'index'])->name('calendar');

Route::get('/users',[\App\Http\Controllers\UserController::class,'index'])->name('users');

//Route::resource('events',\App\Http\Controllers\EventController::class);

Route::get('events/date/{date}',[\App\Http\Controllers\EventController::class,'dateCreate']);


Route::get('/events', [App\Http\Controllers\EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [App\Http\Controllers\EventController::class, 'create'])->name('events.create');
Route::post('/events', [App\Http\Controllers\EventController::class, 'store'])->name('events.store');
Route::get('/events/{id}', [App\Http\Controllers\EventController::class, 'show'])->name('events.show');
Route::delete('/events/{id}', [App\Http\Controllers\EventController::class, 'destroy'])->name('events.destroy');

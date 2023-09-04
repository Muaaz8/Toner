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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',[App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/temp',function(){
    $user = DB::table('users')->paginate(5);
    return view('temp',compact('user'));
});
Route::get('/form',function(){
    return view('form');
});

// Routes for the BrandController
Route::resource('brands', App\Http\Controllers\BrandController::class);

// Routes for the TypeController
Route::resource('types', App\Http\Controllers\TypeController::class);

// Routes for the FamilyController
Route::resource('families', App\Http\Controllers\FamilyController::class);

// Routes for the ModelController
Route::resource('models', App\Http\Controllers\PrinterModelController::class);

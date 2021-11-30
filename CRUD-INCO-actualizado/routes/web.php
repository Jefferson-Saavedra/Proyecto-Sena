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
    return view('layouts.app');
});


Route::get('/', function () {
    return view('auth.login');
});




Auth::routes();


// LINEAS DE CODIGO Q YA NO DEJA INGRESAR A  NADIE QUE NO ESTE AUTENTICADO EN EL LOGIN ->middleware('auth');
Route::resource('suppliers', App\Http\controllers\SupplierController::class)->middleware('auth');
Route::resource('clients', App\Http\controllers\ClientController::class)->middleware('auth');
Route::resource('employeepositions', App\Http\controllers\EmployeepositionController::class)->middleware('auth');
Route::resource('products', App\Http\controllers\ProductController::class)->middleware('auth');
Route::resource('employees', App\Http\controllers\EmployeeController::class)->middleware('auth');
Route::resource('entries', App\Http\controllers\EntryController::class)->middleware('auth');
Route::resource('outputs', App\Http\controllers\OutputController::class)->middleware('auth');
Route::resource('invoices', App\Http\controllers\InvoiceController::class)->middleware('auth');
Route::resource('details', App\Http\controllers\DetailController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

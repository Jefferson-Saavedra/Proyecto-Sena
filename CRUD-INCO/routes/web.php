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
    return view('auth.login');
});


Auth::routes();

Route::resource('suppliers', App\Http\controllers\supplierController::class);
Route::resource('clients', App\Http\controllers\clientController::class);
Route::resource('employeepositions', App\Http\controllers\employeepositionController::class);
Route::resource('products', App\Http\controllers\productController::class);
Route::resource('employees', App\Http\controllers\employeeController::class);
Route::resource('entries', App\Http\controllers\EntryController::class);
Route::resource('outputs', App\Http\controllers\outputController::class);
Route::resource('invoices', App\Http\controllers\invoiceController::class);
Route::resource('details', App\Http\controllers\detailController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

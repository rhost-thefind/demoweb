<?php

use App\Http\Controllers\ProductController;
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

Route::controller(ProductController::class)->group(function () {
    Route::get('product', 'index')->name('product.index');
    Route::get('produt/{produt}', 'show')->name('product.show');
    /* Route::get('curso/create', 'create')->name('curso.create');
    Route::post('curso', 'store')->name('curso.store');
    Route::get('curso/{curso}', 'show')->name('curso.show');
    Route::get('curso/{curso}/edit', 'edit')->name('curso.edit');
    Route::put('curso/{curso}', 'update')->name('curso.update'); */
});

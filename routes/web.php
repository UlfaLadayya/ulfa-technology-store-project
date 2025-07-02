<?php

use App\Models\Product;
use App\Models\AddProduct;
use App\Models\EditProduct;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\EditProductController;
use App\Http\Controllers\DeleteProductController;

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

Route::get('/', [MainController::class, 'dashboardscreen']);
Route::get('/productsscreen', [MainController::class, 'admin'])->name('products.show');
Route::get('/formaddproduct', [AddProductController::class, 'addformproductscreen'])->name('formaddproduct.show');
Route::post('/save', [AddProductController::class, 'simpanproduct'])->name('save');
Route::get('/editproductscreen/{id}', [EditProductController::class, 'editproductscreen'])->name('product.edit');
Route::post('/updateproduct/{id}', [EditProductController::class, 'updateproducts'])->name('product.update');
Route::delete('/deleteproduct/{id}', [DeleteProductController::class, 'deleteproduct'])->name('product.delete');
Route::get('/grafik', [MainController::class, 'admin'])->name('products');
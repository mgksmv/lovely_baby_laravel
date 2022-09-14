<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CollectionController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/catalog/category/{slug}', [CatalogController::class, 'show_category'])->name('category_detail');
Route::get('/catalog/product/{slug}', [CatalogController::class, 'show_product'])->name('product_detail');
Route::get('/collections', [CollectionController::class, 'index'])->name('collections');
Route::get('/collections/{slug}', [CollectionController::class, 'show'])->name('collection_detail');

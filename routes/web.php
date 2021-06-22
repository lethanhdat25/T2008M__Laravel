<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
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

Route::get('/home', [WebController::class,"home"]);
Route::get('/aboutus', [WebController::class,"AboutUs"]);
Route::get('/table_product', [WebController::class,"table_product"]);
Route::get('/categories', [CategoryController::class,"all"]);
Route::get('/categories/new', [CategoryController::class,"form"]);
Route::post('/categories/save', [CategoryController::class,"save"]);
Route::get('/categories/edit/{id}', [CategoryController::class,"edit"]);
Route::post('/categories/update/{id}', [CategoryController::class,"update"]);
Route::get("/products",[ProductController::class,"all"]);
Route::get("/products/new",[ProductController::class,"NewProduct"]);
Route::post("/products/save",[ProductController::class,"Save"]);
Route::get("/products/edit/{id}",[ProductController::class,"Edit"]);
Route::post("/products/update/{id}",[ProductController::class,"Update"]);
Route::get("/products/delete/{id}",[ProductController::class,"Delete"]);
Route::get("/brands",[BrandController::class,"all"]);
Route::get("/brands/new",[BrandController::class,"new"]);
Route::post("/brands/create",[BrandController::class,"createNew"]);

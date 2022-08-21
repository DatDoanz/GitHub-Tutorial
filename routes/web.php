<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductController2;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
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


Route::get('list', [ProductController::class, 'index']);
Route::get('list2', [ProductController::class, 'index2']);
Route::get('list3', [CategoriesController::class, 'index3']);
Route::get('add', [ProductController::class, 'add']);
Route::post('save', [ProductController::class, 'save']);
Route::get('edit/{id}', [ProductController::class, 'edit']);
Route::post('update', [ProductController::class, 'update']);
Route::get('delete/product/{id}', [ProductController::class, 'delete']);

Route::get('/', [ProductController2::class, 'index']);
Route::get('products', [ProductController2::class, 'getProducts']);
Route::get('/details/{id}', [ProductController2::class, 'details']);

Route::get('register', [CustomerController::class, 'register']);
Route::post('register-process', [CustomerController::class, 'registerProcess'])->name('register-process');
Route::get('login', [CustomerController::class, 'login']);
Route::post('login-process', [CustomerController::class, 'loginProcess'])->name('login-process');
Route::get('logout', [CustomerController::class, 'logout']);
Route::get('information/{id}', [CustomerController::class, 'information']);
Route::post('saveinformation', [CustomerController::class, 'saveinformation'])->name('save-information');
Route::get('admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('admin/customers', [AdminController::class, 'customers']);
Route::get('admin/producers', [AdminController::class, 'producers']);
Route::get('admin/products', [AdminController::class, 'products']);
Route::get('admin/categories', [AdminController::class, 'categories']);
Route::get('admin/deletecustomer', [AdminController::class, 'deletecustomer']);

Route::get('home', function (){
    return view('0905b.home');
});


Route::get('add2', [CategoriesController::class, 'add2']);
Route::post('save', [CategoriesController::class, 'save']);
Route::get('edit2/{id}', [CategoriesController::class, 'edit2']);
Route::post('update2', [CategoriesController::class, 'update2']);
Route::get('/delete/{id}', [CategoriesController::class, 'delete']);


Route::get('register1', [AdminController::class, 'register1']);
Route::post('registerAdmin-process', [AdminController::class, 'registerAdminProcess'])->name('registerAdmin-process');
Route::get('login1', [AdminController::class, 'login1']);
Route::post('loginAdmin-process', [AdminController::class, 'loginAdminProcess'])->name('loginAdmin-process');

Route::get('index', function(){
    return view('admin.index');
});
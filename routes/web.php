<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Front Web Site
|--------------------------------------------------------------------------
*/
Route::get('/',[App\Http\Controllers\FrontController::class, 'front']) ->name('front');
Route::get('/home-shop',[App\Http\Controllers\FrontController::class, 'index'])              ->name('shop');
Route::get('/aboutus',[App\Http\Controllers\FrontController::class, 'about'])                   ->name('about');
Route::post('set_time',[App\Http\Controllers\FrontController::class,'set_time'])->name('set_time');
Route::get('/services{id}{name}',[App\Http\Controllers\FrontController::class, 'services'])                 ->name('services');
Route::get('/service_list',[App\Http\Controllers\FrontController::class, 'service_list'])                 ->name('service_list');
Route::get('/service-profile',[App\Http\Controllers\FrontController::class, 'service_profile'])                 ->name('service-profile');

/*
|--------------------------------------------------------------------------
| Dashboard Site
|--------------------------------------------------------------------------
*/

Route::group(['namespace'=> 'admin','middleware' => 'auth'],function (){

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    Route::get('/appointment_service', [App\Http\Controllers\DashboardController::class, 'appointment_service'])->name('appointment.service');
    Route::get('/appointment_product', [App\Http\Controllers\DashboardController::class, 'appointment_product'])->name('appointment.product');

  });


/*
|--------------------------------------------------------------------------
| Caterory Dashboard Site
|--------------------------------------------------------------------------
*/
Route::group(['namespace'=> 'admin','middleware' => 'auth'],function (){
    Route::get('/category', [App\Http\Controllers\DashboardController::class, 'category'])->name('category');
    Route::post('/save', [App\Http\Controllers\Dashboard\CategoryController::class, 'store'])->name('save');
    Route::get('/category_list', [App\Http\Controllers\Dashboard\CategoryController::class, 'index'])->name('category_list');
    Route::get('/category-delete{id}', [App\Http\Controllers\Dashboard\CategoryController::class, 'destroy'])->name('category.delete');
  });

/*
|--------------------------------------------------------------------------
| Services Dashboard Site
|--------------------------------------------------------------------------
*/
Route::group(['namespace'=> 'admin','middleware' => 'auth'],function (){
    //Route::get('/category', [App\Http\Controllers\DashboardController::class, 'category'])->name('category');
    //Route::post('/save', [App\Http\Controllers\Dashboard\CategoryController::class, 'store'])->name('save');
    Route::get('/service', [App\Http\Controllers\Dashboard\ServiceController::class, 'index'])->name('service_list');
    Route::get('/service_daelete{id}', [App\Http\Controllers\Dashboard\ServiceController::class, 'destroy'])->name('service.delete');
    Route::get('/add_sevice', [App\Http\Controllers\Dashboard\ServiceController::class, 'service'])->name('service_add');
    Route::post('/service_create', [App\Http\Controllers\Dashboard\ServiceController::class, 'create'])->name('service.save');

});

/*
|--------------------------------------------------------------------------
| Providers Dashboard Site
|--------------------------------------------------------------------------
*/
Route::group(['namespace'=> 'admin','middleware' => 'auth'],function (){
    //Route::get('/category', [App\Http\Controllers\DashboardController::class, 'category'])->name('category');
    //Route::post('/save', [App\Http\Controllers\Dashboard\CategoryController::class, 'store'])->name('save');
    Route::get('/provider', [App\Http\Controllers\Dashboard\ProviderController::class, 'index'])->name('provider_list');
    Route::get('/add_provider', [App\Http\Controllers\Dashboard\ProviderController::class, 'create'])->name('provider_add');
    Route::post('/provider_create', [App\Http\Controllers\Dashboard\ProviderController::class, 'store'])->name('provider.save');

});

/*
|--------------------------------------------------------------------------
| Suppliers Dashboard Site
|--------------------------------------------------------------------------
*/
Route::group(['namespace'=> 'admin','middleware' => 'auth'],function (){
    Route::get('/supplier', [App\Http\Controllers\Dashboard\SupplierController::class, 'index'])->name('suppliers');
    //Route::post('/save', [App\Http\Controllers\Dashboard\CategoryController::class, 'store'])->name('save');
    Route::get('/supplier-add', [App\Http\Controllers\Dashboard\SupplierController::class, 'create'])->name('supplier.add');
    //Route::get('/add_provider', [App\Http\Controllers\Dashboard\ProviderController::class, 'create'])->name('provider_add');
    Route::post('/supplier_create', [App\Http\Controllers\Dashboard\SupplierController::class, 'store'])->name('supplier.save');

});

/*
|--------------------------------------------------------------------------
| Products Dashboard Site
|--------------------------------------------------------------------------
*/
Route::group(['namespace'=> 'admin','middleware' => 'auth'],function (){
    Route::get('/product', [App\Http\Controllers\Dashboard\ProductController::class, 'index'])->name('products');
    Route::post('/save', [App\Http\Controllers\Dashboard\ProductController::class, 'store'])->name('product.save');
    //Route::get('/provider', [App\Http\Controllers\Dashboard\ProviderController::class, 'index'])->name('provider_list');
    Route::get('/add_product', [App\Http\Controllers\Dashboard\ProductController::class, 'create'])->name('product_add');
    //Route::post('/provider_create', [App\Http\Controllers\Dashboard\ProviderController::class, 'store'])->name('provider.save');

});

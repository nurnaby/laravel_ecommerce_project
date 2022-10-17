<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\DashbordContorller;
use App\Http\Controllers\Admin\subcategoryController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:user'])->name('dashboard');

Route::middleware(['auth','role:admin'])->group(function(){

    Route::controller(DashbordContorller::class)->group(function(){
        Route::get('/admin/dashboard','index');
    });
    Route::controller(categoryController::class)->group(function(){
        Route::get('/admin/all-category','index')->name('allcategory');
        Route::get('/admin/add-category','AddCategory')->name('addcategory');
    });
    Route::controller(subcategoryController::class)->group(function(){
        Route::get('/admin/all-subcategory','index')->name('allSubcategory');
        Route::get('/admin/add-subcategory','AddSubCategory')->name('addSubcategory');
    });
    Route::controller(productController::class)->group(function(){
        Route::get('/admin/all-product','index')->name('allProduct');
        Route::get('/admin/add-product','AddProduct')->name('addProduct');
    });
});


require __DIR__.'/auth.php';
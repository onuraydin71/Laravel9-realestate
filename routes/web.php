<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\AdminPanel\CategoryController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/',[HomeController::class,'index']);

Route::get('/deneme',[TestController::class,'deneme']);

Route::prefix('admin')->name('admin.')->group(function () {

Route::get('',[AdminHomeController::class,'index'])->name(name:'index');

//**********************ADMIN PRODUCT ROUTES**********************/
Route::prefix('/product')->name('product.')->controller(AdminProductController::class)->group(function () {

    Route::get('/','index')->name(name:'index');
    Route::get('/create','create')->name(name:'create');
    Route::post('/store','store')->name(name:'store');
    Route::get('/edit/{id}','edit')->name(name:'edit');
    Route::post('/update/{id}','update')->name(name:'update');
    Route::get('/show/{id}','show')->name(name:'show');
    Route::get('/delete/{id}','destroy')->name(name:'delete');
    });
    
//**********************ADMIN CATEGORY ROUTES**********************/
Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {

Route::get('/','index')->name(name:'index');
Route::get('/create','create')->name(name:'create');
Route::post('/store','store')->name(name:'store');
Route::get('/edit/{id}','edit')->name(name:'edit');
Route::post('/update/{id}','update')->name(name:'update');
Route::get('/show/{id}','show')->name(name:'show');
Route::get('/delete/{id}','destroy')->name(name:'delete');
    });


});
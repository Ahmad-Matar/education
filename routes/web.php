<?php

use App\Http\Controllers\CatagoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    return view('Home');
});

// Route::prefix('')->as()->group(function(){
//     Route::get('index',[UserController::class,'index'])->name('index');
//     Route::get('/show/{id}',[UserController::class,'show'])->name('show');
    
//     Route::get("/create",[UserController::class,'create'])->name('create');
//     Route::post("/",[UserController::class,'insert'])->name('insert');
    
//     Route::get("/{id}/edit",[UserController::class,'edit'])->name('edit');
//     Route::put("/",[UserController::class,'update'])->name('update');
    
//     Route::delete("/",[UserController::class,'destroy'])->name('destroy');
// });
Route::group([
    'prefix' => 'users',
    'as' => 'user.',

],function(){
    Route::get('index',[UserController::class,'index'])->name('index');
    Route::get('/show/{id}',[UserController::class,'show'])->name('show');
    
    Route::get("/create",[UserController::class,'create'])->name('create');
    Route::post("/",[UserController::class,'insert'])->name('insert');
    
    Route::get("/{id}/edit",[UserController::class,'edit'])->name('edit');
    Route::put("/",[UserController::class,'update'])->name('update');
    
    Route::delete("/",[UserController::class,'destroy'])->name('destroy');
});


Route::resource('product',ProductController::class)->except('');

Route::get('/catagory/index',[CatagoriesController::class,'index']);


Route::get('/index',[CatagoriesController::class,'index']);



// Route::get('product/index',[ProductController::class,'index']);

// Route::get('/product/create',[ProductController::class,'create']);
// Route::post('/product',[ProductController::class,'store']);
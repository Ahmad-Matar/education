<?php

use App\Http\Controllers\Client\ProfileController as ClientProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/users/index',[UserController::class,'index'])->middleware('auth');
Route::get('/users/show/{id}',[UserController::class,'show']);

Route::get("/users/create",[UserController::class,'create']);
Route::post("/users",[UserController::class,'insert']);

Route::get("/users/{id}/edit",[UserController::class,'edit']);
Route::put("/users",[UserController::class,'update']);

Route::delete("/users",[UserController::class,'destroy']);


Route::get('/catagory/index',[CatagoriesController::class,'index']);


Route::get('/index',[CatagoriesController::class,'index']);

Route::prefix('client')->middleware('auth')->group(function () {
    Route::get('edit/profile',[ClientProfileController::class,'edit'])  ;
    Route::put('profile/update',[ClientProfileController::class,'update'])->name('profile.update')  ;
    Route::get('show/profile',[ClientProfileController::class,'show'])  ;

    
});

Route::prefix('post')->middleware('auth')->group(function () {
    Route::get('get/post',[PostController::class,'index'])  ;
    Route::get('get/userpost',[PostController::class,'show'])  ;
    Route::get('create/post',[PostController::class,'create'])  ;
    Route::post('create/post',[PostController::class,'store'])->name('post.store')  ;

    
});
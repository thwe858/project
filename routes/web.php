<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');


 Route::get('/show',[App\Http\Controllers\IntroController::class,'show']);


Route::get('/test',[App\Http\Controllers\IntroController::class,'testfun']);

Route::get('/',[App\Http\Controllers\TempleController::class,'index'])->name('homepage');

Route::get('/about',[App\Http\Controllers\TempleController::class,'about'])->name('about');
Route::get('/post',[App\Http\Controllers\TempleController::class,'post'])->name('post');;
Route::get('/contact',[App\Http\Controllers\TempleController::class,'contact'])->name('contact');;
// Route::get('/ab',[App\Http\Controllers\TestController::class,'about']);
Route::get('/table',[App\Http\Controllers\AdminControl::class,'tablefun'])->name('table');

Route::resource('categories',CategoryController::class);
Route::resource('students',StudentController::class);
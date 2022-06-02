<?php

use App\Models\Admin;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LalaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserLoginController;

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
    return view('public.index');
});

Route::get('/login', function () {
    return view('public.login');
});

Route::get('/register', function () {
    return view('public.register');
});

Route::get('/post_register', function () {
    return view('public.post_register');
});

Route::get('/admin', function(){
    return view("admin.index");
});
Route::post('/user_login',[UserLoginController::class,'authenticate']);
Route::get('/logout',[UserLoginController::class,'Logout']);


Route::post('/user_login',[UserLoginController::class,'authenticate']);
Route::get('/logout',[UserLoginController::class,'logout']);

Route::get('/public', [LalaController::class,'index']);

Route::get('/admin-lagi', [AdminController::class]);
Route::get('/user', function(){
    return view("user.index");
})->middleware('auth');


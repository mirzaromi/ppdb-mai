<?php

<<<<<<< HEAD
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LalaController;
use App\Models\Admin;
=======
use App\Http\Controllers\UserControllers;
>>>>>>> 9c8dd5bfbd162677f49f9033102250b8bf55fe5c
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
    return view('public.index');
});

Route::get('/admin', function(){
    return view("admin.index");
});

Route::get('/public', [LalaController::class,'index']);

Route::get('/admin-lagi', [AdminController::class]);
Route::get('/user', function(){
    return view("user.index");
});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;
use App\Http\Controllers\userControl;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get("/",[homeControl::class,"index"]);

Route::get("/redirect",[homeControl::class,"redirectFunct"]);

Route::get("/projects",[adminControl::class,"project"]);

Route::POST("add",[adminControl::class,'addData']);

Route::get('upd/{id}',[adminControl::class,'showProj']);

Route::POST("edit",[adminControl::class,'update']);

Route::get("/assign",[adminControl::class,"list"]);

Route::get("view",[adminControl::class,"projectList"]);

Route::get("/updates",[userControl::class,"baru"]);

Route::get("/details",[userControl::class,"latest"]);

Route::POST("plus",[userControl::class,"addDet"]);

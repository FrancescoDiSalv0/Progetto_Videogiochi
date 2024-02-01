<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideogameController;

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

Route::get('/', [PublicController::class , 'welcome'])->name('welcome');

Route::get("/videogame/form", [VideogameController::class, "videogameForm"])->name("videogame.form"); 
// rotta di tipo post
Route::post("/videogame/form/submit",[VideogameController::class, "videogameSubmit"])->name("videogame.submit");

Route::get("/videogames/index",[VideogameController::class, "videogameIndex"])->name("videogame.index");
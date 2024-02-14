<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfileController;
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

Route::post("/videogame/form/submit",[VideogameController::class, "videogameSubmit"])->name("videogame.submit");

Route::get("/videogame/index",[VideogameController::class, "videogameIndex"])->name("videogame.index");

Route::get("/videogame/details/{videogame}", [VideogameController::class, "videogameDetails"])->name("videogame.details");

Route::get("/videogame/edit/{videogame}", [VideogameController::class, "videogameEdit"])->name("videogame.edit");

Route::put("/videogame/update/{videogame}", [VideogameController::class, "videogameUpdate"])->name("videogame.update");

Route::delete("/videogame/destroy/{videogame}", [VideogameController::class, "videogameDestroy"])->name("videogame.destroy");

Route::get('/user/profile', [ProfileController::class, "userProfilePage"])->name("user.profile");

Route::get('/user/profile/edit', [ProfileController::class, "userProfileEdit"])->name("user.profile.edit");

Route::put("/user/profile/update", [ProfileController::class, "userProfileUpdate"])->name("user.profile.update");
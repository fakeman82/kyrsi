<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', [CourseController::class,"index"]);


Route::post("/enroll", [ApplicationController::class,"create_application"]);

Route::get("/admin",[AdminController::class,"index"]);

Route::get("/application/{id_application}/confirm", [ApplicationController::class,"confirm"]);

Route::get("/create_course",[AdminController::class, "create_course"]);

Route::get("/reg",[UserController::class, "users"])->name("reg");
Route::post("/reg",[UserController::class, "users_valid"])->name("reg");

Route::get("/auth", [UserController::class, "usersAuth"])->name("auth");
Route::post("/auth", [UserController::class, "usersAuth_valid"])->name("auth");


Route::get('/logout', function(){
    Auth::logout();
    return redirect ('/');

})->name('logout');

Route::get ("/signout", [UserController::class, "signout"])->name("signout");


Route::get("/userpage/{id}", [UserController::class, "userpage"])->name("userpage");

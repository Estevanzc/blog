<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/", function() {
    return redirect()->route("index");
});
Route::get("/feed", [GeneralController::class, "index"])->name("index");
Route::get("/login", [UserController::class, "login"])->name("login");
Route::get("/logon", [UserController::class, "logon"])->name("logon");
Route::get("/logout", [UserController::class, "logout"])->name("logout");
Route::get("/popular", [GeneralController::class, "popular"])->name("popular");
Route::get("/explore", [GeneralController::class, "explore"])->name("explore");
Route::prefix("/user")->middleware("auth")->group(function() {
    Route::get("/profile/{user?}", [UserController::class, "index"])->name("profile");
    Route::get("/dark/{dark_mode?}", [UserController::class, "color_mode"])->name("dark_mode");
});
Route::prefix("/auth")->group(function() {
    Route::post("/login", [UserController::class, "auth_login"])->name("auth.login");
    Route::post("/logon", [UserController::class, "auth_logon"])->name("auth.logon");   
});

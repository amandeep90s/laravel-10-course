<?php

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
    return "Hello World";
});

Route::get("/hello", function () {
    return "Hello my friends";
})->name("hello");

Route::get("/hallo", function () {
    return redirect()->route("hello");
});

Route::get("/greet/{name}", function ($name) {
    return "Hello " . $name . "!";
});

Route::fallback(function () {
    return "Where are you going?";
});
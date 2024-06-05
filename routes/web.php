<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\OrderTrackController;
use App\Http\Controllers\Frontend\ShopCartController;
use App\Http\Controllers\Frontend\AccProfileController;
use App\Http\Controllers\Frontend\AccSigninController;
use App\Http\Controllers\Frontend\AcPassReController;
use App\Http\Controllers\Frontend\ContactsController;
use App\Http\Controllers\Frontend\LoginController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/about", [AboutController::class,"index"]);
Route::get("", [HomeController::class,"index"]);
Route::get("/home", [HomeController::class,"index"]);
Route::get("/order-tracking", [OrderTrackController::class,"index"]);
Route::get("/shop-cart", [ShopCartController::class,"index"]);

Route::get("/account-profile", [AccProfileController::class,"index"]);
Route::get("/account-signin", [AccSigninController::class,"index"]);

Route::post('/account-signin',[AccSigninController::class,'savedata']);
Route::get("/contacts", [ContactsController::class,"index"]);
Route::get("/account-password-recovery", [AcPassReController::class,"index"]);

Route::get("/login", [LoginController::class,"index"]);
Route::post("/login", [AccSigninController::class,"verify"]);



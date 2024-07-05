<?php

use App\Http\Controllers\frontend\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\OrderTrackController;
use App\Http\Controllers\Frontend\ShopCartController;
use App\Http\Controllers\Frontend\AccProfileController;
use App\Http\Controllers\Frontend\AccSigninController;
use App\Http\Controllers\Frontend\AcPassReController;
use App\Http\Controllers\frontend\BrandController;
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
Route::post("/login", [LoginController::class,"verify"]);

Route::get("/admin",[AdminController::class,"index"]);

Route::get('/admin/brands',[BrandController::class,"Index"]);
Route::get('/admin/brands/create',[BrandController::class,"CreateForm"]);
Route::post('/admin/brands/create',[BrandController::class,"Save"]);

Route::post("/admin/brands/update/{id}",[BrandController::class,"UpdateData"]);
Route::get("/admin/brands/update/{id}",[BrandController::class,"UpdateForm"]);
Route::get("/admin/brands/{id}/delete",[BrandController::class,"DeleteBrand"]);








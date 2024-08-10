<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\AuthController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class ,'homePage'])->name("home-page");
Route::get('/about', [HomeController::class ,'aboutPage'])->name("about-page");
Route::get('/courses', [HomeController::class ,'coursesPage'])->name("courses-page");
Route::get('/blog', [HomeController::class ,'blogPage'])->name("blog-page");

/* *************** User Auth routes *************** */
Route::post("/register" ,[AuthController::class , 'register'])->name("user-register");
Route::post("/login" ,[AuthController::class ,'login'])->name("user-login");
Route::middleware("auth")->group(function(){
    Route::post("logout", [AuthController::class, 'logout'])->name("user-logout");

});
/* *************** End  User Auth routes *************** */


Route::get("check" ,function(){
    $user = Auth::guard('web')->user() ;
    dd($user) ;
});
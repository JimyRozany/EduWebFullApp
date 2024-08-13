<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\AuthController;
use App\Mail\MyEmail;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

/* *************** verification Email routes *************** */


// Route::get("/vrify-email" ,function(){
//     $user = auth("web")->user() ;

// return view("vrify-email")->with("user" ,$user);
// })->name("vrify-email");


Route::post("/send-mail" ,function(Request $request){
//    Illuminate\Support\Facades\Mail::send(new App\Mail\MyEmail());
    $request->user()->sendEmailVerificationNotification();

    return redirect('/');
})->middleware("auth") ->name("send-email");


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');


// /* *************** END verification Email routes *************** */
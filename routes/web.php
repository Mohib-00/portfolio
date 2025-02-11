<?php

use App\Http\Controllers\AboutServiceController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserAuthcontroller;
use App\Http\Controllers\Websitecontroller;
use Illuminate\Support\Facades\Route;

//User Page    
Route::get('/', [UserAuthController::class, 'home']);
//About Page    
Route::get('/our-about', [UserAuthController::class, 'about']);
//portfolio Page    
Route::get('/portfolio', [UserAuthController::class, 'portfolio']);
//services Page    
Route::get('/services', [UserAuthController::class, 'services']);
//contact Page    
Route::get('/our_contact', [UserAuthController::class, 'contact']);
//all-members Page    
Route::get('/members', [UserAuthController::class, 'allmembers']);
//all-teams Page    
Route::get('/about/management', [UserAuthController::class, 'teams']);
//all-board Page    
Route::get('/about/board', [UserAuthController::class, 'board']);
//all-news Page    
Route::get('/all-news', [UserAuthController::class, 'news']);
//event Page    
Route::get('/our-event', [UserAuthController::class, 'event']);
//what_we_do Page    
Route::get('/what_we_do', [UserAuthController::class, 'wedo']);
//resources Page    
Route::get('/resources', [UserAuthController::class, 'resources']);
//to open register page
Route::get("register", [RegisterController::class, "register"]);
//to open login page
Route::get("login", [RegisterController::class, "login"]);

//register
Route::post("register",[UserAuthcontroller::class,"register"]);
//Login
Route::post("login",[UserAuthcontroller::class,"login"]);

Route::group([
    "middleware" => ["auth:sanctum"]
],function(){

//Logout
Route::post("logout",[UserAuthcontroller::class,"logout"]);
//to logout normal user
Route::post('logoutuser', [UserAuthcontroller::class, 'logoutuser']);
//to change password
Route::post("changePassword",[UserAuthcontroller::class,"changePassword"]);

});

Route::group(['middleware' => ['admin.auth'], 'prefix' => 'admin'], function() {
    Route::get("", [UserAuthcontroller::class, "admin"]);
 
});
 
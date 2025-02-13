<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserAuthcontroller;
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
//join_us Page    
Route::get('/join_us', [UserAuthController::class, 'joinus']);
//membership Page    
Route::get('/membership', [UserAuthController::class, 'memberships']);
//membership Page    
Route::get('/support_our_work', [UserAuthController::class, 'supportourwork']);
//join_our_team Page    
Route::get('/join_our_team', [UserAuthController::class, 'joinourteam']);
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
    Route::get("users", [UserAuthcontroller::class, "users"]);
    Route::get("messages", [MessageController::class, "message"]);
    Route::get("website-settings", [SettingsController::class, "websitesettings"]);
    Route::get("add-banner-details", [BannerController::class, "addbannerdetails"]);
});
 
Route::get('/download-prospectus', function () {
    return redirect(asset('pdf/membership_prospectus.pdf'));
});

Route::get('/download-membership', function () {
    return redirect(asset('pdf/membership_policy.pdf'));
});

Route::get('/download-application_form', function () {
    return redirect(asset('pdf/application_form.pdf'));
});

Route::get('/download-fee_schedule', function () {
    return redirect(asset('pdf/fee_schedule.pdf'));
});

//to get user data
Route::post('/get-user-data', [UserAuthcontroller::class, 'getUserData'])->name('user.getData');
//to edit user
Route::post('/users/{id}/edit', [UserAuthController::class, 'editUser']);
//to delet user
Route::post('/delete-user', [UserAuthcontroller::class, 'deleteUser'])->name('delete.user');
// to save customer message
Route::post('/submit-message', [MessageController::class, 'submitMessage'])->name('submit.message');
//to delet msg
Route::post('/delete-message', [MessageController::class, 'deletemessage'])->name('delete.message');
//to chng msg status
Route::post('/update-status', [MessageController::class, 'updateStatus']);
//to add settings
Route::post('/settings/store', [SettingsController::class, 'store'])->name('settings.store');
//to get settings
Route::get('/get-setting/{id}', [SettingsController::class, 'getSetting']);
//to edit settings
Route::post('/update-setting/{id}', [SettingsController::class, 'updateSetting'])->name('update.setting');
//to add banner data
Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
//to get banner data
Route::get('/banner/{id}', [BannerController::class, 'show'])->name('banner.show');
// Update banner data
Route::post('/banner/{id}', [BannerController::class, 'update'])->name('banner.update');
//to delet banner
Route::post('/delete-banner', [BannerController::class, 'deletebanner'])->name('delete.banner');
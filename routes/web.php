<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\HighlightController;
use App\Http\Controllers\InitiativeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OverviewController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Section1Controller;
use App\Http\Controllers\Section2Controller;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserAuthcontroller;
use App\Http\Controllers\WorkstreamController;
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
    Route::get("add-highlight", [HighlightController::class, "highlight"]);
    Route::get("add-overview", [OverviewController::class, "overview"]);
    Route::get("add-workstream", [WorkstreamController::class, "workstream"]);
    Route::get("add-network", [NetworkController::class, "network"]);
    Route::get("add-Working_Group_Participation", [MemberController::class, "member"]);
    Route::get("add-members", [MembersController::class, "addmembers"]);
    Route::get("add-team", [TeamController::class, "team"]);
    Route::get("add-news", [NewsController::class, "khabar"]);
    Route::get("add-about", [AboutController::class, "about"]);
    Route::get("add-initiative", [InitiativeController::class, "initiative"]);
    Route::get("add-section-1", [Section1Controller::class, "section1"]);
    Route::get("add-section-2", [Section2Controller::class, "section2"]);
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
//to add highlight data
Route::post('/highlight/store', [HighlightController::class, 'store'])->name('highlight.store');
//to get highlight data
Route::get('/highlight/{id}', [HighlightController::class, 'show'])->name('highlight.show');
// Update highlight data
Route::post('/highlight/{id}', [HighlightController::class, 'update'])->name('highlight.update');
//to delet highlight
Route::post('/delete-highlight', [HighlightController::class, 'deletehighlight'])->name('delete.highlight');
//to add overview data
Route::post('/overview/store', [OverviewController::class, 'store'])->name('overview.store');
//to get overview data
Route::get('/overview/{id}', [OverviewController::class, 'show'])->name('overview.show');
// Update overview data
Route::post('/overview/{id}', [OverviewController::class, 'update'])->name('overview.update');
//to delet overview
Route::post('/delete-overview', [OverviewController::class, 'deleteoverview'])->name('delete.overview');
//to add workstream data
Route::post('/workstream/store', [WorkstreamController::class, 'store'])->name('workstream.store');
//to get workstream data
Route::get('/workstream/{id}', [WorkstreamController::class, 'show'])->name('workstream.show');
// Update workstream data
Route::post('/workstream/{id}', [WorkstreamController::class, 'update'])->name('workstream.update');
//to delet workstream
Route::post('/delete-workstream', [WorkstreamController::class, 'deleteworkstream'])->name('delete.workstream');
//to add network data
Route::post('/network/store', [NetworkController::class, 'store'])->name('network.store');
//to get network data
Route::get('/network/{id}', [NetworkController::class, 'show'])->name('network.show');
// Update network data
Route::post('/network/{id}', [NetworkController::class, 'update'])->name('network.update');
//to delet network
Route::post('/delete-network', [NetworkController::class, 'deletenetwork'])->name('delete.network');
//to add member data
Route::post('/member/store', [MemberController::class, 'store'])->name('member.store');
//to get member data
Route::get('/member/{id}', [MemberController::class, 'show'])->name('member.show');
// Update member data
Route::post('/member/{id}', [MemberController::class, 'update'])->name('member.update');
//to delet member
Route::post('/delete-member', [MemberController::class, 'deletemember'])->name('delete.member');
//to add addmember data
Route::post('/addmember/store', [MembersController::class, 'store'])->name('addmember.store');
//to get addmember data
Route::get('/addmember/{id}', [MembersController::class, 'show'])->name('addmember.show');
// Update addmember data
Route::post('/addmember/{id}', [MembersController::class, 'update'])->name('addmember.update');
//to delet addmember
Route::post('/delete-addmember', [MembersController::class, 'deleteaddmember'])->name('delete.addmember');
//to add team data
Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
//to get team data
Route::get('/team/{id}', [TeamController::class, 'show'])->name('team.show');
// Update team data
Route::post('/team/{id}', [TeamController::class, 'update'])->name('team.update');
//to delet team
Route::post('/delete-team', [TeamController::class, 'deleteteam'])->name('delete.team');
//to add khabar data
Route::post('/khabar/store', [NewsController::class, 'store'])->name('khabar.store');
//to get khabar data
Route::get('/khabar/{id}', [NewsController::class, 'show'])->name('khabar.show');
// Update khabar data
Route::post('/khabar/{id}', [NewsController::class, 'update'])->name('khabar.update');
//to delet khabar
Route::post('/delete-khabar', [NewsController::class, 'deletekhabar'])->name('delete.khabar');
//to add about data
Route::post('/about/store', [AboutController::class, 'store'])->name('about.store');
//to get about data
Route::get('/about/{id}', [AboutController::class, 'show'])->name('about.show');
// Update about data
Route::post('/about/{id}', [AboutController::class, 'update'])->name('about.update');
//to delet about
Route::post('/delete-about', [AboutController::class, 'deleteabout'])->name('delete.about');
//to add initiative data
Route::post('/initiative/store', [InitiativeController::class, 'store'])->name('initiative.store');
//to get initiative data
Route::get('/initiative/{id}', [InitiativeController::class, 'show'])->name('initiative.show');
// Update initiative data
Route::post('/initiative/{id}', [InitiativeController::class, 'update'])->name('initiative.update');
//to delet initiative
Route::post('/delete-initiative', [InitiativeController::class, 'deleteinitiative'])->name('delete.initiative');
//to add section1 data
Route::post('/section1/store', [Section1Controller::class, 'store'])->name('section1.store');
//to get section1 data
Route::get('/section1/{id}', [Section1Controller::class, 'show'])->name('section1.show');
// Update section1 data
Route::post('/section1/{id}', [Section1Controller::class, 'update'])->name('section1.update');
//to delet section1
Route::post('/delete-section1', [Section1Controller::class, 'deletesection1'])->name('delete.section1');
//to add section2 data
Route::post('/section2/store', [Section2Controller::class, 'store'])->name('section2.store');
//to get section2 data
Route::get('/section2/{id}', [Section2Controller::class, 'show'])->name('section2.show');
// Update section2 data
Route::post('/section2/{id}', [Section2Controller::class, 'update'])->name('section2.update');
//to delet section2
Route::post('/delete-section2', [Section2Controller::class, 'deletesection2'])->name('delete.section2');
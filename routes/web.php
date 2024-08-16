<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\BudgetController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\MembersController;
use App\Http\Controllers\admin\MessagesController;
use App\Http\Controllers\admin\StaffController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Foundation\Exceptions\Handler;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
 


use App\Http\Controllers\Frontend\HomeController;
 use App\Http\Controllers\Frontend\AboutController;
 use App\Http\Controllers\Frontend\CareController;
 use App\Http\Controllers\Frontend\ContactController;
 use App\Http\Controllers\Frontend\DonationController;
 use App\Http\Controllers\Frontend\UserEventController;
 use App\Http\Controllers\Frontend\FoodController;
 use App\Http\Controllers\Frontend\ShelterController;

Route::get('/', function () {
    return view('welcome');
});
// routes/web.php
Route::group(['middleware'=>'guest'],function(){

    Route::get('/account/login', [LoginController::class, 'index'])->name('account.login');
Route::get('/account/register', [LoginController::class, 'register'])->name('account.register');
Route::post('/account/process-register', [LoginController::class, 'processregister'])->name('account.processregister');
Route::post('/account/authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin.login');

Route::post('/admin/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');


});



Route::group(['middleware'=>'auth'],function(){
    Route::get('/account/logout', [LoginController::class, 'logout'])->name('account.logout');
    Route::get('/account/dashboard', [dashboardController::class, 'index'])->name('account.dashboard');
    Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/Budget', [BudgetController::class, 'index'])->name('admin.budget');
    

    Route::get('/admin/AddMembers', [MembersController::class, 'index'])->name('admin.members');
    Route::post('/admin/AddMembers', [MembersController::class, 'AddMember'])->name('admin.Addmembers');
    Route::get('/admin/Addmembers/{id}/edit', [MembersController::class, 'editMember'])->name('admin.editMember');
    Route::post('/admin/Addmembers/{id}', [MembersController::class, 'updateMember'])->name('admin.updateMember');
    Route::delete('/admin/Addmembers/{id}', [MembersController::class, 'deleteMember'])->name('admin.deleteMember');


    Route::get('/admin/Messages', [MessagesController::class, 'index'])->name('admin.message');





    Route::get('/admin/AddStaff', [StaffController::class, 'index'])->name('admin.Staff');
    Route::POST('/admin/AddStaff', [StaffController::class, 'Addstaff'])->name('admin.AddStaff');
    Route::get('/admin/AddStaff/{id}/edit', [StaffController::class, 'editStaff'])->name('admin.editStaff');
    Route::post('/admin/AddStaff/{id}', [StaffController::class, 'updateStaff'])->name('admin.updateStaff');
    Route::delete('/admin/AddStaff/{id}', [StaffController::class, 'deleteStaff'])->name('admin.deleteStaff');

   
Route::get("/account/about",[AboutController::class,"index"])->name('account.about');

Route::get("/account/shelter",[ShelterController::class,"index"])->name('account.shelter');

Route::get("/account/care",[CareController::class,"index"])->name('account.care');
Route::get("/account/food",[FoodController::class,"index"])->name('account.food');
Route::get("/account/donation",[DonationController::class,"index"])->name('account.donation');



Route::get("/account/contact",[ContactController::class,"index"])->name('account.contact');
Route::POST("/account/contact",[ContactController::class,"AddContact"])->name('account.Addcontact');

Route::get('/admin/Messages', [MessagesController::class, 'index'])->name('admin.message');
Route::get('/admin/Messages', [MessagesController::class, 'get'])->name('admin.message');
Route::get('admin/delete/{contact_id}', [MessagesController::class, 'delete'])->name('admin.messageDelete');
Route::get('admin/messages/{contact_id}/edit', [MessagesController::class, 'edit'])->name('admin.messageEdit');
Route::put('admin/messages/{contact_id}', [MessagesController::class, 'update'])->name('admin.messageUpdate');


Route::get('/admin/Event', [EventController::class, 'index'])->name('admin.event');
Route::post('/admin/Event', [EventController::class, 'addEvent'])->name('admin.events');
Route::get('admin/Event', [EventController::class, 'get'])->name('admin.event');
Route::delete('/admin/events/{event_id}', [EventController::class, 'delete'])->name('admin.deleteEvent');
Route::get('/admin/events/{event_id}/edit', [EventController::class, 'edit'])->name('admin.editEvent');
Route::put('/admin/events/{event_id}', [EventController::class, 'update'])->name('admin.updateEvent');





Route::get("/account/event",[UserEventController::class,"index"])->name('account.event');
Route::get("/account/event",[UserEventController::class,"get"])->name('account.event');



//query
Route::get('/admin/dashboard', [AdminDashboardController::class, 'count'])->name('admin.dashboard');



});











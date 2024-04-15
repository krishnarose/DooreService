<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/email/verify', [App\Http\Controllers\Email\EmailVerificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [App\Http\Controllers\Email\EmailVerificationController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [App\Http\Controllers\Email\EmailVerificationController::class, 'resend'])->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




//user route
Route::prefix('user')->middleware(['auth', 'email-verify', 'user-access:user'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\client\DashboardController::class, 'index'])->name('user.index');
});


// admin route
Route::prefix('admin')->middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'adminDashboard'])->name('admin.dashboard');

    Route::get('/categories',[App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.categories');
    Route::get('/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/trash',[App\Http\Controllers\Admin\CategoryController::class, 'trash'])->name('trash.index');
    Route::get('/trash/restore/{id}',[App\Http\Controllers\Admin\CategoryController::class, 'restore'])->name('trash.restore');
    Route::get('/trash/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('trash.delete');

    Route::get('/featured',[App\Http\Controllers\Admin\featuredController::class, 'index'])->name('featured.index');
    Route::post('/featured/categories/store', [App\Http\Controllers\Admin\featuredController::class, 'store_featured_category'])->name('featured.store');
    Route::get('/featured/categories/delete/{id}', [App\Http\Controllers\Admin\featuredController::class, 'remove_featured_courses'])->name('featured.removed');





});


// super admin route
Route::middleware(['auth', 'user-access:super-admin'])->group(function () {
    Route::get('/super-admin/dashboard', [App\Http\Controllers\HomeController::class, 'superadminDashboard'])->name('superadmin.dashboard');
});

<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


use App\Http\Controllers\Admin\CategoriesController;
use App\Models\SellersControl;
use App\Models\Categories;

use App\Models\Admin;
use App\Http\Controllers\Admin\SellersController;
use App\Http\Controllers\Admin\ClientsController;



Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function(){
        Route::view('/login','back.pages.admin.auth.login')->name('login');
        Route::post('/login_handler',[AdminController::class,'loginHandler'])->name('login_handler');
        Route::view('/forgot-password','back.pages.admin.auth.forgot-password')->name('forgot-password');
        Route::post('/send-password-reset-link',[AdminController::class,'sendPasswordResetLink'])->name('send-password-reset-link');
        Route::get('/password/reset/{token}',[AdminController::class,'resetPassword'])->name('reset-password');
        Route::post('/reset-password-handler',[AdminController::class,'resetPasswordHandler'])->name('reset-password-handler');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','back.pages.admin.home')->name('home');
        Route::post('/logout_handler',[AdminController::class,'logoutHandler'])->name('logout_handler');
        Route::get('/profile',[AdminController::class,'profileView'])->name('profile');
        Route::post('/change-profile-picture',[AdminController::class,'changeProfilePicture'])->name('change-profile-picture');
        Route::view('/settings','back.pages.settings')->name('settings');
        Route::post('/change-logo',[AdminController::class,'changeLogo'])->name('change-logo');
        Route::post('/change-favicon',[AdminController::class,'changeFavicon'])->name('change-favicon');

        // CATEGORIES MANAGEMENT
        Route::get('/manage-categories', [CategoriesController::class, 'catList'])->name('manage-categories');

        Route::prefix('manage-categories')->name('manage-categories.')->group(function() {
            Route::controller(CategoriesController::class)->group(function() {
                Route::get('/add-category','addCategory')->name('add-category');
                Route::post('/store-category','storeCategory')->name('store-category');
                Route::get('/edit-category','editCategory')->name('edit-category');
                Route::post('/update-category','updateCategory')->name('update-category');
            });
        });


        //Sellers Management
        Route::get('/manage-sellers', [SellersController::class, 'showPendingSellers'])->name('manage-sellers');

        Route::prefix('manage-sellers')->name('manage-sellers.')->group(function() {
            Route::controller(SellersController::class)->group(function() {
                Route::patch('/update-seller-status/{id}', 'updateSellerStatus')->name('update-seller-status');
            });
        });

         // Clients Management
        Route::get('/manage-clients', [ClientsController::class, 'showAllClients'])->name('manage-clients');
    });

});

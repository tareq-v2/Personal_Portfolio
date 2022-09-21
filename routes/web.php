<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorSettingController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ExpertInController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitleSettingController;
use App\Models\Education;
use App\Models\ExpertIn;
use App\Models\Portfolio;
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
// Frontend controller 
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::post('/message', [MessageController::class, 'saveMessage'])->name('message.store');
 

// Admin route 
Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function(){

    // Admin Controller 
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard'); 
    Route::get('/list-user', [AdminController::class, 'indexUser'])->name('user.index');
    Route::get('/create-user', [AdminController::class, 'createUser'])->name('user.create');
    Route::post('/store-user', [AdminController::class, 'storeUser'])->name('user.store');
    Route::post('/delete-user', [AdminController::class, 'deleteUser'])->name('user.destroy');

    // Banner Controller 
    Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');
    Route::post('/banner-update', [BannerController::class, 'update'])->name('banner.update');

    // Expert in Controler 
    Route::resource('expertin', ExpertInController::class);

    // About Controller 
    Route::get('/about', [AboutController::class, 'index'])->name('abouts.index');
    Route::post('/about-update', [AboutController::class, 'update'])->name('abouts.update');

    // Skills Controller 
    Route::resource('skills', SkillController::class);

    // Experience Controller 
    Route::resource('experiences', ExperienceController::class);

    // Education Controller 
    Route::resource('educations', EducationController::class);

    // Service Controller 
    Route::resource('services', ServiceController::class);

    // Category Controller 
    Route::resource('categories', CategoryController::class);

    // Category Controller 
    Route::resource('portfolios', PortfolioController::class);

    // Testimonial Controller 
    Route::resource('testimonials', TestimonialController::class);
    
     // message controller 
     Route::get('/messages', [MessageController::class, 'messsageShow'])->name('message.index');
     Route::post('/delete-message', [MessageController::class, 'deleteMessage'])->name('message.destroy');

    // TitleSetting Controller
    Route::get('/title-setting', [TitleSettingController::class, 'index'])->name('title.setting');
    Route::post('/title-update', [TitleSettingController::class, 'update'])->name('title.update');

    // generalSetting Controller 
    Route::get('/general-setting', [SettingController::class, 'index'])->name('setting.index');
    Route::post('/setting-update', [SettingController::class, 'update'])->name('setting.update');

    // Color Setting Controller 
    Route::get('/color-setting', [ColorSettingController::class, 'index'])->name('colors.index');
    Route::post('/color-setting-update', [ColorSettingController::class, 'update'])->name('colors.update');

    // Profile Controller 
    Route::get('profile', [ProfileController::class, 'Profile'])->name('user.profile');
    Route::post('/profile-update', [ProfileController::class, 'updateProfile'])->name('profile.change');
    Route::post('/profile-password', [ProfileController::class, 'updatePassword'])->name('profile.password');

});


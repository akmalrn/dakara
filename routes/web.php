<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/welcome', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){
    Route::get('/admin-dashboard', [App\Http\Controllers\admin\AdminController::class, 'index'])->name('admin.dashboard');

    //configuration
    Route::get('/admin-dashboard/configuration', [App\Http\Controllers\admin\ConfigurationController::class, 'index'])->name('configuration.index');
    Route::post('/admin-dashboard/configuration', [App\Http\Controllers\admin\ConfigurationController::class, 'storeOrUpdate'])->name('configuration.store');

    //about us
    Route::get('/admin-dashboard/about-us', [App\Http\Controllers\admin\AboutUsController::class, 'index'])->name('about-us.index');
    Route::post('/admin-dashboard/about-us', [App\Http\Controllers\admin\AboutUsController::class, 'storeOrUpdate'])->name('about-us.store');

    //why us
    Route::get('/admin-dashboard/why-us', [App\Http\Controllers\admin\WhyUsController::class, 'index'])->name('why-us.index');
    Route::post('/admin-dashboard/why-us', [App\Http\Controllers\admin\WhyUsController::class, 'storeOrUpdate'])->name('why-us.store');

    //slider
    Route::resource('/admin-dashboard/slider', App\Http\Controllers\admin\SliderController::class);

    //superiority
    Route::resource('/admin-dashboard/superiority', App\Http\Controllers\admin\SuperiorityController::class);

    //service
    Route::resource('/admin-dashboard/services', App\Http\Controllers\admin\ServiceController::class);
    //category
    Route::resource('/admin-dashboard/categories-services', App\Http\Controllers\admin\CategoryServiceController::class);

    //gallery
    Route::resource('/admin-dashboard/gallery', App\Http\Controllers\admin\GalleryController::class);

    //partner
    Route::resource('/admin-dashboard/partner', App\Http\Controllers\admin\PartnerController::class);

    //blog
    Route::resource('/admin-dashboard/blogs', App\Http\Controllers\admin\BlogController::class);
    //category
    Route::resource('/admin-dashboard/categories-blogs', App\Http\Controllers\admin\CategoryBlogController::class);

    //testimonial
    Route::resource('/admin-dashboard/testimonials-clients', App\Http\Controllers\admin\TestimonialClientController::class);

    //teams
    Route::resource('/admin-dashboard/teams', App\Http\Controllers\admin\TeamController::class);
});

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;

use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutSectionController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about.index');
});

Route::get('/our-courses', function () {
    return view('courses.index');
});

Route::get('/mobigirlz', function () {
    return view('mobigirlz.index');
});

Route::get('/how-to-apply', function () {
    return view('applications.howto');
});

Route::get('/online-application', function () {
    return view('applications.apply');
});

Route::get('/tuition-fees', function () {
    return view('applications.fees');
});

Route::get('/bootcamps', function () {
    return view('bootcamps.index');
});

Route::get('/blog', function () {
    return view('blog.index');
});

Route::get('/bpo', function () {
    return view('bpo.index');
});

Route::get('/contact-us', function () {
    return view('contact.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('sliders', SliderController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Settings routes
    Route::get('/settings', [SettingsController::class, 'edit'])->name('settings.edit');
    Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update');
    Route::get('/admin/about', [AboutSectionController::class, 'index'])->name('about.edit');
    Route::put('/admin/about/{about}', [AboutSectionController::class, 'update'])->name('about.update');



});











// Ensure the following route is removed to avoid conflicts
// Route::get('/settings', function () {
//     return view('backend.settings');
// })->middleware(['auth', 'verified'])->name('settings');

require __DIR__.'/auth.php';

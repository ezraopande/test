<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;

use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\CounterSectionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\VideoController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about.index');
});

// Route::get('/our-courses', function () {
//     return view('courses.index');
// });

Route::get('/our-courses', function () {
    return view('courses.index');
})->name('courses.index');

// Route for displaying course details by slug
Route::get('/our-courses/{slug}', function ($slug) {
    return view('courses.details', compact('slug')); // Pass slug to the details view
})->name('courses.show');


Route::get('/course-details', function () {
    return view('courses.details');
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


    Route::get('admin/counter', [CounterSectionController::class, 'index'])->name('counter.index');
    Route::put('admin/counter', [CounterSectionController::class, 'update'])->name('counter.update');



    Route::resource('courses', CourseController::class);





});



Route::resource('videos', VideoController::class);














// Ensure the following route is removed to avoid conflicts
// Route::get('/settings', function () {
//     return view('backend.settings');
// })->middleware(['auth', 'verified'])->name('settings');

require __DIR__.'/auth.php';

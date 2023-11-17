<?php

use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/web-development', function () {
    return view('web_development');
})->name('web_development');

Route::get('/app-development', function () {
    return view('app_development');
})->name('app_development');

Route::get('/enterprise-software-development', function () {
    return view('enterprise_software_development');
})->name('enterprise_software_development');

Route::get('/graphics-design', function () {
    return view('graphics_design');
})->name('graphics_design');

Route::get('/digital-marketing', function () {
    return view('digital_marketing');
})->name('digital_marketing');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/home', [CourseContentController::class, 'home'])->name('home');

// Route::get('/about', [CourseContentController::class, 'about'])->name('about');

// Route::get('/contact', [CourseContentController::class, 'about'])->name('contact');

// Route::get('/contact', [CourseContentController::class, 'about'])->name('contact');

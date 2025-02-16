<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CourseController;

use App\Http\Controllers\PersonalBlogController;





Route::get('/', function () {
    return view('new');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Route::post('/courses/store', [CourseController::class, 'store'])->name('courses.store');
    //Route::get('/blog-details', [BlogController::class, 'show'])->name('blog.details');
    //Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [CourseController::class, 'index'])->name('home');
   
    Route::resource('courses',CourseController::class);

    //For home page
    Route::get('/my-blog', [PersonalBlogController::class, 'personalBlog'])->name('personal.blog');

    Route::get('/personal-blog', [CourseController::class, 'personalBlog'])->name('personal_blog');
    
});

require __DIR__.'/auth.php';

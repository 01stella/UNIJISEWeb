<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactSubmissionController;
use App\Http\Controllers\ResearchController;
use Illuminate\Support\Facades\Route;

// Main page routes are now controller-based (MVC).
Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/home/about', [AboutController::class, 'index']);

Route::get('/home/curriculum', [CurriculumController::class, 'index']);

Route::get('/home/academic', [AcademicController::class, 'index']);

Route::get('/home/academic/downloads/{file}', [AcademicController::class, 'download'])
	->name('academic.download');

Route::get('/home/research', [ResearchController::class, 'index']);

Route::get('/home/news', [NewsController::class, 'index']);

// Contact form endpoint for footer modal submissions.
Route::post('/contact-submissions', [ContactSubmissionController::class, 'store'])
	->name('contact-submissions.store');

// Legacy paths kept so old URLs continue to work.
Route::redirect('/about', '/home/about');
Route::redirect('/curriculum', '/home/curriculum');
Route::redirect('/academic', '/home/academic');
Route::redirect('/research', '/home/research');
Route::redirect('/news', '/home/news');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CentreController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CorporateController;

Route::get('/', [HomeController::class, 'home'])->name('page.home');
Route::get('/course/{id}', [CourseController::class, 'index'])->name('page.course');
Route::get('/about', [AboutController::class, 'index'])->name('page.about');
Route::get('/corporate', [CorporateController::class, 'index'])->name('page.corporate');
Route::get('/workshop', [WorkshopController::class, 'index'])->name('page.workshop');
Route::get('/center/{centerId}', [CentreController::class, 'index'])->name('page.centre');
Route::get('/student-corner', [StudentController::class, 'index'])->name('page.studentCorner');
Route::get('/blogs', [BlogController::class, 'index'])->name('page.blogs');
Route::get('/blog/{slug}', [BlogController::class, 'blogDetails'])->name('page.blog');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('page.contactUs');

Route::post('/contact-form-submit', action: [FormController::class, 'contactFormStore'])->name('contact.form.submit');
Route::post('/counseling-form-submit', [FormController::class, 'counselingFormStore'])->name('counseling.form.submit');
Route::post('/consultation-form-submit', [FormController::class, 'consultationFormStore'])->name('consultation.form.submit');
Route::post('/career-counselling-form-submit', [FormController::class, 'careerCounsFormStore'])->name('career.counselling.form.submit');
Route::post('/suggestion-form-submit', [FormController::class, 'suggestionFormStore'])->name('suggestions.form.submit');


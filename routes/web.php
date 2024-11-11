<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\SkillSectionController;
use App\Http\Controllers\PortfolioSectionController;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('/service', function () {
    return view('frontend.service');
})->name('service');
Route::get('/portfolio', function () {
    return view('frontend.portfolio');
})->name('portfolio');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');


Route::get('/admin/home', function () {
    return view('backend.home');
})->name('admin.home');


Route::resource('hero-section', HeroSectionController::class);
Route::resource('about-section', AboutSectionController::class);
Route::resource('skill-section', SkillSectionController::class);
Route::resource('education-section', EducationController::class);
Route::resource('experience-section', ExperienceController::class);
Route::resource('service-section', ServiceController::class);
Route::resource('portfolio-section', PortfolioSectionController::class);
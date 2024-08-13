<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\ContactUs;
use App\Livewire\Error;
use App\Livewire\Faqs;
use App\Livewire\Home;
use App\Livewire\PrivacyPolicy;
use Illuminate\Support\Facades\Route;



Route::get('/', Home::class)->name('home');
Route::get('/Faqs', Faqs::class)->name('FAQs');
Route::get('/contact-us', ContactUs::class)->name('contact-us');
Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');
Route::get('/error', Error::class)->name('4o4-page');


Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
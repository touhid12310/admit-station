<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Frontend\BecomeAAgent;
use App\Livewire\Frontend\ContactUs;
use App\Livewire\Error;
use App\Livewire\Frontend\Faqs;
use App\Livewire\Frontend\About;
use App\Livewire\Frontend\Home;
use  App\Livewire\Frontend\PrivacyPolicy;
use App\Livewire\Dashboard\StudentDashboard;
use App\Livewire\Dashboard\StudentProfile;
use App\Livewire\Dashboard\StudentReviews;
use App\Livewire\Dashboard\StudentSettingProfile;
use  App\Livewire\Frontend\UniversityList;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/about', About::class)->name('about');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/Faqs', Faqs::class)->name('FAQs');
Route::get('/contact-us', ContactUs::class)->name('contact-us');
Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');
Route::get('/error', Error::class)->name('4o4-page');
Route::get('/university-list', UniversityList::class)->name('university-list');
Route::get('/become-a-agent', BecomeAAgent::class)->name('become-a-agent');


Route::middleware('auth')->group(function () {
    Route::get('/logout', [Login::class, 'logout'])->name('logout');
    Route::get('/student-dashboard', StudentDashboard::class)->name('student-dashboard');
    Route::get('/student-profile', StudentProfile::class)->name('student-profile');
    Route::get('/student-reviews', StudentReviews::class)->name('student-reviews');
    Route::get('/student-setting-profile', StudentSettingProfile::class)->name('student-setting-profile');
});

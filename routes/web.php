<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\BecomeAAgent;
use App\Livewire\ContactUs;
use App\Livewire\Error;
use App\Livewire\Faqs;
use App\Livewire\Home;
use App\Livewire\PrivacyPolicy;
use App\Livewire\StudentDashboard;
use App\Livewire\StudentProfile;
use App\Livewire\StudentReviews;
use App\Livewire\StudentSettingProfile;
use App\Livewire\UniversityList;
use Illuminate\Support\Facades\Route;

/* Route::get('/login', function(){
    return view('login');
})->name('login'); */

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
    Route::get('/', Home::class)->name('home');
    Route::get('/Faqs', Faqs::class)->name('FAQs');
    Route::get('/contact-us', ContactUs::class)->name('contact-us');
    Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');
    Route::get('/error', Error::class)->name('4o4-page');

    #ApllyNowButton
    Route::get('/university-list', UniversityList::class)->name('university-list');
    Route::get('/become-a-agent', BecomeAAgent::class)->name('become-a-agent');
});


Route::middleware('auth')->group(function () {
    Route::get('/logout', [Login::class, 'logout'])->name('logout');
    Route::get('/student-dashboard', StudentDashboard::class)->name('student-dashboard');
    Route::get('/student-profile', StudentProfile::class)->name('student-profile');
    Route::get('/student-reviews', StudentReviews::class)->name('student-reviews');
    Route::get('/student-setting-profile', StudentSettingProfile::class)->name('student-setting-profile');
});





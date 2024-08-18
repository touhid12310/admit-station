<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Frontend\BecomeAAgent;
use App\Livewire\Frontend\ContactUs;
use App\Livewire\Error;
use App\Livewire\Frontend\Faqs;
use App\Livewire\Frontend\About;
use App\Livewire\Frontend\BlogDetails;
use App\Livewire\Frontend\BlogList;
use App\Livewire\Frontend\Home;
use  App\Livewire\Frontend\PrivacyPolicy;
use App\Livewire\Student\StudentDashboard;
use App\Livewire\Student\StudentProfile;
use App\Livewire\Student\StudentReviews;
use App\Livewire\Student\StudentSettingProfile;
use  App\Livewire\Frontend\UniversityList;
use App\Livewire\Frontend\UniversityListDetails;
use App\Livewire\Student\StudentOrder;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/about', About::class)->name('about');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/Faqs', Faqs::class)->name('FAQs');
Route::get('/contact-us', ContactUs::class)->name('contact-us');
Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');
Route::get('/error', Error::class)->name('4o4-page');
Route::get('/enroll', UniversityList::class)->name('university-list');
Route::get('/become-a-agent', BecomeAAgent::class)->name('become-a-agent');
Route::get('/university-list-details', UniversityListDetails::class)->name('university-list-details');
Route::get('/blog-list', BlogList::class)->name('blog-list');
Route::get('/blog-list-details', BlogDetails::class)->name('blog-list-details');



Route::middleware('auth')->group(function () {
    
    Route::get('/logout', [Login::class, 'logout'])->name('logout');
    Route::prefix('student')->group(function () {
        Route::get('/dashboard', StudentDashboard::class)->name('student-dashboard');
        Route::get('/profile', StudentProfile::class)->name('student-profile');
        Route::get('/order', StudentOrder::class)->name('student-order');
        Route::get('/reviews', StudentReviews::class)->name('student-reviews');
        Route::get('/setting-profile', StudentSettingProfile::class)->name('student-setting-profile');
    });
});

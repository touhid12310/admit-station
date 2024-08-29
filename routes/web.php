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
use App\Livewire\Frontend\InstituteDetails;
use App\Livewire\Frontend\InstituteList;
use App\Livewire\Frontend\PrivacyPolicy;
use App\Livewire\Institute\InstituteDashboard;
use App\Livewire\Institute\InstitutePasswordSetting;
use App\Livewire\Institute\InstituteProfile;
use App\Livewire\Institute\InstituteProfileSetting;
use App\Livewire\Institute\InstituteSocialAccountSetting;
use App\Livewire\Student\StudentDashboard;
use App\Livewire\Student\StudentProfile;
use App\Livewire\Student\StudentReviews;
use App\Livewire\Student\StudentSettingProfile;
use App\Livewire\Student\StudentApplyFor;
use App\Livewire\Student\StudentPasswordSetting;
use App\Livewire\Student\StudentSocialProfileSetting;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/about', About::class)->name('about');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/Faqs', Faqs::class)->name('FAQs');
Route::get('/contact-us', ContactUs::class)->name('contact-us');
Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');
Route::get('/404', Error::class)->name('4o4-page');
Route::get('/become-a-agent', BecomeAAgent::class)->name('become-a-agent');
Route::get('/institute-list', InstituteList::class)->name('list-institute');
Route::get('/institute-details/{slug}', InstituteDetails::class)->name('details-institute');
Route::get('/blog-list', BlogList::class)->name('blog-list');
Route::get('/blog-details', BlogDetails::class)->name('blog-details');

Route::get('/logout', [Login::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::prefix('student')->group(function () {
        Route::get('/dashboard', StudentDashboard::class)->name('student.dashboard');
        Route::get('/profile', StudentProfile::class)->name('student-profile');
        Route::get('/order', StudentApplyFor::class)->name('student-order');
        Route::get('/reviews', StudentReviews::class)->name('student-reviews');
        Route::get('/setting-profile', StudentSettingProfile::class)->name('student-setting-profile');
        Route::get('/setting-password', StudentPasswordSetting::class)->name('student-password-setting');
        Route::get('/setting-social-profile', StudentSocialProfileSetting::class)->name('student-social-profile-setting');
    });
});

Route::middleware('auth:institute')->group(function () {
    Route::prefix('institute')->group(function () {
        Route::get('/dashboard', InstituteDashboard::class)->name('institute.dashboard');
        Route::get('/profile', InstituteProfile::class)->name('institute.profile');
        Route::get('/profile-setting', InstituteProfileSetting::class)->name('institute.profile-setting');
        Route::get('/password-setting', InstitutePasswordSetting::class)->name('institute.password-setting');
        Route::get('/social-account-setting', InstituteSocialAccountSetting::class)->name('institute.social-account-setting');
    });
});

// Route::fallback(function(){
//     return redirect()->route('4o4-page');
// });

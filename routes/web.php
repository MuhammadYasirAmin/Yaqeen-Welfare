<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontend\HomePage;
use App\Http\Livewire\Frontend\AboutUs;
use App\Http\Livewire\Frontend\ContactUs;
use App\Http\Livewire\Frontend\AllDonations;
use App\Http\Livewire\Frontend\DontaionsDetails;
use App\Http\Livewire\Frontend\AllBlog;
use App\Http\Livewire\Frontend\BlogDetails;
use App\Http\Livewire\Frontend\AllEvents;
use App\Http\Livewire\Frontend\EventsDetails;
use App\Http\Livewire\Frontend\FAQ;
use App\Http\Livewire\Frontend\PrivacyPolicy;
use App\Http\Livewire\Frontend\TermsConditions;
use App\Http\Livewire\Frontend\AllTeam;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomePage::class, )->name('frontend.index');
Route::get('/About-Us', AboutUs::class, )->name('frontend.aboutus');
Route::get('/Contact-Us', ContactUs::class, )->name('frontend.contactus');
Route::get('/All-Dontaions-List', AllDonations::class, )->name('frontend.alldonations');
Route::get('/All-Dontaions-List/Donations-Details', DontaionsDetails::class, )->name('frontend.donationdetails');
Route::get('/All-Blogs-List', AllBlog::class, )->name('frontend.allblogs');
Route::get('/All-Blogs-List/Blog-Details', BlogDetails::class, )->name('frontend.blogdetails');
Route::get('/All-Events-List', AllEvents::class, )->name('frontend.allevents');
Route::get('/All-Events-List/Event-Details', EventsDetails::class, )->name('frontend.eventdetails');
Route::get('/Frequently-Asked-Questions', FAQ::class, )->name('frontend.faq');
Route::get('/Privacy-Policy', PrivacyPolicy::class, )->name('frontend.policies');
Route::get('/Terms-Conditions', TermsConditions::class, )->name('frontend.termsconditions');
Route::get('/Our-Team-Members', AllTeam::class, )->name('frontend.teams');

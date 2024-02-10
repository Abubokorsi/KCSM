<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\BookingsController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DestinationsController;
use App\Http\Controllers\Admin\GuideController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PackagesController;
use App\Http\Controllers\Admin\TopbarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDashboardController;
use App\Models\Destination;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Helper\DescriptorHelper;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend Route
Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/error', [ErrorController::class, 'error']);
Route::get('/booking', [BookingController::class, 'booking']);
Route::get('/contact', [ContactsController::class, 'contact']);
Route::get('/destination', [DestinationController::class, 'destination']);
Route::get('/package', [PackageController::class, 'package']);
Route::get('/service', [ServiceController::class, 'service']);
Route::get('/team', [TeamController::class, 'team']);
Route::get('/testimonial', [TestimonialController::class, 'testimonial']);

Route::post('booking.stores', [BookingController::class, 'stores'])->name('booking.stores');
Route::post('message.stores', [ContactsController::class, 'stores'])->name('message.stores');

// Admin Route
Route::group(['prefix'=> 'admin', 'middleware'=>'verified','auth','is_admin'], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('topbar', TopbarController::class);
    Route::resource('destination', DestinationsController::class);
    Route::resource('package', PackagesController::class);
    Route::resource('booking', BookingsController::class);
    Route::resource('guide', GuideController::class);
    Route::resource('client', ClientController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('message', MessageController::class);
    Route::resource('userprofile', UserDashboardController::class);

    Route::post('reply{id}', [MessageController::class, 'reply']);
    Route::post('complet{id}', [MessageController::class, 'completed']);

    Route::post('confirm{id}', [BookingsController::class, 'confirm']);
    Route::post('complet{id}', [BookingsController::class, 'completed']);
});

// verify route

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


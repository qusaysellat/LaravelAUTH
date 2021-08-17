<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\EmailsController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TestsEnrollmentController;
use App\Http\Controllers\SmsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/private', [HomeController::class, 'private_page']);

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/email', function(){
//     Mail::to('qs@gmail.com')->send(new WelcomeMail());
//     return new WelcomeMail();
// });

// Route::get('/email', [EmailsController::class, 'email']);

Route::get('/send-testenrollment', [TestsEnrollmentController::class, 'sendTestNotificationl']);

Route::get('/sms', [SmsController::class, 'index']);


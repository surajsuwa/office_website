<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

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


Route::get('/faq', function () {
    return view('frontend/pages/faq');
})->name('faq');

Route::get('/how-we-work', function () {
    return view('frontend/pages/howWework');
})->name('howWework');

Route::get('/career', function () {
    return view('frontend/pages/career');
})->name('career');

Route::get('/term_condition', function () {
    return view('frontend/pages/term_condition');
})->name('term_condition');


// -------------------------------------------------------------
Route::get('/',[PageController::class ,'index'])->name('home');

// Platform
Route::get('platform/{id}',[PageController::class,'platform'])->name('platform');

//Services
Route::get('services/{id}',[PageController::class,'services'])->name('services');

//Contact
Route::get('contactUs',[PageController::class,'show'])->name('contactUs');

//About Us
Route::get('introduction',[PageController::class,'introduction'])->name('introduction');

//Inspirations
Route::get('inspirations',[PageController::class,'inspirations'])->name('inspirations');

//Activities
Route::get('our_activity',[PageController::class,'activities'])->name('our_activity');

//Work
Route::get('work',[PageController::class,'work'])->name('work');

//Mailbox
Route::post('sendmail',[PageController::class,'sendmail'])->name('sendmail');

//falback
Route::fallback(function() {
    return view('frontend/pages/error');
})->name('error_404');




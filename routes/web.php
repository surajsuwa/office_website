<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('frontend/pages/home');
})->name('home');


Route::get('/contact', function () {
    return view('frontend/pages/contact');
})->name('contact');

Route::get('/our-activity', function () {
    return view('frontend/pages/our_activity');
})->name('our_activity');

Route::get('/work', function () {
    return view('frontend/pages/work');
})->name('work');

Route::get('/introduction', function () {
    return view('frontend/pages/introduction');
})->name('introduction');

Route::get('/blogs', function () {
    return view('frontend/pages/blogs');
})->name('blogs');

Route::get('/faq', function () {
    return view('frontend/pages/faq');
})->name('faq');

Route::get('/services', function () {
    return view('frontend/pages/services');
})->name('services');

Route::get('/how-we-work', function () {
    return view('frontend/pages/howWework');
})->name('howWework');

Route::get('/career', function () {
    return view('frontend/pages/career');
})->name('career');

Route::get('/platform', function () {
    return view('frontend/pages/platformForm');
})->name('platform');

Route::get('/term_condition', function () {
    return view('frontend/pages/term_condition');
})->name('term_condition');

Route::get('/register', function () {
    return view('frontend/pages/register');
})->name('register');

Route::get('/login', function () {
    return view('frontend/pages/login');
})->name('login');

Route::get('/single-blog-post', function () {
    return view('frontend/pages/single-blog');
})->name('single-blog-post');

Route::get('/error_404', function () {
    return view('frontend/pages/error');
})->name('error_404');

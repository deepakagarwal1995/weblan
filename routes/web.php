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

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/index-2', function () {
    return view('index-2');
})->name('home-2');
Route::get('/index-3', function () {
    return view('index-3');
})->name('home-3');

Route::get('/about', function () { return view('about'); })->name('about');

Route::get('/blog', function () { return view('blog'); })->name('blog');

Route::get('/blog-details', function () { return view('blog-details'); })->name('blog-details');

Route::get('/blog-sidebar', function () { return view('blog-sidebar'); })->name('blog-sidebar');

Route::get('/contact', function () { return view('contact'); })->name('contact');

Route::get('/events', function () { return view('events'); })->name('events');

Route::get('/events-details', function () { return view('events-details'); })->name('events-details');

Route::get('/faq', function () { return view('faq'); })->name('faq');

Route::get('/gallery', function () { return view('gallery'); })->name('gallery');

Route::get('/order-from', function () { return view('order-from'); })->name('order-from');

Route::get('/pricing', function () { return view('pricing'); })->name('pricing');

Route::get('/review', function () { return view('review'); })->name('review');

Route::get('/team', function () { return view('team'); })->name('team');

Route::get('/workspace', function () { return view('workspace'); })->name('workspace');

Route::get('/workspace-details', function () { return view('workspace-details'); })->name('workspace-details');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

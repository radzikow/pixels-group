<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;


Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
  return view('contact');
});

Route::get('/blog', function () {
  return view('blog');
});

Route::get('/blog-post', function () {
  return view('blog-post');
});

Route::get('/cookies', function () {
  return view('cookies');
});

Route::get('/estimate', function () {
  return view('estimate');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');



// Clearing page
Route::get('/clear', function() {
  return view('clear');
});

// Clear cache facade value:
Route::get('/clear-cache', function() {
  $exitCode = Artisan::call('cache:clear');
  return back()->with('clear-message', 'Cache facade value cleared!');
});

// Clear route cache:
Route::get('/clear-route', function() {
  $exitCode = Artisan::call('route:clear');
  return back()->with('clear-message', 'Route cache cleared!');
});

// Clear view cache:
Route::get('/clear-view', function() {
  $exitCode = Artisan::call('view:clear');
  return back()->with('clear-message', 'View cache cleared!');
});

// Clear config cache:
Route::get('/clear-config', function() {
  $exitCode = Artisan::call('config:clear');
  return back()->with('clear-message', 'Config cache cleared!');
});

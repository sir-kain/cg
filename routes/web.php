<?php

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
use App\Activity;

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/activite/{slug}', function ($slug) {
    $activities = Activity::get();
    $theActivity = Activity::where('slug', $slug)->first();
    // dd($theActivity, $activities);
    return view('pages.activite', compact('activities', 'theActivity'));
})->name('activity');

Route::get('/apropos', function () {
    $activities = Activity::get();
    $theActivity = false;
    return view('pages.apropos', compact('theActivity', 'activities'));
})->name('apropos');

Route::resource('/admin', 'ActivityAdminController');
// Route::post('/admin', 'adminController@createActivity')->name('adminActivity');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



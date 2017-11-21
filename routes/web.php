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
use App\Services\ActivityServices;

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/activite/{slug}', function ($slug) {
    // Recuperation de toutes les activités en utilisant le service
    $activityServices = new ActivityServices();
    $activities = $activityServices->getAllActivities()->sortByDesc('created_at');
    $theActivity = $activities->where('slug', $slug)->first();
    // dd($theActivity, $activities);
    return view('pages.activite', compact('activities', 'theActivity'));
})->name('activity');

Route::get('/apropos', function () {
    // Recuperation de toutes les activités en utilisant le service
    $activityServices = new ActivityServices();
    $activities = $activityServices->getAllActivities()->sortByDesc('created_at');
    $theActivity = false;
    return view('pages.apropos');
})->name('apropos');

Route::group(['prefix' => 'admin'], function () {
    
    Route::resource('/activity', 'ActivityAdminController');
    // Route::post('/admin', 'adminController@createActivity')->name('adminActivity');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



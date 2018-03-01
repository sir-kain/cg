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

Route::post('/apropos', 'ContactController@store');
Route::post('/newsletter', 'NewsletterController@register')->name('register_newsletter');

Route::get('/activite/{slug}', function ($slug) {
    // Recuperation de toutes les activités en utilisant le service
    $activityServices = new ActivityServices();
    $activities = $activityServices->getAllActivities()->sortByDesc('created_at');
    $theActivity = $activities->where('slug', $slug)->first();
    // dd($theActivity, $activities);
    return view('pages.actualite', compact('activities', 'theActivity'));
})->name('activity');

Route::get('/actualite', function () {
    return view('pages.activite');
})->name('actuality');

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

Route::group(['prefix' => 'a-propos'], function () {

    Route::get('/historique', 'AproposController@historique')->name('historique');
    Route::get('/structuration', 'AproposController@structuration')->name('structuration');
    Route::get('/objectifsambition', 'AproposController@objectifsambition')->name('objectifsambition');
    Route::get('/mission', 'AproposController@mission')->name('mission');
});

Route::get('/publications', 'PublicationController@index')->name('publications');
Route::get('/mediatheque', 'MediathequeController@index')->name('mediatheque');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



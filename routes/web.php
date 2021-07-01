<?php

Auth::routes(['register' => false, 'verify' => true]);

Route::view('/', 'pages.frontend.index');
Route::view('/radio', 'pages.frontend.radio.index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'Backend\DashboardController@index')->name('dashboard');
Route::get('dashboard/file-manager', 'Backend\DashboardController@filemanager')->name('dashboard.file-manager');
Route::get('dashboard/logout', 'Backend\DashboardController@logout')->name('dashboard.logout');

// LANGUAGE
Route::get('lang/{language}', 'LocalizationController@switch')->name('localization.switch');

// SYSTEM
require __DIR__.'/backend/system/dummy.php';
require __DIR__.'/backend/system/management.php';

// MAIN
require __DIR__.'/backend/main/jasamarga.php';
require __DIR__.'/backend/main/jmtm.php';
require __DIR__.'/backend/main/sesko.php';
require __DIR__.'/backend/main/vms.php';

// PROFILE
Route::group([
  'as' => 'dashboard.profile.',
  'prefix' => 'dashboard/profile',
  'namespace' => 'Backend\System',
], function(){
  Route::get('about', 'ProfileController@about')->name('about');
  Route::get('password', 'ProfileController@password')->name('password');
  Route::post('change-password', 'ProfileController@change_password')->name('change-password');
  Route::get('personal-information', 'ProfileController@personal_information')->name('personal-information');
  Route::get('timeline', 'ProfileController@timeline')->name('timeline');
  Route::resource('/', 'ProfileController')->parameters(['' => 'id']);
});

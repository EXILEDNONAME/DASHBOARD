<?php

Route::group([
  'as' => 'system.management.access.',
  'prefix' => 'dashboard/management/accesses',
  'namespace' => 'Backend\System\Management',
], function () {
  Route::get('deleteall', 'AccessController@deleteall')->name('deleteall')->middleware(['auth', 'administrator']);
  Route::get('/', 'AccessController@index')->middleware(['auth', 'administrator']);
  Route::get('create', 'AccessController@create')->middleware(['auth', 'administrator']);
  Route::post('/', 'AccessController@store')->middleware(['auth', 'administrator']);
  Route::get('{id}/edit', 'AccessController@edit')->middleware(['auth', 'administrator']);
  Route::patch('{id}', 'AccessController@update')->middleware(['auth', 'administrator']);
  Route::get('{id}', 'AccessController@show')->middleware(['auth', 'administrator']);
  Route::delete('/{id}','AccessController@destroy')->middleware(['auth', 'administrator']);
  Route::get('enable/{id}', 'AccessController@enable')->name('enable')->middleware(['auth', 'administrator']);
  Route::get('disable/{id}', 'AccessController@disable')->name('disable')->middleware(['auth', 'administrator']);
  Route::get('status-done/{id}', 'AccessController@status_done')->name('status-done')->middleware(['auth', 'administrator']);
  Route::get('status-pending/{id}', 'AccessController@status_pending')->name('status-pending')->middleware(['auth', 'administrator']);
  Route::get('status/{id}/{slug}', 'AccessController@status')->name('status')->middleware(['auth', 'administrator']);
  Route::get('delete/{id}', 'AccessController@delete')->name('delete')->middleware(['auth', 'administrator']);
});

Route::group([
  'as' => 'system.management.user.',
  'prefix' => 'dashboard/management/users',
  'namespace' => 'Backend\System\Management',
], function () {
  Route::get('deleteall', 'UserController@deleteall')->name('deleteall')->middleware(['auth', 'administrator']);
  Route::get('/', 'UserController@index')->middleware(['auth', 'administrator']);
  Route::get('create', 'UserController@create')->middleware(['auth', 'administrator']);
  Route::post('/', 'UserController@store')->middleware(['auth', 'administrator']);
  Route::get('{id}/edit', 'UserController@edit')->middleware(['auth', 'administrator']);
  Route::patch('{id}', 'UserController@update')->middleware(['auth', 'administrator']);
  Route::get('{id}', 'UserController@show')->middleware(['auth', 'administrator']);
  Route::delete('/{id}','UserController@destroy')->middleware(['auth', 'administrator']);
  Route::get('enable/{id}', 'UserController@enable')->name('enable')->middleware(['auth', 'administrator']);
  Route::get('disable/{id}', 'UserController@disable')->name('disable')->middleware(['auth', 'administrator']);
  Route::get('status-done/{id}', 'UserController@status_done')->name('status-done')->middleware(['auth', 'administrator']);
  Route::get('status-pending/{id}', 'UserController@status_pending')->name('status-pending')->middleware(['auth', 'administrator']);
  Route::get('status/{id}/{slug}', 'UserController@status')->name('status')->middleware(['auth', 'administrator']);
  Route::get('delete/{id}', 'UserController@delete')->name('delete')->middleware(['auth', 'administrator']);
});

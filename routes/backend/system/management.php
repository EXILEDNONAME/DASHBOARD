<?php

Route::group([
  'as' => 'system.management.access.',
  'prefix' => 'dashboard/management/accesses',
  'namespace' => 'Backend\System\Management',
], function () {
  Route::get('deleteall', 'AccessController@deleteall')->name('deleteall')->middleware('accesses:["full-administrator"]');
  Route::get('/', 'AccessController@index')->middleware('accesses:["full-administrator"]');
  Route::get('create', 'AccessController@create')->middleware('accesses:["full-administrator"]');
  Route::post('/', 'AccessController@store')->middleware('accesses:["full-administrator"]');
  Route::get('{id}/edit', 'AccessController@edit')->middleware('accesses:["full-administrator"]');
  Route::patch('{id}', 'AccessController@update')->middleware('accesses:["full-administrator"]');
  Route::get('{id}', 'AccessController@show')->middleware('accesses:["full-administrator"]');
  Route::delete('/{id}','AccessController@destroy')->middleware('accesses:["full-administrator"]');
  Route::get('enable/{id}', 'AccessController@enable')->name('enable')->middleware('accesses:["full-administrator"]');
  Route::get('disable/{id}', 'AccessController@disable')->name('disable')->middleware('accesses:["full-administrator"]');
  Route::get('status-done/{id}', 'AccessController@status_done')->name('status-done')->middleware('accesses:["full-administrator"]');
  Route::get('status-pending/{id}', 'AccessController@status_pending')->name('status-pending')->middleware('accesses:["full-administrator"]');
  Route::get('status/{id}/{slug}', 'AccessController@status')->name('status')->middleware('accesses:["full-administrator"]');
  Route::get('delete/{id}', 'AccessController@delete')->name('delete')->middleware('accesses:["full-administrator"]');
});

Route::group([
  'as' => 'system.management.user.',
  'prefix' => 'dashboard/management/users',
  'namespace' => 'Backend\System\Management',
], function () {
  Route::get('deleteall', 'UserController@deleteall')->name('deleteall')->middleware('accesses:["full-administrator"]');
  Route::get('/', 'UserController@index')->middleware('accesses:["full-administrator"]');
  Route::get('create', 'UserController@create')->middleware('accesses:["full-administrator"]');
  Route::post('/', 'UserController@store')->middleware('accesses:["full-administrator"]');
  Route::get('{id}/edit', 'UserController@edit')->middleware('accesses:["full-administrator"]');
  Route::patch('{id}', 'UserController@update')->middleware('accesses:["full-administrator"]');
  Route::get('{id}', 'UserController@show')->middleware('accesses:["full-administrator"]');
  Route::delete('/{id}','UserController@destroy')->middleware('accesses:["full-administrator"]');
  Route::get('enable/{id}', 'UserController@enable')->name('enable')->middleware('accesses:["full-administrator"]');
  Route::get('disable/{id}', 'UserController@disable')->name('disable')->middleware('accesses:["full-administrator"]');
  Route::get('status-done/{id}', 'UserController@status_done')->name('status-done')->middleware('accesses:["full-administrator"]');
  Route::get('status-pending/{id}', 'UserController@status_pending')->name('status-pending')->middleware('accesses:["full-administrator"]');
  Route::get('status/{id}/{slug}', 'UserController@status')->name('status')->middleware('accesses:["full-administrator"]');
  Route::get('delete/{id}', 'UserController@delete')->name('delete')->middleware('accesses:["full-administrator"]');
});

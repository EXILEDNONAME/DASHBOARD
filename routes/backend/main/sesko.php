<?php

// SESKO - LOCATIONS
Route::group([
  'as' => 'main.sesko.location.',
  'prefix' => 'dashboard/sesko/locations',
  'namespace' => 'Backend\Main\Sesko',
], function () {
  Route::get('deleteall', 'LocationController@deleteall')->name('deleteall')->middleware('accesses:["administrator-sesko"]');
  Route::get('/', 'LocationController@index')->name('index')->middleware('accesses:["administrator-sesko"]');
  Route::get('/create', 'LocationController@create')->name('create')->middleware('accesses:["administrator-sesko"]');
  Route::post('/', 'LocationController@store')->name('store')->middleware('accesses:["administrator-sesko"]');
  Route::get('{id}/edit', 'LocationController@edit')->name('edit')->middleware('accesses:["administrator-sesko"]');
  Route::patch('{id}', 'LocationController@update')->name('update')->middleware('accesses:["administrator-sesko"]');
  Route::get('{id}', 'LocationController@show')->name('show')->middleware('accesses:["administrator-sesko"]');
  Route::delete('/{id}','LocationController@destroy')->name('destroy')->middleware('accesses:["administrator-sesko"]');
  Route::get('enable/{id}', 'LocationController@enable')->name('enable')->middleware('accesses:["administrator-sesko"]');
  Route::get('disable/{id}', 'LocationController@disable')->name('disable')->middleware('accesses:["administrator-sesko"]');
  Route::get('status-done/{id}', 'LocationController@status_done')->name('status-done')->middleware('accesses:["administrator-sesko"]');
  Route::get('status-pending/{id}', 'LocationController@status_pending')->name('status-pending')->middleware('accesses:["administrator-sesko"]');
  Route::get('status/{id}/{slug}', 'LocationController@status')->name('status')->middleware('accesses:["administrator-sesko"]');
  Route::get('delete/{id}', 'LocationController@delete')->name('delete')->middleware('accesses:["administrator-sesko"]');
});

// SESKO - PACKETS
Route::group([
  'as' => 'main.sesko.packet.',
  'prefix' => 'dashboard/sesko/packets',
  'namespace' => 'Backend\Main\Sesko',
], function () {
  Route::get('deleteall', 'PacketController@deleteall')->name('deleteall')->middleware('accesses:["administrator-sesko"]');
  Route::get('/', 'PacketController@index')->name('index')->middleware('accesses:["administrator-sesko"]');
  Route::get('/create', 'PacketController@create')->name('create')->middleware('accesses:["administrator-sesko"]');
  Route::post('/', 'PacketController@store')->name('store')->middleware('accesses:["administrator-sesko"]');
  Route::get('{id}/edit', 'PacketController@edit')->name('edit')->middleware('accesses:["administrator-sesko"]');
  Route::patch('{id}', 'PacketController@update')->name('update')->middleware('accesses:["administrator-sesko"]');
  Route::get('{id}', 'PacketController@show')->name('show')->middleware('accesses:["administrator-sesko"]');
  Route::delete('/{id}','PacketController@destroy')->name('destroy')->middleware('accesses:["administrator-sesko"]');
  Route::get('enable/{id}', 'PacketController@enable')->name('enable')->middleware('accesses:["administrator-sesko"]');
  Route::get('disable/{id}', 'PacketController@disable')->name('disable')->middleware('accesses:["administrator-sesko"]');
  Route::get('status-done/{id}', 'PacketController@status_done')->name('status-done')->middleware('accesses:["administrator-sesko"]');
  Route::get('status-pending/{id}', 'PacketController@status_pending')->name('status-pending')->middleware('accesses:["administrator-sesko"]');
  Route::get('status/{id}/{slug}', 'PacketController@status')->name('status')->middleware('accesses:["administrator-sesko"]');
  Route::get('delete/{id}', 'PacketController@delete')->name('delete')->middleware('accesses:["administrator-sesko"]');
});

// SESKO - USERS
Route::group([
  'as' => 'main.sesko.user.',
  'prefix' => 'dashboard/sesko/users',
  'namespace' => 'Backend\Main\Sesko',
], function () {
  Route::get('deleteall', 'UserController@deleteall')->name('deleteall')->middleware('accesses:["administrator-sesko"]');
  Route::get('/', 'UserController@index')->name('index')->middleware('accesses:["administrator-sesko"]');
  Route::get('/create', 'UserController@create')->name('create')->middleware('accesses:["administrator-sesko"]');
  Route::post('/', 'UserController@store')->name('store')->middleware('accesses:["administrator-sesko"]');
  Route::get('{id}/edit', 'UserController@edit')->name('edit')->middleware('accesses:["administrator-sesko"]');
  Route::patch('{id}', 'UserController@update')->name('update')->middleware('accesses:["administrator-sesko"]');
  Route::get('{id}', 'UserController@show')->name('show')->middleware('accesses:["administrator-sesko"]');
  Route::delete('/{id}','UserController@destroy')->name('destroy')->middleware('accesses:["administrator-sesko"]');
  Route::get('enable/{id}', 'UserController@enable')->name('enable')->middleware('accesses:["administrator-sesko"]');
  Route::get('disable/{id}', 'UserController@disable')->name('disable')->middleware('accesses:["administrator-sesko"]');
  Route::get('status-done/{id}', 'UserController@status_done')->name('status-done')->middleware('accesses:["administrator-sesko"]');
  Route::get('status-pending/{id}', 'UserController@status_pending')->name('status-pending')->middleware('accesses:["administrator-sesko"]');
  Route::get('status/{id}/{slug}', 'UserController@status')->name('status')->middleware('accesses:["administrator-sesko"]');
  Route::get('delete/{id}', 'UserController@delete')->name('delete')->middleware('accesses:["administrator-sesko"]');
});

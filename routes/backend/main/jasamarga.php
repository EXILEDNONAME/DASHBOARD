<?php

// JASAMARGA - DEVICES
Route::group([
  'as' => 'main.jasamarga.device.',
  'prefix' => 'dashboard/jasamarga/devices',
  'namespace' => 'Backend\Main\Jasamarga',
], function () {
  Route::get('deleteall', 'DeviceController@deleteall')->name('deleteall')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('/', 'DeviceController@index')->name('index')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('/create', 'DeviceController@create')->name('create')->middleware('accesses:["administrator-jasamarga"]');
  Route::post('/', 'DeviceController@store')->name('store')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('{id}/edit', 'DeviceController@edit')->name('edit')->middleware('accesses:["administrator-jasamarga"]');
  Route::patch('{id}', 'DeviceController@update')->name('update')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('{id}', 'DeviceController@show')->name('show')->middleware('accesses:["administrator-jasamarga"]');
  Route::delete('/{id}','DeviceController@destroy')->name('destroy')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('enable/{id}', 'DeviceController@enable')->name('enable')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('disable/{id}', 'DeviceController@disable')->name('disable')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status-done/{id}', 'DeviceController@status_done')->name('status-done')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status-pending/{id}', 'DeviceController@status_pending')->name('status-pending')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status/{id}/{slug}', 'DeviceController@status')->name('status')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('delete/{id}', 'DeviceController@delete')->name('delete')->middleware('accesses:["administrator-jasamarga"]');
});

// JASAMARGA - INTERCOMES
Route::group([
  'as' => 'main.jasamarga.intercome.',
  'prefix' => 'dashboard/jasamarga/intercomes',
  'namespace' => 'Backend\Main\Jasamarga',
], function () {
  Route::get('deleteall', 'IntercomeController@deleteall')->name('deleteall')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('/', 'IntercomeController@index')->name('index')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('/create', 'IntercomeController@create')->name('create')->middleware('accesses:["administrator-jasamarga"]');
  Route::post('/', 'IntercomeController@store')->name('store')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('{id}/edit', 'IntercomeController@edit')->name('edit')->middleware('accesses:["administrator-jasamarga"]');
  Route::patch('{id}', 'IntercomeController@update')->name('update')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('{id}', 'IntercomeController@show')->name('show')->middleware('accesses:["administrator-jasamarga"]');
  Route::delete('/{id}','IntercomeController@destroy')->name('destroy')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('enable/{id}', 'IntercomeController@enable')->name('enable')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('disable/{id}', 'IntercomeController@disable')->name('disable')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status-done/{id}', 'IntercomeController@status_done')->name('status-done')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status-pending/{id}', 'IntercomeController@status_pending')->name('status-pending')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status/{id}/{slug}', 'IntercomeController@status')->name('status')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('delete/{id}', 'IntercomeController@delete')->name('delete')->middleware('accesses:["administrator-jasamarga"]');
});

// JASAMARGA - LOCATIONS
Route::group([
  'as' => 'main.jasamarga.location.',
  'prefix' => 'dashboard/jasamarga/locations',
  'namespace' => 'Backend\Main\Jasamarga',
], function () {
  Route::get('deleteall', 'LocationController@deleteall')->name('deleteall')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('/', 'LocationController@index')->name('index')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('/create', 'LocationController@create')->name('create')->middleware('accesses:["administrator-jasamarga"]');
  Route::post('/', 'LocationController@store')->name('store')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('{id}/edit', 'LocationController@edit')->name('edit')->middleware('accesses:["administrator-jasamarga"]');
  Route::patch('{id}', 'LocationController@update')->name('update')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('{id}', 'LocationController@show')->name('show')->middleware('accesses:["administrator-jasamarga"]');
  Route::delete('/{id}','LocationController@destroy')->name('destroy')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('enable/{id}', 'LocationController@enable')->name('enable')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('disable/{id}', 'LocationController@disable')->name('disable')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status-done/{id}', 'LocationController@status_done')->name('status-done')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status-pending/{id}', 'LocationController@status_pending')->name('status-pending')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status/{id}/{slug}', 'LocationController@status')->name('status')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('delete/{id}', 'LocationController@delete')->name('delete')->middleware('accesses:["administrator-jasamarga"]');
});

// JASAMARGA - MAINTENANCES
Route::group([
  'as' => 'main.jasamarga.maintenance.',
  'prefix' => 'dashboard/jasamarga/maintenances',
  'namespace' => 'Backend\Main\Jasamarga',
], function () {
  Route::get('deleteall', 'MaintenanceController@deleteall')->name('deleteall')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('/', 'MaintenanceController@index')->name('index')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('/create', 'MaintenanceController@create')->name('create')->middleware('accesses:["administrator-jasamarga"]');
  Route::post('/', 'MaintenanceController@store')->name('store')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('{id}/edit', 'MaintenanceController@edit')->name('edit')->middleware('accesses:["administrator-jasamarga"]');
  Route::patch('{id}', 'MaintenanceController@update')->name('update')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('{id}', 'MaintenanceController@show')->name('show')->middleware('accesses:["administrator-jasamarga"]');
  Route::delete('/{id}','MaintenanceController@destroy')->name('destroy')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('enable/{id}', 'MaintenanceController@enable')->name('enable')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('disable/{id}', 'MaintenanceController@disable')->name('disable')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status-done/{id}', 'MaintenanceController@status_done')->name('status-done')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status-pending/{id}', 'MaintenanceController@status_pending')->name('status-pending')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status/{id}/{slug}', 'MaintenanceController@status')->name('status')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('delete/{id}', 'MaintenanceController@delete')->name('delete')->middleware('accesses:["administrator-jasamarga"]');
});

// JASAMARGA - OFFICIALS
Route::group([
  'as' => 'main.jasamarga.official.',
  'prefix' => 'dashboard/jasamarga/officials',
  'namespace' => 'Backend\Main\Jasamarga',
], function () {
  Route::get('deleteall', 'OfficialController@deleteall')->name('deleteall')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('/', 'OfficialController@index')->name('index')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('/create', 'OfficialController@create')->name('create')->middleware('accesses:["administrator-jasamarga"]');
  Route::post('/', 'OfficialController@store')->name('store')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('{id}/edit', 'OfficialController@edit')->name('edit')->middleware('accesses:["administrator-jasamarga"]');
  Route::patch('{id}', 'OfficialController@update')->name('update')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('{id}', 'OfficialController@show')->name('show')->middleware('accesses:["administrator-jasamarga"]');
  Route::delete('/{id}','OfficialController@destroy')->name('destroy')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('enable/{id}', 'OfficialController@enable')->name('enable')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('disable/{id}', 'OfficialController@disable')->name('disable')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status-done/{id}', 'OfficialController@status_done')->name('status-done')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status-pending/{id}', 'OfficialController@status_pending')->name('status-pending')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status/{id}/{slug}', 'OfficialController@status')->name('status')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('delete/{id}', 'OfficialController@delete')->name('delete')->middleware('accesses:["administrator-jasamarga"]');
});

// JASAMARGA - USERS
Route::group([
  'as' => 'main.jasamarga.user.',
  'prefix' => 'dashboard/jasamarga/users',
  'namespace' => 'Backend\Main\Jasamarga',
], function () {
  Route::get('deleteall', 'UserController@deleteall')->name('deleteall')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('/', 'UserController@index')->name('index')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('/create', 'UserController@create')->name('create')->middleware('accesses:["administrator-jasamarga"]');
  Route::post('/', 'UserController@store')->name('store')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('{id}/edit', 'UserController@edit')->name('edit')->middleware('accesses:["administrator-jasamarga"]');
  Route::patch('{id}', 'UserController@update')->name('update')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('{id}', 'UserController@show')->name('show')->middleware('accesses:["administrator-jasamarga"]');
  Route::delete('/{id}','UserController@destroy')->name('destroy')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('enable/{id}', 'UserController@enable')->name('enable')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('disable/{id}', 'UserController@disable')->name('disable')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status-done/{id}', 'UserController@status_done')->name('status-done')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status-pending/{id}', 'UserController@status_pending')->name('status-pending')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status/{id}/{slug}', 'UserController@status')->name('status')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('delete/{id}', 'UserController@delete')->name('delete')->middleware('accesses:["administrator-jasamarga"]');
});

// JASAMARGA - MONITORINGS
Route::group([
  'as' => 'main.jasamarga.monitoring.',
  'prefix' => 'dashboard/jasamarga/monitorings',
  'namespace' => 'Backend\Main\Jasamarga',
], function () {
  Route::get('/', 'MonitoringController@index')->name('index')->middleware('accesses:["administrator-jasamarga"]');
});

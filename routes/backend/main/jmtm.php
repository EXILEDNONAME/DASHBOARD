<?php

// JMTM - DEVICES
Route::group([
  'as' => 'main.jmtm.device.',
  'prefix' => 'dashboard/jmtm/devices',
  'namespace' => 'Backend\Main\Jmtm',
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

// JMTM - MAINTENANCES
Route::group([
  'as' => 'main.jmtm.maintenance.',
  'prefix' => 'dashboard/jmtm/maintenances',
  'namespace' => 'Backend\Main\Jmtm',
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

// JMTM - USERS
Route::group([
  'as' => 'main.jmtm.user.',
  'prefix' => 'dashboard/jmtm/users',
  'namespace' => 'Backend\Main\Jmtm',
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

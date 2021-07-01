<?php

// VMS - AREAS
Route::group([
  'as' => 'main.vms.area.',
  'prefix' => 'dashboard/vms/areas',
  'namespace' => 'Backend\Main\Vms',
], function () {
  Route::get('deleteall', 'AreaController@deleteall')->name('deleteall')->middleware('accesses:["Administrator-VMS"]');
  Route::get('/', 'AreaController@index')->name('index')->middleware('accesses:["Administrator-VMS"]');
  Route::get('/create', 'AreaController@create')->name('create')->middleware('accesses:["Administrator-VMS"]');
  Route::post('/', 'AreaController@store')->name('store')->middleware('accesses:["Administrator-VMS"]');
  Route::get('{id}/edit', 'AreaController@edit')->name('edit')->middleware('accesses:["Administrator-VMS"]');
  Route::patch('{id}', 'AreaController@update')->name('update')->middleware('accesses:["Administrator-VMS"]');
  Route::get('{id}', 'AreaController@show')->name('show')->middleware('accesses:["Administrator-VMS"]');
  Route::delete('/{id}','AreaController@destroy')->name('destroy')->middleware('accesses:["Administrator-VMS"]');
  Route::get('enable/{id}', 'AreaController@enable')->name('enable')->middleware('accesses:["Administrator-VMS"]');
  Route::get('disable/{id}', 'AreaController@disable')->name('disable')->middleware('accesses:["Administrator-VMS"]');
  Route::get('status-done/{id}', 'AreaController@status_done')->name('status-done')->middleware('accesses:["Administrator-VMS"]');
  Route::get('status-pending/{id}', 'AreaController@status_pending')->name('status-pending')->middleware('accesses:["Administrator-VMS"]');
  Route::get('status/{id}/{slug}', 'AreaController@status')->name('status')->middleware('accesses:["Administrator-VMS"]');
  Route::get('delete/{id}', 'AreaController@delete')->name('delete')->middleware('accesses:["Administrator-VMS"]');
});

// VMS - DIRECTORIES
Route::group([
  'as' => 'main.vms.directory.',
  'prefix' => 'dashboard/vms/directories',
  'namespace' => 'Backend\Main\Vms',
], function () {
  Route::get('deleteall', 'DirectoryController@deleteall')->name('deleteall')->middleware('accesses:["Administrator-VMS"]');
  Route::get('/', 'DirectoryController@index')->name('index')->middleware('accesses:["Administrator-VMS"]');
  Route::get('/create', 'DirectoryController@create')->name('create')->middleware('accesses:["Administrator-VMS"]');
  Route::post('/', 'DirectoryController@store')->name('store')->middleware('accesses:["Administrator-VMS"]');
  Route::get('{id}/edit', 'DirectoryController@edit')->name('edit')->middleware('accesses:["Administrator-VMS"]');
  Route::patch('{id}', 'DirectoryController@update')->name('update')->middleware('accesses:["Administrator-VMS"]');
  Route::get('{id}', 'DirectoryController@show')->name('show')->middleware('accesses:["Administrator-VMS"]');
  Route::delete('/{id}','DirectoryController@destroy')->name('destroy')->middleware('accesses:["Administrator-VMS"]');
  Route::get('enable/{id}', 'DirectoryController@enable')->name('enable')->middleware('accesses:["Administrator-VMS"]');
  Route::get('disable/{id}', 'DirectoryController@disable')->name('disable')->middleware('accesses:["Administrator-VMS"]');
  Route::get('status-done/{id}', 'DirectoryController@status_done')->name('status-done')->middleware('accesses:["Administrator-VMS"]');
  Route::get('status-pending/{id}', 'DirectoryController@status_pending')->name('status-pending')->middleware('accesses:["Administrator-VMS"]');
  Route::get('status/{id}/{slug}', 'DirectoryController@status')->name('status')->middleware('accesses:["Administrator-VMS"]');
  Route::get('delete/{id}', 'DirectoryController@delete')->name('delete')->middleware('accesses:["Administrator-VMS"]');
});

// VMS - MAINTENANCES
Route::group([
  'as' => 'main.vms.maintenance.',
  'prefix' => 'dashboard/vms/maintenances',
  'namespace' => 'Backend\Main\Vms',
], function () {
  Route::get('deleteall', 'MaintenanceController@deleteall')->name('deleteall')->middleware('accesses:["Administrator-VMS"]');
  Route::get('/', 'MaintenanceController@index')->name('index')->middleware('accesses:["Administrator-VMS"|"User-VMS"]');
  Route::get('/create', 'MaintenanceController@create')->name('create')->middleware('accesses:["Administrator-VMS"]');
  Route::post('/', 'MaintenanceController@store')->name('store')->middleware('accesses:["Administrator-VMS"]');
  Route::get('{id}/edit', 'MaintenanceController@edit')->name('edit')->middleware('accesses:["Administrator-VMS"]');
  Route::patch('{id}', 'MaintenanceController@update')->name('update')->middleware('accesses:["Administrator-VMS"]');
  Route::get('{id}', 'MaintenanceController@show')->name('show')->middleware('accesses:["Administrator-VMS"]');
  Route::delete('/{id}','MaintenanceController@destroy')->name('destroy')->middleware('accesses:["Administrator-VMS"]');
  Route::get('enable/{id}', 'MaintenanceController@enable')->name('enable')->middleware('accesses:["Administrator-VMS"]');
  Route::get('disable/{id}', 'MaintenanceController@disable')->name('disable')->middleware('accesses:["Administrator-VMS"]');
  Route::get('status-done/{id}', 'MaintenanceController@status_done')->name('status-done')->middleware('accesses:["Administrator-VMS"]');
  Route::get('status-pending/{id}', 'MaintenanceController@status_pending')->name('status-pending')->middleware('accesses:["Administrator-VMS"]');
  Route::get('status/{id}/{slug}', 'MaintenanceController@status')->name('status')->middleware('accesses:["Administrator-VMS"]');
  Route::get('delete/{id}', 'MaintenanceController@delete')->name('delete')->middleware('accesses:["Administrator-VMS"]');
});

// VMS - TYPES
Route::group([
  'as' => 'main.vms.type.',
  'prefix' => 'dashboard/vms/types',
  'namespace' => 'Backend\Main\Vms',
], function () {
  Route::get('deleteall', 'TypeController@deleteall')->name('deleteall')->middleware('accesses:["Administrator-VMS"]');
  Route::get('/', 'TypeController@index')->name('index')->middleware('accesses:["Administrator-VMS"]');
  Route::get('/create', 'TypeController@create')->name('create')->middleware('accesses:["Administrator-VMS"]');
  Route::post('/', 'TypeController@store')->name('store')->middleware('accesses:["Administrator-VMS"]');
  Route::get('{id}/edit', 'TypeController@edit')->name('edit')->middleware('accesses:["Administrator-VMS"]');
  Route::patch('{id}', 'TypeController@update')->name('update')->middleware('accesses:["Administrator-VMS"]');
  Route::get('{id}', 'TypeController@show')->name('show')->middleware('accesses:["Administrator-VMS"]');
  Route::delete('/{id}','TypeController@destroy')->name('destroy')->middleware('accesses:["Administrator-VMS"]');
  Route::get('enable/{id}', 'TypeController@enable')->name('enable')->middleware('accesses:["Administrator-VMS"]');
  Route::get('disable/{id}', 'TypeController@disable')->name('disable')->middleware('accesses:["Administrator-VMS"]');
  Route::get('status-done/{id}', 'TypeController@status_done')->name('status-done')->middleware('accesses:["Administrator-VMS"]');
  Route::get('status-pending/{id}', 'TypeController@status_pending')->name('status-pending')->middleware('accesses:["Administrator-VMS"]');
  Route::get('status/{id}/{slug}', 'TypeController@status')->name('status')->middleware('accesses:["Administrator-VMS"]');
  Route::get('delete/{id}', 'TypeController@delete')->name('delete')->middleware('accesses:["Administrator-VMS"]');
});

// VMS - MONITORINGS
Route::group([
  'as' => 'main.vms.monitoring.',
  'prefix' => 'dashboard/vms/monitorings',
  'namespace' => 'Backend\Main\Vms',
], function () {
  Route::get('/', 'MonitoringController@index')->name('index')->middleware('accesses:["Administrator-VMS"|"User-VMS"]');
});

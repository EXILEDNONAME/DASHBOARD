<?php

// DUMMY - TABLE FILTERS
Route::group([
  'as' => 'system.dummy.table.filters.',
  'prefix' => 'dashboard/dummy/table/filters',
  'namespace' => 'Backend\System\Dummy\Table',
], function(){
  Route::get('status-done/{id}', 'FilterController@status_done')->name('status-done')->middleware(['auth', 'administrator']);
  Route::get('status-pending/{id}', 'FilterController@status_pending')->name('status-pending')->middleware(['auth', 'administrator']);
  Route::get('enable/{id}', 'FilterController@enable')->name('enable')->middleware(['auth', 'administrator']);
  Route::get('disable/{id}', 'FilterController@disable')->name('disable')->middleware(['auth', 'administrator']);
  Route::get('status/{id}/{slug}', 'FilterController@status')->name('status')->middleware(['auth', 'administrator']);
  Route::get('delete/{id}', 'FilterController@delete')->name('delete')->middleware(['auth', 'administrator']);
  Route::get('deleteall', 'FilterController@deleteall')->name('deleteall')->middleware(['auth', 'administrator']);
  Route::resource('/', 'FilterController')->middleware(['auth', 'administrator'])->parameters(['' => 'id']);
});

// DUMMY - TABLE GENERALS
Route::group([
  'as' => 'system.dummy.table.generals.',
  'prefix' => 'dashboard/dummy/table/generals',
  'namespace' => 'Backend\System\Dummy\Table',
], function(){
  Route::get('status-done/{id}', 'GeneralController@status_done')->name('status-done')->middleware(['auth', 'administrator']);
  Route::get('status-pending/{id}', 'GeneralController@status_pending')->name('status-pending')->middleware(['auth', 'administrator']);
  Route::get('enable/{id}', 'GeneralController@enable')->name('enable')->middleware(['auth', 'administrator']);
  Route::get('disable/{id}', 'GeneralController@disable')->name('disable')->middleware(['auth', 'administrator']);
  Route::get('status/{id}/{slug}', 'GeneralController@status')->name('status')->middleware(['auth', 'administrator']);
  Route::get('delete/{id}', 'GeneralController@delete')->name('delete')->middleware(['auth', 'administrator']);
  Route::get('deleteall', 'GeneralController@deleteall')->name('deleteall')->middleware(['auth', 'administrator']);
  Route::resource('/', 'GeneralController')->middleware(['auth', 'administrator'])->parameters(['' => 'id']);
});

// DUMMY - TABLE SINGLE RELATIONS
Route::group([
  'as' => 'system.dummy.table.single-relations.',
  'prefix' => 'dashboard/dummy/table/single-relations',
  'namespace' => 'Backend\System\Dummy\Table',
], function(){
  Route::get('status-done/{id}', 'SingleRelationController@status_done')->name('status-done')->middleware(['auth', 'administrator']);
  Route::get('status-pending/{id}', 'SingleRelationController@status_pending')->name('status-pending')->middleware(['auth', 'administrator']);
  Route::get('enable/{id}', 'SingleRelationController@enable')->name('enable')->middleware(['auth', 'administrator']);
  Route::get('disable/{id}', 'SingleRelationController@disable')->name('disable')->middleware(['auth', 'administrator']);
  Route::get('status/{id}/{slug}', 'SingleRelationController@status')->name('status')->middleware(['auth', 'administrator']);
  Route::get('delete/{id}', 'SingleRelationController@delete')->name('delete')->middleware(['auth', 'administrator']);
  Route::get('deleteall', 'SingleRelationController@deleteall')->name('deleteall')->middleware(['auth', 'administrator']);
  Route::resource('/', 'SingleRelationController')->middleware(['auth', 'administrator'])->parameters(['' => 'id']);
});

// DUMMY - TABLE MULTI RELATIONS
Route::group([
  'as' => 'system.dummy.table.multi-relations.',
  'prefix' => 'dashboard/dummy/table/multi-relations',
  'namespace' => 'Backend\System\Dummy\Table',
], function(){
  Route::get('status-done/{id}', 'MultiRelationController@status_done')->name('status-done')->middleware(['auth', 'administrator']);
  Route::get('status-pending/{id}', 'MultiRelationController@status_pending')->name('status-pending')->middleware(['auth', 'administrator']);
  Route::get('enable/{id}', 'MultiRelationController@enable')->name('enable')->middleware(['auth', 'administrator']);
  Route::get('disable/{id}', 'MultiRelationController@disable')->name('disable')->middleware(['auth', 'administrator']);
  Route::get('status/{id}/{slug}', 'MultiRelationController@status')->name('status')->middleware(['auth', 'administrator']);
  Route::get('delete/{id}', 'MultiRelationController@delete')->name('delete')->middleware(['auth', 'administrator']);
  Route::get('deleteall', 'MultiRelationController@deleteall')->name('deleteall')->middleware(['auth', 'administrator']);
  Route::resource('/', 'MultiRelationController')->middleware(['auth', 'administrator'])->parameters(['' => 'id']);
});

// DUMMY - INVOICES
Route::group([
  'as' => 'system.dummy.invoices.',
  'prefix' => 'dashboard/dummy/invoices',
  'namespace' => 'Backend\System\Dummy',
], function(){
  Route::get('status-done/{id}', 'InvoiceController@status_done')->name('status-done')->middleware(['auth', 'administrator']);
  Route::get('status-pending/{id}', 'InvoiceController@status_pending')->name('status-pending')->middleware(['auth', 'administrator']);
  Route::get('enable/{id}', 'InvoiceController@enable')->name('enable')->middleware(['auth', 'administrator']);
  Route::get('disable/{id}', 'InvoiceController@disable')->name('disable')->middleware(['auth', 'administrator']);
  Route::get('status/{id}/{slug}', 'InvoiceController@status')->name('status')->middleware(['auth', 'administrator']);
  Route::get('delete/{id}', 'InvoiceController@delete')->name('delete')->middleware(['auth', 'administrator']);
  Route::get('deleteall', 'InvoiceController@deleteall')->name('deleteall')->middleware(['auth', 'administrator']);
  Route::resource('/', 'InvoiceController')->middleware(['auth', 'administrator'])->parameters(['' => 'id']);
});

// DUMMY - REPORTS
Route::group([
  'as' => 'system.dummy.reports.',
  'prefix' => 'dashboard/dummy/reports',
  'namespace' => 'Backend\System\Dummy',
], function(){
  Route::get('status-done/{id}', 'ReportController@status_done')->name('status-done')->middleware(['auth', 'administrator']);
  Route::get('status-pending/{id}', 'ReportController@status_pending')->name('status-pending')->middleware(['auth', 'administrator']);
  Route::get('enable/{id}', 'ReportController@enable')->name('enable')->middleware(['auth', 'administrator']);
  Route::get('disable/{id}', 'ReportController@disable')->name('disable')->middleware(['auth', 'administrator']);
  Route::get('status/{id}/{slug}', 'ReportController@status')->name('status')->middleware(['auth', 'administrator']);
  Route::get('delete/{id}', 'ReportController@delete')->name('delete')->middleware(['auth', 'administrator']);
  Route::get('deleteall', 'ReportController@deleteall')->name('deleteall')->middleware(['auth', 'administrator']);
  Route::resource('/', 'ReportController')->middleware(['auth', 'administrator'])->parameters(['' => 'id']);
});

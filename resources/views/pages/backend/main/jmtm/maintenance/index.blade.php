@extends('layouts.pages.index', ['status' => 'true'])
@push('title', 'JMTM Maintenances')

@push('content-head')
<th width="1" class="text-nowrap"> Date Start </th>
<th width="1" class="text-nowrap"> Date End </th>
<th> Location </th>
<th> User </th>
<th> Name </th>
<th> Troubleshoot </th>
@endpush

@push('content-body')
{ data: 'date_start'},
{ data: 'date_end' },
{ data: 'jmtm_locations' },
{ data: 'jmtm_users' },
{ data: 'name' },
{ data: 'troubleshoot' },
@endpush

@push('filter-header')
<div class="col-md-4 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <label class="mr-3 mb-0 d-none d-md-block"> Filter </label>
    <div class="input-daterange input-group" id="ex_datepicker_start">
      <input type="text" id="date_start" class="form-control" name="date_start">
      <div class="input-group-append">
        <span class="input-group-text">
          <i class="la la-ellipsis-h"></i>
        </span>
      </div>
      <input type="text" id="date_end" class="form-control" name="date_end">
    </div>
  </div>
</div>
@endpush

@push('filter-function')
d.date_start = $('#date_start').val();
d.date_end = $('#date_end').val();
@endpush

@push('filter-data')
$('#date_start').change(function () { table.draw(); });
$('#date_end').change(function () { table.draw(); });
@endpush

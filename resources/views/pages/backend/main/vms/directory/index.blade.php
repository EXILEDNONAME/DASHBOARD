@extends('layouts.pages.index')
@push('title', 'VMS Directories')

@push('content-head')
<th> Area </th>
<th> Type </th>
<th> Name </th>
<th> IP Address </th>
<th> MAC Address </th>
<th width="1"> Port </th>
@endpush

@push('content-body')
{ data: 'vms_areas' },
{ data: 'vms_types' },
{ data: 'name' },
{ data: 'ip_address' },
{ data: 'mac_address' },
{ data: 'port' },
@endpush

@push('filter-header')
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    {!! Form::select(NULL, filter_vms_areas(), NULL, ['data-column' => 2, 'placeholder' => '- Filter Area -', 'class' => 'form-control filter-area']) !!}
  </div>
</div>
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    {!! Form::select(NULL, filter_vms_types(), NULL, ['data-column' => 2, 'placeholder' => '- Filter Type -', 'class' => 'form-control filter-type']) !!}
  </div>
</div>
@endpush

@push('filter-function')
d.filter_area = $('#filter_area').val();
d.filter_type = $('#filter_type').val();
@endpush

@push('filter-data')
$('.filter-area').change(function () {
  table.column(2)
  .search( $(this).val() )
  .draw();
});
$('.filter-type').change(function () {
  table.column(3)
  .search( $(this).val() )
  .draw();
});
@endpush

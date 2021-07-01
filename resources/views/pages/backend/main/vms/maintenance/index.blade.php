@extends('layouts.pages.index', ['status' => 'true'])
@push('title', 'Vms Maintenances')

@push('content-head')
<th width="1"> Area </th>
<th width="1"> Type </th>
<th width="1" class="text-nowrap"> Start </th>
<th width="1" class="text-nowrap"> Selesai </th>
<th width="1" class="text-nowrap"> Selsih Waktu </th>
<th> VMS </th>
<th> Permasalahan </th>
<th> Tindakan </th>
<th> Keterangan </th>
@endpush

@push('content-body')
{ data: 'vms_areas'},
{ data: 'vms_types'},
{ data: 'date_start'},
{ data: 'date_end' },
{ data: 'time_difference' },
{ data: 'vms_directories' },
{ data: 'name' },
{ data: 'troubleshoot' },
{ data: 'description' },
@endpush


@push('filter-header')
<div class="col-md-3 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <label class="mr-3 mb-0 d-none d-md-block"> Filter </label>
    <div class="input-daterange input-group" id="ex_datepicker_start">
      <input type="text" id="date_start" class="form-control" name="date_start" autocomplete="off">
      <div class="input-group-append">
        <span class="input-group-text">
          <i class="la la-ellipsis-h"></i>
        </span>
      </div>
      <input type="text" id="date_end" class="form-control" name="date_end" autocomplete="off">
    </div>
  </div>
</div>
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
d.date_start = $('#date_start').val();
d.date_end = $('#date_end').val();
d.filter_area = $('#filter_area').val();
d.filter_type = $('#filter_type').val();
@endpush

@push('filter-data')
$('#date_start').change(function () { table.draw(); });
$('#date_end').change(function () { table.draw(); });
$('.filter-area').change(function () {
  table.column(3)
  .search( $(this).val() )
  .draw();
});
$('.filter-type').change(function () {
  table.column(4)
  .search( $(this).val() )
  .draw();
});
@endpush

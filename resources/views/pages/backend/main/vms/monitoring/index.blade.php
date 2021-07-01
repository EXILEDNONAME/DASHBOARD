@extends('layouts.custom.monitoring')
@push('title', 'VMS Monitorings')

@push('content-head')
<th width="1"> Status </th>
<th> Name </th>
<th width="1"> Area </th>
<th width="1"> Type </th>
@endpush

@push('content-body')
{
  data: 'status_device', orderable: true, 'className': 'align-middle text-center', 'width': '1',
  render: function ( data, type, row ) {
    if (type === 'Export') { return data == '1' ? "Online" : "Offline"; }
    return data;
  }
},
{ data: 'name' },
{ data: 'vms_areas' },
{ data: 'vms_types' },
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
  table.column(-2)
  .search( $(this).val() )
  .draw();
});
$('.filter-type').change(function () {
  table.column(-1)
  .search( $(this).val() )
  .draw();
});
@endpush

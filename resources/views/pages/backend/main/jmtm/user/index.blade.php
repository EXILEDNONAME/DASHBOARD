@extends('layouts.pages.index')
@push('title', 'JMTM Users')

@push('content-head')
<th> Device </th>
<th> Name </th>
<th> NPP </th>
<th> MAC </th>
<th> PC Name </th>
<th> PC Password </th>
<th> Description </th>
<th> Printer </th>
@endpush

@push('content-body')
{ data: 'jmtm_devices' },
{ data: 'name' },
{ data: 'npp' },
{ data: 'mac_address' },
{ data: 'pc_name' },
{ data: 'pc_password' },
{ data: 'description' },
{
  data: 'printer', orderable: true, 'className': 'align-middle text-center', 'width': '1',
  render: function ( data, type, row ) {
    if (type === 'Export') { return data == '1' ? "Yes" : "No"; }
    if ( data == 1 ) { return '<i class="fas fa-check"></i>'; }
    else { return ''; }
  }
},
@endpush

@push('filter-header')
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <select data-column="-3" class="form-control filter-printer">
      <option value=""> - Filter Printer - </option>
      <option value="1"> Yes </option>
      <option value="2"> No </option>
    </select>
  </div>
</div>
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    {!! Form::select(NULL, filter_jmtm_devices(), NULL, ['data-column' => 2, 'placeholder' => '- Filter Device -', 'class' => 'form-control filter-device']) !!}
  </div>
</div>
@endpush

@push('filter-function')
d.filter_printer = $('#filter_printer').val();
d.filter_device = $('#filter_device').val();
@endpush

@push('filter-data')
$('.filter-printer').change(function () {
  table.column(-3)
  .search( $(this).val() )
  .draw();
});
$('.filter-device').change(function () {
  table.column(2)
  .search( $(this).val() )
  .draw();
});
@endpush

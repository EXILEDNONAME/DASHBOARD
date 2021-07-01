@extends('layouts.custom.monitoring')
@push('title', 'Jasamarga Monitorings')

@push('content-head')
<th width="1"> Status </th>
<th> Name </th>
<th> IP Address </th>
<th> Description </th>
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
{ data: 'ip_address' },
{ data: 'description' },
@endpush

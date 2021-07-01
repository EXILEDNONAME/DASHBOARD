@extends('layouts.pages.index')
@push('title', 'Jasamarga Officials')

@push('content-head')
<th> Name </th>
<th> IP Address </th>
<th> MAC Address </th>
<th> Description </th>
<th width="1"> Port </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'ip_address' },
{ data: 'mac_address' },
{ data: 'description' },
{ data: 'port' },
@endpush

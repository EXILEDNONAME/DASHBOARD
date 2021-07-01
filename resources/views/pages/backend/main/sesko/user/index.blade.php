@extends('layouts.pages.index')
@push('title', 'Sesko Users')

@push('content-head')
<th> Location </th>
<th> Packet </th>
<th> Name </th>
<th> IP Address </th>
<th> MAC Address </th>
<th> TV-Username </th>
<th> TV-Password </th>
<th> TV-Include </th>
@endpush

@push('content-body')
{ data: 'id_location' },
{ data: 'id_packet' },
{ data: 'name' },
{ data: 'ip_address' },
{ data: 'mac_address' },
{ data: 'tv_username' },
{ data: 'tv_password' },
{ data: 'tv_include' },
@endpush

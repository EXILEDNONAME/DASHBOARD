@extends('layouts.pages.index', ['header' => 'true'])
@push('title', 'Management Users')

@push('content-head')
<th> Access </th>
<th> Name </th>
<th> Username </th>
<th> Email </th>
<th> Phone </th>
@endpush

@push('content-body')
{ data: 'accesses' },
{ data: 'name' },
{ data: 'username' },
{ data: 'email' },
{ data: 'phone' },
@endpush

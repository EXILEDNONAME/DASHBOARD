@extends('layouts.pages.index')
@push('title', 'Table Single Relations')

@push('content-head')
<th> Table General </th>
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'dummy_table_generals' },
{ data: 'name' },
{ data: 'description' },
@endpush

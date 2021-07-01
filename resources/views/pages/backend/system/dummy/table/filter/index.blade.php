@extends('layouts.pages.index', ['status' => 'true'])
@push('title', 'Table Filters')

@push('content-head')
<th> Table General </th>
<th> Table Single Relation </th>
<th> Table Multi Relation </th>
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'dummy_table_generals' },
{ data: 'dummy_table_single_relations' },
{ data: 'dummy_table_multi_relations' },
{ data: 'name' },
{ data: 'description' },
@endpush

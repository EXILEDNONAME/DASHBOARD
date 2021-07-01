@extends('layouts.pages.index')
@push('title', 'Table Multi Relations')

@push('content-head')
<th> Table General </th>
<th> Table Single Relation </th>
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'dummy_table_generals' },
{ data: 'dummy_table_single_relations' },
{ data: 'name' },
{ data: 'description' },
@endpush

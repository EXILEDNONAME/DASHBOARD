@extends('layouts.pages.index')
@push('title', 'Jasamarga Intercomes')

@push('content-head')
<th> Name </th>
<th> Location </th>
<th> Section </th>
<th width="1" class="text-nowrap"> No. Intercome </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'location' },
{ data: 'section' },
{ data: 'no_intercome' },
@endpush

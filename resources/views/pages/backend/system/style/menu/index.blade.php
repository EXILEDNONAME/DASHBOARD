@extends('layouts.custom.blank')
@push('title', 'Management Menus')

@push('content-body')
<div class="d-flex flex-column-fluid">
  <div class="container-fluid">
    {!! Menu::render() !!}
  </div>
  </div>
@endpush

@push('js')
    {!! Menu::scripts() !!}
@endpush

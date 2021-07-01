@extends('layouts.default')

@push('content')
<div class="row">
  <div class="col-xl-12">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b card-sticky" id="kt_page_sticky_card">
      @stack('content-body')
    </div>
  </div>
</div>
@endpush

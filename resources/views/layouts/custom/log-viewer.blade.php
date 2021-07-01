@extends('layouts.default', ['header' => 'true'])

@push('content')
<div class="row">
  <div class="col-xl-12">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b card-sticky" id="kt_page_sticky_card">
      <div class="card-header" style="">
        <div class="card-title">
          <h5 class="text-dark font-weight-bold"> @stack('header-title') </h5>
        </div>

        <div class="card-toolbar">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('dashboard/statistics')) ? 'active' : '' }}" href="/dashboard/statistics">
                <span class="nav-icon">
                  <i class="flaticon2-chat-1"></i>
                </span>
                <span class="nav-text"> Main </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('dashboard/statistics/logs*')) ? 'active' : '' }}" href="/dashboard/statistics/logs">
                <span class="nav-icon">
                  <i class="flaticon2-layers-1"></i>
                </span>
                <span class="nav-text"> Logs </span>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="card-body">
        @stack('content-body')
      </div>

    </div>
  </div>
</div>


@endpush

@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
@endpush

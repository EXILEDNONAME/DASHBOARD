@extends('layouts.custom.profile', ['page' => 'profile'])
@push('title', $data->name )

@push('content-body')
<div class="d-flex flex-row">

  @include('pages.backend.system.profile.profile-menu')

  <div class="flex-row-fluid ml-lg-8">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-custom card-stretch">
          <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
              <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
              <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
            </div>
          </div>

          <form method="POST" action="{{ URL::current() }}/{{ $data->id }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <div class="card-body">
              <input class="form-control" name="created_by" type="hidden" value="1">
              <div class="kt-section__body">

                <div class="form-group row">
                  <label class="col-lg-3 col-form-label"> Username </label>
                  <div class="col-lg-9">
                    <input class="form-control" required="required" name="username" type="text" value="{{ Auth::User()->username }}">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-3 col-form-label"> Name </label>
                  <div class="col-lg-9">
                    <input class="form-control" required="required" name="name" type="text" value="{{ Auth::User()->name }}">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-3 col-form-label"> Email </label>
                  <div class="col-lg-9">
                    <input class="form-control" required="required" name="email" type="text" value="{{ Auth::User()->email }}">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-3 col-form-label"> Phone </label>
                  <div class="col-lg-9">
                    <input class="form-control" required="required" name="phone" type="text" value="{{ Auth::User()->phone }}">
                  </div>
                </div>

              </div>
            </form>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endpush

@push('js')
<script src="/assets/backend/js/pages/custom/profile/profile.js?v=7.0.5"></script>
<script src="/assets/backend/js/pages/widgets.js?v=7.0.5"></script>
@endpush

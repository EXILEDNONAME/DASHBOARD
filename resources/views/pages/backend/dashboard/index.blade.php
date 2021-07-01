@extends('layouts.default')
@push('title', 'Dashboard')

@push('css')
<link href="/assets/backend/plugins/custom/datatables/datatables.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
@endpush

@push('content')

@if (Auth::user()->accesses->name == 'Full-Administrator')
@include('pages.backend.dashboard.access.full-administrator')
@endif

@if (Auth::user()->accesses->name == 'User-VMS')
@include('pages.backend.dashboard.access.user-vms')
@endif

@endpush


@push('js')
<script src="/assets/backend/js/pages/features/miscellaneous/bootstrap-notify.js?v=7.0.5"></script>
<script src="/assets/backend/js/pages/features/miscellaneous/toastr.js?v=7.0.5"></script>
<script src="/assets/backend/plugins/custom/datatables/datatables.bundle.js?v=7.0.5"></script>
<script src="/assets/backend/js/pages/crud/forms/widgets/bootstrap-datepicker.js?v=7.0.5"></script>
<script src="/assets/backend/js/pages/crud/datatables/search-options/advanced-search.js?v=7.0.5"></script>
@endpush

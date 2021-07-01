@extends('layouts.pages.show', ['status' => 'true'])
@push('title', 'Vms Maintenances')

@push('content-body')
<div class="table-responsive">
  <table width="100%" class="table table-stiped table-bordered">
    <tr>
      <td class="align-middle font-weight-bold"> Area </td>
      <td class="align-middle"> {{ $data->vms_directories->vms_areas->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Type </td>
      <td class="align-middle"> {{ $data->vms_directories->vms_types->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Date Start </td>
      <td class="align-middle"> {{ \Carbon\Carbon::parse($data->date_start)->format('d F Y, H:i') }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Date End </td>
      <td class="align-middle"> {{ \Carbon\Carbon::parse($data->date_end)->format('d F Y, H:i') }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> VMS </td>
      <td class="align-middle"> {{ $data->vms_directories->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Name </td>
      <td class="align-middle"> {{ $data->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Troubleshoot </td>
      <td class="align-middle"> {{ $data->troubleshoot }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Description </td>
      <td class="align-middle"> {{ $data->description }} </td>
    </tr>
    @include('extensions.datatable.page-show.main')
  </table>
</div>
@endpush

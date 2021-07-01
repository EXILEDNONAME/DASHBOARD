@extends('layouts.pages.show')
@push('title', 'JMTM Users')

@push('content-body')
<div class="table-responsive">
  <table width="100%" class="table table-stiped table-bordered">
    <tr>
      <td class="align-middle font-weight-bold"> Device </td>
      <td class="align-middle"> {{ $data->jmtm_devices->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Name </td>
      <td class="align-middle"> {{ $data->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> NPP </td>
      <td class="align-middle"> {{ $data->npp }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> IP Address </td>
      <td class="align-middle"> {{ $data->ip_address }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> MAC Address </td>
      <td class="align-middle"> {{ $data->mac_address }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> PC Name </td>
      <td class="align-middle"> {{ $data->pc_name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> PC Password </td>
      <td class="align-middle"> {{ $data->pc_password }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Printer </td>
      @if ( $data->printer == 1 ) <td class="align-middle"> Yes </td>
      @else <td class="align-middle"> No </td>
      @endif
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Description </td>
      <td class="align-middle"> {{ $data->description }} </td>
    </tr>
    @include('extensions.datatable.page-show.main')
  </table>
</div>
@endpush

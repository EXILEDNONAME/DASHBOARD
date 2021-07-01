@extends('layouts.pages.show')
@push('title', 'Jasamarga Intercomes')

@push('content-body')
<div class="table-responsive">
  <table width="100%" class="table table-stiped table-bordered">
    <tr>
      <td class="align-middle font-weight-bold"> Name </td>
      <td class="align-middle"> {{ $data->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Location </td>
      <td class="align-middle"> {{ $data->location }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Section </td>
      <td class="align-middle"> {{ $data->section }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> No. Intercome </td>
      <td class="align-middle"> {{ $data->no_intercome }} </td>
    </tr>
    @include('extensions.datatable.page-show.main')
  </table>
</div>
@endpush

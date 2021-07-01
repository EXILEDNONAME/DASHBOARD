@extends('layouts.default')

@push('css')
<link href="/assets/backend/plugins/custom/datatables/datatables.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
@endpush

@push('content')
@if ($message = Session::get('success'))
<div id="toast-container-effect" class="toast-bottom-right">
  <div class="toast toast-success" aria-live="polite">
    <div class="toast-message">{{ $message }}</div>
  </div>
</div>
@endif

@if ($message = Session::get('error'))
<div id="toast-container-effect" class="toast-bottom-right">
  <div class="toast toast-error" aria-live="polite">
    <div class="toast-message">{{ $message }}</div>
  </div>
</div>
@endif

<div class="row">
  <div class="col-xl-12">
    <div class="card card-custom" data-card="true" id="kt_card_3">

      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">  {{ trans('default.title.page-index') }} </h3>
        </div>

        <div class="card-toolbar">
          <a id="file-refresh" class="btn btn-sm btn-icon btn-clean btn-icon-md"  data-toggle="tooltip" title="{{ trans('default.label.refresh') }}"><i class="la la-refresh"></i></a>
          <div class="dropdown dropdown-inline">
            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-download"  data-toggle="tooltip" title="{{ trans('default.label.export') }}"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <ul class="navi navi-hover py-5">
                <li class="navi-item" data-toggle="tooltip" title="{{ trans('default.button.export.copy-description') }}">
                  <a href="javascript:void(0);" id="export_copy" class="navi-link">
                    <i class="navi-icon fa fa-copy"></i> {{ trans('default.button.export.copy') }}
                  </a>
                </li>
                <li class="navi-item" data-toggle="tooltip" title="{{ trans('default.button.export.excel-description') }}">
                  <a href="javascript:void(0);" id="export_excel" class="navi-link">
                    <i class="navi-icon fa fa-file-excel"></i> {{ trans('default.button.export.excel') }}
                  </a>
                </li>
                <li class="navi-item" data-toggle="tooltip" title="{{ trans('default.button.export.pdf-description') }}">
                  <a href="javascript:void(0);" id="export_pdf" class="navi-link">
                    <i class="navi-icon fa fa-file-pdf"></i> {{ trans('default.button.export.pdf') }}
                  </a>
                </li>
                <li class="navi-item" data-toggle="tooltip" title="{{ trans('default.button.export.csv-description') }}">
                  <a href="javascript:void(0);" id="export_csv" class="navi-link">
                    <i class="navi-icon fa fa-file"></i> {{ trans('default.button.export.csv') }}
                  </a>
                </li>
                <li class="navi-item" data-toggle="tooltip" title="{{ trans('default.button.export.print-description') }}">
                  <a href="javascript:void(0);" id="export_print" class="navi-link">
                    <i class="navi-icon fa fa-print"></i> {{ trans('default.button.export.print') }}
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <a class="btn btn-sm btn-icon btn-clean btn-light-md" data-card-tool="toggle"><i class="fas fa-caret-down"></i></a>
        </div>
      </div>

      <div class="card-body">

        <div class="row">
          <div class="col-lg-9">
            <div class="row align-items-center">

              @stack('filter-header')

              <div class="col-md-1 my-1 my-md-0">
                <div class="d-flex align-items-center">
                  <button type="reset" name="reset" id="reset" class="form-control btn btn-sm btn-outline-info" data-toggle="tooltip" title="{{ trans('default.button.reset-filter') }}">
                    <i class="la la-refresh"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>

        <div class="table-responsive">
          <table width="100%" class="table table-striped-table-bordered table-hover table-checkable" id="exilednoname">
            <thead>
              <tr>
                <th class="no-export"> </th>
                <th> No. </th>
                @if ( !empty($status) && $status == 'true')
                <th class="no-export"> Status </th>
                @endif
                @stack('content-head')
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endpush

@push('js')
<script src="/assets/backend/js/pages/features/miscellaneous/bootstrap-notify.js?v=7.0.5"></script>
<script src="/assets/backend/js/pages/features/miscellaneous/toastr.js?v=7.0.5"></script>
<script src="/assets/backend/plugins/custom/datatables/datatables.bundle.js?v=7.0.5"></script>
<script src="/assets/backend/js/pages/crud/forms/widgets/bootstrap-datepicker.js?v=7.0.5"></script>
<script src="/assets/backend/js/pages/crud/datatables/search-options/advanced-search.js?v=7.0.5"></script>

<script>
$(document).ready(function() {
  $('#toast-container-effect').fadeOut(5000);
});

"use strict";
var KTDatatablesExtensionsKeytable = function() {

  var initTable2 = function() {
    var table = $('#exilednoname').DataTable({
      processing: true,
      serverSide: true,
      searching: true,
      rowId: 'id',
      select: {
        style: 'multi',
        selector: 'td:first-child .checkable',
      },
      ajax: {
        url: "{{ URL::current() }}",
        "data" : function (d) {
          d.filter_active = $('#filter_active').val();
          @stack('filter-function')
          @if ( !empty($status) && $status == 'true')
          d.filter_status = $('.filter-status').val();
          @endif
        }
      },
      headerCallback: function(thead, data, start, end, display) {
        thead.getElementsByTagName('th')[0].innerHTML = `
        <label class="checkbox checkbox-single checkbox-solid checkbox-primary mb-0">
        <input type="checkbox" value="" class="group-checkable"/>
        <span></span>
        </label>`;
      },

      "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
      buttons: [
        {
          extend: 'print',
          exportOptions: {
            columns: "thead th:not(.no-export)"
          },
        },
        {
          extend: 'copyHtml5',
          autoClose: 'true',
          exportOptions: {
            columns: "thead th:not(.no-export)"
          },
        },
        {
          extend: 'excelHtml5',
          exportOptions: {
            columns: "thead th:not(.no-export)"
          },
        },
        {
          extend: 'csvHtml5',
          exportOptions: {
            columns: "thead th:not(.no-export)"
          },
        },
        {
          extend: 'pdfHtml5',
          exportOptions: {
            columns: "thead th:not(.no-export)"
          },
        },
        {
          extend: 'pdfHtml5',
          exportOptions: {
            columns: "thead th:not(.no-export)",
            rows: { selected: true }
          },
        },
        {
          extend: 'excelHtml5',
          exportOptions: {
            columns: "thead th:not(.no-export)",
            rows: { selected: true }
          },
        },
        {
          extend: 'copyHtml5',
          autoClose: 'true',
          exportOptions: {
            columns: "thead th:not(.no-export)",
            rows: { selected: true }
          },
        },
        {
          extend: 'print',
          exportOptions: {
            columns: "thead th:not(.no-export)",
            rows: { selected: true }
          },
        },
      ],
      @stack('column-defs')
      columns: [
        {
          data: 'checkbox', orderable: false, orderable: false, searchable: false, 'width': '1',
          render : function ( data, type, row, meta) { return '<label class="checkbox checkbox-single checkbox-primary mb-0"><input type="checkbox" data-id="' + row.id + '" class="checkable"><span></span></label>'; },
        },
        {
          data: 'autonumber', orderable: false, orderable: false, searchable: false, 'width': '1',
          render: function (data, type, row, meta) {
            return meta.row + meta.settings._iDisplayStart + 1;
          }
        },
        @if ( !empty($status) && $status == 'true')
        {
          data: 'status', orderable: true, 'className': 'align-middle', 'width': '1',
          render: function ( data, type, row ) {
            if ( data == 0) { return ''; }
            if ( data == 2 ) { return '<a href="javascript:void(0);" id="status_done" data-toggle="tooltip" data-original-title="Done" data-id="' + row.id + '"><span class="label label-outline-warning label-pill label-inline"> {{ trans("default.label.pending") }} </span></a>'; }
            if ( data == 1 ) { return '<a href="javascript:void(0);" id="status_pending" data-toggle="tooltip" data-original-title="Pending" data-id="' + row.id + '"><span class="label label-outline-success label-pill label-inline"> {{ trans("default.label.done") }} </span></a>'; }
          }
        },
        @endif
        @stack('content-body')
      ],
      order: [[1, 'asc']]
    });

    $('.filter-active').change(function () {
      table.column(-2).search( $(this).val() ).draw();
    });

    @stack('filter-data')

    @if ( !empty($status) && $status == 'true')
    $('.filter-status').change(function () {
      table.column(2)
      .search( $(this).val() )
      .draw();
    });
    @endif

    $('#reset').click(function(){
      $('.filter-active').val('');
      $('.filter-device').val('');
      $('.filter-location').val('');
      $('.filter-packet').val('');
      $('.filter-area').val('');
      $('.filter-printer').val('');
      $('.filter-status').val('');
      $('.filter-type').val('');
      $('#date_start').val('');
      $('#date_end').val('');
      table.search( '' ).columns().search( '' ).draw();
    });

    $("#file-refresh").on("click", function() { table.ajax.reload(); });
    $('#export_print').on('click', function(e) { e.preventDefault(); table.button(0).trigger(); });
    $('#export_copy').on('click', function(e) { e.preventDefault(); table.button(1).trigger(); });
    $('#export_excel').on('click', function(e) { e.preventDefault(); table.button(2).trigger(); });
    $('#export_csv').on('click', function(e) { e.preventDefault(); table.button(3).trigger(); });
    $('#export_pdf').on('click', function(e) { e.preventDefault(); table.button(4).trigger(); });
    $('#export_selected_pdf').on('click', function(e) { e.preventDefault(); table.button(5).trigger(); });
    $('#export_selected_excel').on('click', function(e) { e.preventDefault(); table.button(6).trigger(); });
    $('#export_selected_copy').on('click', function(e) { e.preventDefault(); table.button(7).trigger(); });
    $('#export_selected_print').on('click', function(e) { e.preventDefault(); table.button(8).trigger(); });

    table.on('change', '.group-checkable', function() {
      var set = $(this).closest('table').find('td:first-child .checkable');
      var checked = $(this).is(':checked');

      $(set).each(function() {
        if (checked) {
          $(this).prop('checked', true);
          table.rows($(this).closest('tr')).select();
          var checkedNodes = table.rows('.selected').nodes();
          var count = checkedNodes.length;
          $('#kt_datatable_selected_records').html(count);
          if (count > 0) {
            $('#kt_datatable_group_action_form').collapse('show');
          }
        }
        else {
          $(this).prop('checked', false);
          table.rows($(this).closest('tr')).deselect();
          $('#kt_datatable_group_action_form').collapse('hide');
        }
      });
    });

    table.on('draw.dt', function() {
      $('#kt_datatable_group_action_form').collapse('hide');
    });

    table.on('change', '.checkable', function() {
      var checkedNodes = table.rows('.selected').nodes();
      var count = checkedNodes.length;
      $('#kt_datatable_selected_records').html(count);
      if (count > 0) {
        $('#kt_datatable_group_action_form').collapse('show');
      } else {
        $('#kt_datatable_group_action_form').collapse('hide');
      }
    });

    $('#kt_datatable_fetch_modal').on('show.bs.modal', function(e) {
      var exilednonameArr = [];
      $(".selected").each(function() {
        exilednonameArr.push($(this).attr('id'));
      });
      var strEXILEDNONAME = exilednonameArr.join(",");
      console.log(strEXILEDNONAME);
    });

    $('body').on('click', '#status_done', function () {
      var id = $(this).data("id");
      if(confirm("Item will be set to Done")){
        $.ajax({
          type: "get",
          url: "{{ URL::current() }}/status-done/"+id,
          processing: true,
          serverSide: true,
          success: function (data) {
            var oTable = $('#exilednoname').dataTable();
            oTable.fnDraw(false);
            toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
            toastr.success("{{ trans('default.notification.success.status-done') }}");
          },
          error: function (data) {
            toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
            toastr.error("{{ trans('default.notification.error.restrict') }}");
          }
        });
      }
    });

    $('body').on('click', '#status_pending', function () {
      var id = $(this).data("id");
      if(confirm("Item will be set to Pending!")){
        $.ajax({
          type: "get",
          url: "{{ URL::current() }}/status-pending/"+id,
          processing: true,
          serverSide: true,
          success: function (data) {
            var oTable = $('#exilednoname').dataTable();
            oTable.fnDraw(false);
            toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
            toastr.success("{{ trans('default.notification.success.status-pending') }}");
          },
          error: function (data) {
            toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
            toastr.error("{{ trans('default.notification.error.restrict') }}");
          }
        });
      }
    });

    $('body').on('click', '#enable', function () {
      var id = $(this).data("id");
      $.ajax({
        type: "get",
        url: "{{ URL::current() }}/enable/"+id,
        processing: true,
        serverSide: true,
        success: function (data) {
          var oTable = $('#exilednoname').dataTable();
          oTable.fnDraw(false);
          toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
          toastr.success("{{ trans('default.notification.success.active-enable') }}");
        },
        error: function (data) {
          toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
          toastr.error("{{ trans('default.notification.error.restrict') }}");
        }
      });
    });

    $('body').on('click', '#disable', function () {
      var id = $(this).data("id");
      $.ajax({
        type: "get",
        url: "{{ URL::current() }}/disable/"+id,
        processing: true,
        serverSide: true,
        success: function (data) {
          var oTable = $('#exilednoname').dataTable();
          oTable.fnDraw(false);
          toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
          toastr.success("{{ trans('default.notification.success.active-disable') }}");
        },
        error: function (data) {
          toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
          toastr.error("{{ trans('default.notification.error.restrict') }}");
        }
      });
    });

    $('.delete-all').on('click', function(e) {
      var exilednonameArr = [];
      $(".selected").each(function() {
        exilednonameArr.push($(this).attr('id'));
      });
      var strEXILEDNONAME = exilednonameArr.join(",");
      if (confirm('Are you sure you want to permanently delete this comment?')){
        $.ajax({
          url: "{{ URL::current() }}/deleteall",
          type: 'get',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: 'EXILEDNONAME='+strEXILEDNONAME,
          success: function (data) {
            var oTable = $('#exilednoname').dataTable();
            oTable.fnDraw(false);
            toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
            toastr.success("{{ trans('default.notification.success.delete-all') }}");
          },
          error: function (data) {
            toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
            toastr.error("{{ trans('default.notification.error.restrict') }}");
          }
        });
      }
    });

    $('body').on('click', '#delete', function () {
      var id = $(this).data("id");

      @if (request()->is('dashboard/management/users*'))
      if ( id == 1) {
        toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
        toastr.error("{{ trans('default.notification.error.restrict') }}");
      }
      else {
        if(confirm("Are You sure want to delete !")){
          $.ajax({
            type: "get",
            url: "{{ URL::current() }}/delete/"+id,
            success: function (data) {
              var oTable = $('#exilednoname').dataTable();
              oTable.fnDraw(false);
              toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
              toastr.success("{{ trans('default.notification.success.delete') }}");
            },
            error: function (data) {
              toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
              toastr.error("{{ trans('default.notification.error.restrict') }}");
            }
          });
        }
      }
      @else
      if(confirm("Are You sure want to delete !")){
        $.ajax({
          type: "get",
          url: "{{ URL::current() }}/delete/"+id,
          success: function (data) {
            var oTable = $('#exilednoname').dataTable();
            oTable.fnDraw(false);
            toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
            toastr.success("{{ trans('default.notification.success.delete') }}");
          },
          error: function (data) {
            toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
            toastr.error("{{ trans('default.notification.error.restrict') }}");
          }
        });
      }
      @endif
    });

  };

  return {
    init: function() {
      initTable2();
    },
  };

}();

jQuery(document).ready(function() {
  KTDatatablesExtensionsKeytable.init();
});
</script>
@endpush

<div class="row">
  <div class="col-md-3">
    <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
      <div class="alert-icon">
        <span class="svg-icon svg-icon-success">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <rect x="0" y="0" width="24" height="24"></rect>
              <circle fill="#000000" cx="9" cy="15" r="6"></circle>
              <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
            </g>
          </svg>
        </span>
      </div>
      <div class="alert-text">
        Hi <b>{{ Auth::User()->name }}</b>, <br>
        <span class="text-muted"> App Version 1.0.0 </span>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
      <div class="alert-icon">
        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Mail-opened.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <rect x="0" y="0" width="24" height="24"/>
            <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3"/>
            <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000"/>
          </g>
        </svg><!--end::Svg Icon--></span>
      </div>
      <div class="alert-text">
        <span class="font-weight-bold"> Inbox </span><br> <span class="text-muted"><s> 0 Messages </s></span>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_3">

      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label"> Monitoring VMS </h3>
        </div>

        <div class="card-toolbar">
          <a id="vms-file-refresh" class="btn btn-sm btn-icon btn-clean btn-icon-md"  data-toggle="tooltip" title="{{ trans('default.label.refresh') }}"><i class="la la-refresh"></i></a>
          <div class="dropdown dropdown-inline">
            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-download"  data-toggle="tooltip" title="{{ trans('default.label.export') }}"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <ul class="navi navi-hover py-5">
                <li class="navi-item" data-toggle="tooltip" title="{{ trans('default.button.export.copy-description') }}">
                  <a href="javascript:void(0);" id="vms_export_copy" class="navi-link">
                    <i class="navi-icon fa fa-copy"></i> {{ trans('default.button.export.copy') }}
                  </a>
                </li>
                <li class="navi-item" data-toggle="tooltip" title="{{ trans('default.button.export.excel-description') }}">
                  <a href="javascript:void(0);" id="vms_export_excel" class="navi-link">
                    <i class="navi-icon fa fa-file-excel"></i> {{ trans('default.button.export.excel') }}
                  </a>
                </li>
                <li class="navi-item" data-toggle="tooltip" title="{{ trans('default.button.export.pdf-description') }}">
                  <a href="javascript:void(0);" id="vms_export_pdf" class="navi-link">
                    <i class="navi-icon fa fa-file-pdf"></i> {{ trans('default.button.export.pdf') }}
                  </a>
                </li>
                <li class="navi-item" data-toggle="tooltip" title="{{ trans('default.button.export.csv-description') }}">
                  <a href="javascript:void(0);" id="vms_export_csv" class="navi-link">
                    <i class="navi-icon fa fa-file"></i> {{ trans('default.button.export.csv') }}
                  </a>
                </li>
                <li class="navi-item" data-toggle="tooltip" title="{{ trans('default.button.export.print-description') }}">
                  <a href="javascript:void(0);" id="vms_export_print" class="navi-link">
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

              <div class="col-md-2 my-2 my-md-0">
                <div class="d-flex align-items-center">
                  {!! Form::select(NULL, filter_vms_areas(), NULL, ['data-column' => 2, 'placeholder' => '- Filter Area -', 'class' => 'form-control filter-area']) !!}
                </div>
              </div>
              <div class="col-md-2 my-2 my-md-0">
                <div class="d-flex align-items-center">
                  {!! Form::select(NULL, filter_vms_types(), NULL, ['data-column' => 2, 'placeholder' => '- Filter Type -', 'class' => 'form-control filter-type']) !!}
                </div>
              </div>

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
          <table width="100%" class="table table-striped-table-bordered table-hover table-checkable" id="exilednoname_monitoring_vms">
            <thead>
              <tr>
                <th class="no-export"> </th>
                <th> No. </th>
                <th width="1"> Status </th>
                <th> Name </th>
                <th width="1"> Area </th>
                <th width="1"> Type </th>
              </tr>
            </thead>
          </table>
        </div>
      </div>


    </div>
  </div>
</div>

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

  var initTable1 = function() {
    var table = $('#exilednoname_monitoring_vms').DataTable({
      processing: true,
      serverSide: true,
      searching: true,
      rowId: 'id',
      select: {
        style: 'multi',
        selector: 'td:first-child .checkable',
      },
      ajax: {
        url: "/dashboard/vms/monitorings",
        "data" : function (d) {
          d.filter_area = $('#filter_area').val();
          d.filter_type = $('#filter_type').val();
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
            columns: "thead th:not(.no-export)",
            orthogonal: "Export"
          },
        },
        {
          extend: 'copyHtml5',
          autoClose: 'true',
          exportOptions: {
            columns: "thead th:not(.no-export)",
            orthogonal: "Export"
          },
        },
        {
          extend: 'excelHtml5',
          exportOptions: {
            columns: "thead th:not(.no-export)",
            orthogonal: "Export"
          },
        },
        {
          extend: 'csvHtml5',
          exportOptions: {
            columns: "thead th:not(.no-export)",
            orthogonal: "Export"
          },
        },
        {
          extend: 'pdfHtml5',
          exportOptions: {
            columns: "thead th:not(.no-export)",
            orthogonal: "Export"
          },
        },
        {
          extend: 'pdfHtml5',
          exportOptions: {
            columns: "thead th:not(.no-export)",
            orthogonal: "Export",
            rows: { selected: true }
          },
        },
        {
          extend: 'excelHtml5',
          exportOptions: {
            columns: "thead th:not(.no-export)",
            orthogonal: "Export",
            rows: { selected: true }
          },
        },
        {
          extend: 'copyHtml5',
          autoClose: 'true',
          exportOptions: {
            columns: "thead th:not(.no-export)",
            orthogonal: "Export",
            rows: { selected: true }
          },
        },
        {
          extend: 'print',
          exportOptions: {
            columns: "thead th:not(.no-export)",
            orthogonal: "Export",
            rows: { selected: true }
          },
        },
      ],
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
        { data: 'status_device' },
        { data: 'name' },
        { data: 'vms_areas' },
        { data: 'vms_types' },
      ],
      order: [[1, 'asc']]
    });

    $('.filter-area').change(function () {
      table.column(-2)
      .search( $(this).val() )
      .draw();
    });
    $('.filter-type').change(function () {
      table.column(-1)
      .search( $(this).val() )
      .draw();
    });

    $('#reset').click(function(){
      $('.filter-area').val('');
      $('.filter-type').val('');
      table.search( '' ).columns().search( '' ).draw();
    });

    $("#vms-file-refresh").on("click", function() { table.ajax.reload(); });
    $('#vms_export_print').on('click', function(e) { e.preventDefault(); table.button(0).trigger(); });
    $('#vms_export_copy').on('click', function(e) { e.preventDefault(); table.button(1).trigger(); });
    $('#vms_export_excel').on('click', function(e) { e.preventDefault(); table.button(2).trigger(); });
    $('#vms_export_csv').on('click', function(e) { e.preventDefault(); table.button(3).trigger(); });
    $('#vms_export_pdf').on('click', function(e) { e.preventDefault(); table.button(4).trigger(); });
    $('#vms_export_selected_pdf').on('click', function(e) { e.preventDefault(); table.button(5).trigger(); });
    $('#vms_export_selected_excel').on('click', function(e) { e.preventDefault(); table.button(6).trigger(); });
    $('#vms_export_selected_copy').on('click', function(e) { e.preventDefault(); table.button(7).trigger(); });
    $('#vms_export_selected_print').on('click', function(e) { e.preventDefault(); table.button(8).trigger(); });

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
  };

  return {
    init: function() {
      initTable1();
    },
  };

}();

jQuery(document).ready(function() {
  KTDatatablesExtensionsKeytable.init();
});
</script>
@endpush

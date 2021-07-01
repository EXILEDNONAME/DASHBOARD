@extends('layouts.custom.log-viewer')
@push('title', 'Statistics')
@push('header-title', 'Logs')

@push('content-body')
<div class="table-responsive">
  <table class="table table-condensed table-hover table-stats">
    <thead>
      <tr>
        @foreach($headers as $key => $header)
        <th class="{{ $key == 'date' ? 'text-left' : 'text-center' }}">
          @if ($key == 'date') {{ $header }}
          @else <span class="level level-{{ $key }}"> {{ log_styler()->icon($key) }} {{ $header }} </span>
          @endif
        </th>
        @endforeach
        <th class="text-right">Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($rows as $date => $row)
      <tr>
        @foreach($row as $key => $value)
        <td class="{{ $key == 'date' ? 'text-left' : 'text-center' }}">
          @if ($key == 'date')
          {{ $value }}
          @elseif ($value == 0)
          <span class="level level-empty">{{ $value }}</span>
          @else
          <a href="{{ route('log-viewer::logs.filter', [$date, $key]) }}">
            <span class="level level-{{ $key }}">{{ $value }}</span>
          </a>
          @endif
        </td>
        @endforeach
        <td class="text-right">
          <a href="{{ route('log-viewer::logs.show', [$date]) }}"><span class="navi-icon mr-2"><i class="flaticon2-expand"></i></span></a>
          <a href="{{ route('log-viewer::logs.download', [$date]) }}"><span class="navi-icon"><i class="flaticon-download"></i></span></a>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="11" class="text-center">
          <span class="label label-default">{{ trans('log-viewer::general.empty-logs') }}</span>
        </td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>

<div id="delete-log-modal" class="modal fade">
  <div class="modal-dialog">
    <form id="delete-log-form" action="{{ route('log-viewer::logs.delete') }}" method="POST">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="date" value="">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">DELETE LOG FILE</h4>
        </div>
        <div class="modal-body">
          <p></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-default pull-left" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-sm btn-danger" data-loading-text="Loading&hellip;">DELETE FILE</button>
        </div>
      </div>
    </form>
  </div>
</div>

{{ $rows->render() }}
@endpush

@push('js')
<script>
$(function () {
  var deleteLogModal = $('#delete-log-modal'),
  deleteLogForm  = $('form#delete-log-form'),
  submitBtn      = deleteLogForm.find('button[type=submit]');

  $("a[href=#delete-log-modal]").on('click', function(event) {
    event.preventDefault();
    var date = $(this).data('log-date');
    deleteLogForm.find('input[name=date]').val(date);
    deleteLogModal.find('.modal-body p').html(
      'Are you sure you want to <span class="label label-danger">DELETE</span> this log file <span class="label label-primary">' + date + '</span> ?'
    );

    deleteLogModal.modal('show');
  });

  deleteLogForm.on('submit', function(event) {
    event.preventDefault();
    submitBtn.button('loading');

    $.ajax({
      url:      $(this).attr('action'),
      type:     $(this).attr('method'),
      dataType: 'json',
      data:     $(this).serialize(),
      success: function(data) {
        submitBtn.button('reset');
        if (data.result === 'success') {
          deleteLogModal.modal('hide');
          location.reload();
        }
        else {
          alert('AJAX ERROR ! Check the console !');
          console.error(data);
        }
      },
      error: function(xhr, textStatus, errorThrown) {
        alert('AJAX ERROR ! Check the console !');
        console.error(errorThrown);
        submitBtn.button('reset');
      }
    });

    return false;
  });

  deleteLogModal.on('hidden.bs.modal', function() {
    deleteLogForm.find('input[name=date]').val('');
    deleteLogModal.find('.modal-body p').html('');
  });
});
</script>
@endpush

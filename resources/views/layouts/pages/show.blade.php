@extends('layouts.default', ['header' => 'true'])

@push('content')
<div class="row">
  <div class="col-xl-12">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b card-sticky" id="kt_page_sticky_card">
      <div class="card-header" style="">
        <div class="card-title">
          <h5 class="text-dark font-weight-bold"> {{ trans('default.title.page-show') }} </h5>
        </div>

        <div class="card-toolbar">
          <a href="{{ URL::current() }}/../#" class="btn btn-light-primary font-weight-bolder mr-2">
            <i class="ki ki-long-arrow-back icon-xs"></i> {{ trans('default.button.back') }}
          </a>
          <a href="javascript(0):;" data-toggle="modal" class="btn btn-light-primary mr-2" data-target="#qrcode_modal"><i class="fas fa-qrcode"></i></a>
          <a href="javascript(0):;" data-toggle="modal" class="btn btn-light-primary mr-2" onclick="printData('printData')"><i class="fas fa-print"></i></a>

          <div class="btn-group">
            <button type="button" class="btn btn-light-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right" style="">
              <ul class="nav nav-hover flex-column">
                <li class="nav-item">
                  <a href="{{ URL::current() }}/edit" class="nav-link">
                    <i class="nav-icon flaticon2-contract"></i>
                    <span class="nav-text"> {{ trans('default.button.edit') }} </span>
                  </a>
                </li>
                <li class="nav-item">
                  <form method="POST" class="nav-link" action="{{ URL::current() }}/../{{ $data->id }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    @method('DELETE')
                    @csrf
                    <i class="nav-icon flaticon2-trash"></i>
                    <a href="" class="nav-text delete"> {{ trans('default.button.delete') }} </a>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div id="printData">
        <div class="card-body">
          @stack('content-body')
        </div>
      </div>

      <div class="modal fade" id="qrcode_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"> QR Code </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              </button>
            </div>
            <div class="modal-body">
              <div id="printQR">
                <p class="text-center"> {!! QrCode::size(300)->generate(URL::current()); !!} </p>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="printQR('printQR')"> Print </button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="row">

  <div class="col-xl-4">
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_3">
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label"> My Activity </h3>
        </div>
        <div class="card-toolbar">
          <a class="btn btn-sm btn-icon btn-clean btn-light-md" data-card-tool="toggle"><i class="fas fa-caret-down"></i></a>
        </div>
      </div>
      <div class="card-body">
        <div class="example-preview">
          <div class="timeline timeline-2">
            <div class="timeline-bar"></div>

            @php $activity = activities($model)->where('subject_id', $data->id)->take(5); @endphp
            @if (!empty($activity) && !empty($activity->count()))

            @foreach($activity as $item)
            <div class="timeline-item">

              @foreach($item['properties'] as $data_object)
              @if ($item->description == 'created')
              <span class="timeline-badge bg-success"></span>
              <div class="timeline-content justify-content-between">
                <span class="mr-3">
                  @if (!empty($item->causer->name))
                  <span class="text-muted"> {{ $item->created_at->diffForHumans() }}, {{ $item->causer->name }} </span><br>
                  Created New Item <b>{{ $data_object['name'] }}</b>
                  @else
                  <s> User Not Found </s>
                  @endif
                </span>
              </div>
              @endif
              @endforeach

              @if ($item->description == 'updated')
              <span class="timeline-badge bg-warning"></span>
              <div class="timeline-content justify-content-between">
                <span class="mr-3">
                  <span class="text-muted"> {{ $item->created_at->diffForHumans() }}, {{ $item->causer->name }} </span><br>
                  @if (!empty($item->causer->name))
                  Updated Item <b>{{ $item['properties']['old']['name'] }}</b> to <b>{{ $item['properties']['attributes']['name'] }}</b>
                  @else
                  <s> User Not Found </s>
                  @endif
                </span>
              </div>
              @endif
            </div>
            @endforeach

            @else
            <span class="text-muted"> No Recent Activities ... </span>
            @endif

          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endpush

@push('js')
<script>
function printData(divName) {
  var printContents = document.getElementById(divName).innerHTML;
  var originalContents = document.body.innerHTML;
  document.body.innerHTML = printContents;
  window.print();
  document.body.innerHTML = originalContents;
}
</script>

<script>
function printQR(divName){
  var myWindow=window.open('','','');
  myWindow.document.write(document.getElementById(divName).innerHTML);
  myWindow.document.close();
  myWindow.focus();
  myWindow.print();
  myWindow.document.close();
}

$('.delete').click(function(e){
  e.preventDefault() // Don't post the form, unless confirmed
  if (confirm('Are you sure?')) {
    // Post the form
    $(e.target).closest('form').submit() // Post the surrounding form
  }
});

</script>
@endpush

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

            @php $activity = activities($model)->take(5); @endphp
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
              @foreach($item['properties'] as $data_object)
              @if ($item->description == 'deleted')
              <span class="timeline-badge bg-danger"></span>
              <div class="timeline-content justify-content-between">
                <span class="mr-3">
                  <span class="text-muted"> {{ $item->created_at->diffForHumans() }}, {{ $item->causer->name }} </span><br>
                  @if (!empty($item->causer->name))
                  Deleted Item <b>{{ $data_object['name'] }}</b>
                  @else
                  <s> User Not Found </s>
                  @endif
                </span>
              </div>
              @endif
              @endforeach
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

  <div class="col-xl-8">
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_3">
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label"> Traffics </h3>
        </div>
        <div class="card-toolbar">
          <a class="btn btn-sm btn-icon btn-clean btn-light-md" data-card-tool="toggle"><i class="fas fa-caret-down"></i></a>
        </div>
      </div>
      <div class="card-body">
        <div id="chart"></div>
      </div>
    </div>
  </div>

</div>

@push('js')
<script src="/assets/backend/js/pages/widgets.js?v=7.0.5"></script>

<script>
"use strict";
const primary = '#6993FF';
const success = '#1BC5BD';
const info = '#8950FC';
const warning = '#FFA800';
const danger = '#F64E60';
// Class definition
// Class definition
function generateBubbleData(baseval, count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
    var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;;
    var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
    var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;
    series.push([x, y, z]);
    baseval += 86400000;
    i++;
  }
  return series;
}
function generateData(count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
    var x = 'w' + (i + 1).toString();
    var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
    series.push({
      x: x,
      y: y
    });
    i++;
  }
  return series;
}
var KTApexChartsDemo = function () {
  var _demo1 = function () {
    const apexChart = "#chart";

    var created = [{{ chart_created($model) }}];
    var options = {
      series: [
        { name: 'Created', data: created },
      ],
      chart: { height: 350, type: 'area' },
      dataLabels: { enabled: true },
      stroke: { curve: 'smooth' },
      xaxis: { categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], },
      colors: [success, warning, info]
    };
    var chart = new ApexCharts(document.querySelector(apexChart), options);
    chart.render();
  }
  return {
    init: function () {
      _demo1();
    }
  };
}();
jQuery(document).ready(function () { KTApexChartsDemo.init(); });
</script>
@endpush

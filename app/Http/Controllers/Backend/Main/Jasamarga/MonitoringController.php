<?php

namespace App\Http\Controllers\Backend\Main\Jasamarga;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

class MonitoringController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/jasamarga/monitorings';
    $this->path = 'pages.backend.main.jasamarga.monitoring';
    $this->model = 'App\Models\Backend\Main\Jasamarga\Official';
    $this->data = $this->model::where('active', 1)->get();
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index() {
    $model = $this->model;
    if(request()->ajax()) {
      return DataTables::of($this->data)

      ->addColumn('status_device', 'extensions.datatable.status-device')
      ->rawColumns(['status_device'])
      ->addIndexColumn()
      ->make(true);
    }
    return view($this->path . '.index', compact('model'));
  }

}

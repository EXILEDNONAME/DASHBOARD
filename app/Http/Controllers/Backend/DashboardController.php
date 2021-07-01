<?php

namespace App\Http\Controllers\Backend;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\TestEvent;

use App\User;

class DashboardController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware(['auth']);
    $this->url = '/dashboard';
    $this->path = 'pages.backend.dashboard';
    $this->model = 'App\User';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index(Request $request) {
    return view($this->path . '.index');
  }

  public function filemanager() {
    return view('pages.backend.system.file-manager.index');
  }

  /**
  **************************************************
  * @return Logout
  **************************************************
  **/

  public function logout() {
    Auth::logout();
    return redirect('login');
  }

}

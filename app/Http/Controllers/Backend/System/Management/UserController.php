<?php

namespace App\Http\Controllers\Backend\System\Management;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

Use App\User;

class UserController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/management/users';
    $this->path = 'pages.backend.system.management.user';
    $this->model = 'App\User';
    $this->data = $this->model::get();
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
      ->addColumn('checkbox', 'includes.datatable.checkbox')
      ->addColumn('action', 'includes.datatable.action')
      ->editColumn('accesses', function($order) { return $order->accesses->name; })
      ->rawColumns(['action', 'checkbox'])
      ->addIndexColumn()
      ->make(true);
    }
    return view($this->path . '.index', compact('model'));
  }

  /**
  **************************************************
  * @return Show
  **************************************************
  **/

  public function show($id) {
    $model = $this->model;
    $data = $this->model::findOrFail($id);
    return view($this->path . '.show', compact('data', 'model'));
  }

  /**
  **************************************************
  * @return Create
  **************************************************
  **/

  public function create() {
    $path = $this->path;
    return view($this->path . '.create', compact('path'));
  }

  /**
  **************************************************
  * @return Store
  **************************************************
  **/

  public function store(Request $request) {
    $users = [
      'id_access' => $request['id_access'],
      'username' => $request['username'],
      'name' => $request['name'],
      'email' => $request['email'],
      'phone' => $request['phone'],
      'api_token' => hash('sha256', Str::random(60)),
      'password' => Hash::make($request['password']),
      'address_1' => $request['address_1'],
      'address_2' => $request['address_2'],
    ];
    User::insert($users);
    return redirect($this->url)->with('success', trans('default.notification.success.item-created'));
  }

  /**
  **************************************************
  * @return Edit
  **************************************************
  **/

  public function edit($id) {
    $path = $this->path;
    $data = $this->model::findOrFail($id);
    return view($this->path . '.edit', compact('path', 'data'));
  }

  /**
  **************************************************
  * @return Update
  **************************************************
  **/

  public function update(Request $request, $id) {
    $validated = $request->validate([
      'name' => 'required|unique:.'. $this->model . '|min:3',
    ]);

    $data = $this->model::findOrFail($id);
    $update = $request->all();
    $data->update($update);
    return redirect($this->url)->with('success', trans('default.notification.success.item-updated'));
  }

  /**
  **************************************************
  * @return Destroy
  **************************************************
  **/

  public function destroy($id) {
    if ( $id == 1 ) {
      return redirect($this->url)->with('error', 'Restricted User!');
    }
    else {
      $this->model::destroy($id);
      return redirect($this->url)->with('success', trans('default.notification.success.item-deleted'));
    }
  }

  /**
  **************************************************
  * @return Enable
  * @return Disable
  * @return Status-Done
  * @return Status-Pending
  **************************************************
  **/

  public function enable($id) {
    $data = $this->model::where('id', $id)->update([ 'active' => 1 ]);
    return Response::json($data);
  }

  public function disable($id) {
    $data = $this->model::where('id', $id)->update([ 'active' => 2 ]);
    return Response::json($data);
  }

  public function status_done($id) {
    $data = $this->model::where('id', $id)->update([ 'status' => 1 ]);
    return Response::json($data);
  }

  public function status_pending($id) {
    $data = $this->model::where('id', $id)->update([ 'status' => 2 ]);
    return Response::json($data);
  }

  /**
  **************************************************
  * @return Delete
  **************************************************
  **/

  public function delete($id) {
    if ( $id == 1 ) { }
    else {
      $data = $this->model::where('id',$id)->delete();
      return Response::json($data);
    }
  }

  /**
  **************************************************
  * @return Delete-All
  **************************************************
  **/

  public function deleteall(Request $request) {
    if ( $exilednoname == 1 ) { }
    else {
      $exilednoname = $request->EXILEDNONAME;
      $this->model::whereIn('id',explode(",",$exilednoname))->delete();
      return Response::json($exilednoname);
    }
  }

}

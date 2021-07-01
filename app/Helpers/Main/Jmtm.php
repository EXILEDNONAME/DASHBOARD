<?php

use App\Models\Backend\Main\Jmtm\Device;
use App\Models\Backend\Main\Jmtm\User;

function jmtm_users_maintenances() {
  $items = DB::table('jmtm_users as a')
    ->join('jmtm_devices as b', 'b.id', '=', 'a.id_device')
    ->selectRaw('CONCAT("(JMTM) ", a.name, " - ", b.name) as concatname, a.id')
    ->where('a.active', 1)
    ->pluck('concatname', 'a.id');
  return $items;
}

function jmtm_devices() {
  $items = Device::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function jmtm_users() {
  $items = User::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function filter_jmtm_devices() {
  $items = Device::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

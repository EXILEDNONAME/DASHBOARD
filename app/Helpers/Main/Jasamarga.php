<?php

use App\Models\Backend\Main\Jasamarga\Device;
use App\Models\Backend\Main\Jasamarga\Location;
use App\Models\Backend\Main\Jasamarga\User;

function jasamarga_users_maintenances() {
  $items = DB::table('jasamarga_users as a')
    ->join('jasamarga_devices as b', 'b.id', '=', 'a.id_device')
    ->join('jasamarga_locations as c', 'c.id', '=', 'a.id_location')
    ->selectRaw('CONCAT("(", c.name, ") ", a.name, " - ", b.name) as concatname, a.id')
    ->where('a.active', 1)
    ->pluck('concatname', 'a.id');
  return $items;
}

function jasamarga_devices() {
  $items = Device::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function jasamarga_locations() {
  $items = Location::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function jasamarga_users() {
  $items = User::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function filter_jasamarga_devices() {
  $items = Device::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function filter_jasamarga_locations() {
  $items = Location::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

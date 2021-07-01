<?php

use App\Models\Backend\Main\Sesko\Location;
use App\Models\Backend\Main\Sesko\Packet;

function sesko_locations() {
  $items = Location::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function sesko_packets() {
  $items = Packet::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function filter_sesko_locations() {
  $items = Location::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function filter_sesko_packets() {
  $items = Packet::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

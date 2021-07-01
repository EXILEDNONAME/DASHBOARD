<?php

use App\Models\Backend\System\Dummy\Table\General;
use App\Models\Backend\System\Dummy\Table\SingleRelation;
use App\Models\Backend\System\Dummy\Table\MultiRelation;

function dummy_table_generals() {
  $items = General::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function dummy_table_single_relations() {
  $items = SingleRelation::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function dummy_table_multi_relations() {
  $items = MultiRelation::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

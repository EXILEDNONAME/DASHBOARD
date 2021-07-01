<?php

use App\Access;
use Spatie\Activitylog\Models\Activity;

function Accesses() {
  $items = Access::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function activities($model) {
  $items = $activity = Activity::where('subject_type', $model)->orderBy('created_at', 'desc')->get();
  return $items;
}

function haveAccess($name) {
  $id = Auth::User()->id_access;
  if ( Access::where('name', $name)->where('id', $id)->first()) {
    $items = Access::where('name', 'like', '%' . $name . '%')->where('id', $id)->first();
    return $items;
  }
}

function chart_created($model) {
  $items = $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-01%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-02%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-03%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-04%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-05%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-06%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-07%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-08%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-09%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-10%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-11%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-12%')->count();

  return $items;
}

function chart_updated($model) {
  $items = $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-01%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-02%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-03%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-04%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-05%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-06%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-07%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-08%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-09%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-10%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-11%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-12%')->count();

  return $items;
}

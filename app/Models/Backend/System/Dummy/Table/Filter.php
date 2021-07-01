<?php

namespace App\Models\Backend\System\Dummy\Table;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Backend\System\Dummy\Table\MultiRelation;

class Filter extends Model {

  use LogsActivity;

  protected $table = 'dummy_table_filters';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function dummy_table_multi_relations(){
      return $this->belongsTo(MultiRelation::class, 'id_multi_relation');
    }

}

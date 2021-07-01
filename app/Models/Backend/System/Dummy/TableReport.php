<?php

namespace App\Models\Backend\System\Dummy;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class TableReport extends Model {

  use LogsActivity;

  protected $table = 'dummy_table_reports';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}

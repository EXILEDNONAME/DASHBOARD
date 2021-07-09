<?php

namespace App\Models\Backend\System\Packet;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Province extends Model {

  use LogsActivity;

  protected $table = 'provinces';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}

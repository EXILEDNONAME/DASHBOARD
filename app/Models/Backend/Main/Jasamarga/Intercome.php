<?php

namespace App\Models\Backend\Main\Jasamarga;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Intercome extends Model {

  use LogsActivity;

  protected $table = 'jasamarga_intercomes';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}

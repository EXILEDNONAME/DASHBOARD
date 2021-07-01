<?php

namespace App\Models\Backend\Main\Jmtm;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Backend\Main\Jmtm\Device;

class User extends Model {

  use LogsActivity;

  protected $table = 'jmtm_users';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function jmtm_devices(){
    return $this->belongsTo(Device::class, 'id_device');
  }

}

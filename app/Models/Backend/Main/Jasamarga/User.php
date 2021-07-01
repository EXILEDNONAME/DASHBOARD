<?php

namespace App\Models\Backend\Main\Jasamarga;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Backend\Main\Jasamarga\Device;
use App\Models\Backend\Main\Jasamarga\Location;

class User extends Model {

  use LogsActivity;

  protected $table = 'jasamarga_users';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function jasamarga_devices(){
    return $this->belongsTo(Device::class, 'id_device');
  }

  public function jasamarga_locations(){
    return $this->belongsTo(Location::class, 'id_location');
  }

}

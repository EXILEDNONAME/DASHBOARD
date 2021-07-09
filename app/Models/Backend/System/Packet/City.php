<?php

namespace App\Models\Backend\System\Packet;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Backend\System\Packet\Province;

class City extends Model {

  use LogsActivity;

  protected $table = 'cities';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function provinces(){
    return $this->belongsTo(Province::class, 'id_province');
  }

}

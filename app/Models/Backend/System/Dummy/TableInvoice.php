<?php

namespace App\Models\Backend\System\Dummy;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class TableInvoice extends Model {

  use LogsActivity;

  protected $table = 'dummy_table_invoices';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}

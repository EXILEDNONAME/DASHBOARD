<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider {

    public function register() {

        // System
        require_once app_path() . '/Helpers/System/Default.php';
        require_once app_path() . '/Helpers/System/Dummy.php';

        // Main
        require_once app_path() . '/Helpers/Main/Jasamarga.php';
        require_once app_path() . '/Helpers/Main/Jmtm.php';
        require_once app_path() . '/Helpers/Main/Sesko.php';
        require_once app_path() . '/Helpers/Main/Vms.php';
    }

    public function boot() {
      Schema::defaultStringLength(191);
      config(['app.locale' => 'en']);
      Carbon::setLocale('en');
      date_default_timezone_set('Asia/Jakarta');
    }

}

<?php

use Arcanedev\LogViewer\Contracts\Utilities\Filesystem;

return [

  'storage-path'  => storage_path('logs'),

  'pattern'       => [
    'prefix'    => Filesystem::PATTERN_PREFIX,    // 'laravel-'
    'date'      => Filesystem::PATTERN_DATE,      // '[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]'
    'extension' => Filesystem::PATTERN_EXTENSION, // '.log'
  ],

  'locale'        => 'auto',
  'theme'         => 'auto',
  'route'         => [
    'enabled'    => true,
    'attributes' => [
      'prefix'     => '/dashboard/statistics',
      'middleware' => env('LOGVIEWER_MIDDLEWARE') ? explode(',', env('LOGVIEWER_MIDDLEWARE')) : 'null',
    ],
  ],

  'per-page'      => 30,
  'download'      => [
    'prefix'    => 'laravel-',
    'extension' => 'log',
  ],

  'menu'  => [
    'filter-route'  => 'log-viewer::logs.filter',
    'icons-enabled' => true,
  ],

  'icons' =>  [
    'all'       => 'fa fa-fw fa-list',                 // http://fontawesome.io/icon/list/
    'emergency' => 'fa fa-fw fa-bug',                  // http://fontawesome.io/icon/bug/
    'alert'     => 'fa fa-fw fa-bullhorn',             // http://fontawesome.io/icon/bullhorn/
    'critical'  => 'fa fa-fw fa-heartbeat',            // http://fontawesome.io/icon/heartbeat/
    'error'     => 'fa fa-fw fa-times-circle',         // http://fontawesome.io/icon/times-circle/
    'warning'   => 'fa fa-fw fa-exclamation-triangle', // http://fontawesome.io/icon/exclamation-triangle/
    'notice'    => 'fa fa-fw fa-exclamation-circle',   // http://fontawesome.io/icon/exclamation-circle/
    'info'      => 'fa fa-fw fa-info-circle',          // http://fontawesome.io/icon/info-circle/
    'debug'     => 'fa fa-fw fa-life-ring',            // http://fontawesome.io/icon/life-ring/
    ],

    'colors' =>  [
      'levels'    => [
        'empty'     => '#D1D1D1',
        'all'       => '#8A8A8A',
        'emergency' => '#B71C1C',
        'alert'     => '#D32F2F',
        'critical'  => '#F44336',
        'error'     => '#FF5722',
        'warning'   => '#FF9100',
        'notice'    => '#4CAF50',
        'info'      => '#1976D2',
        'debug'     => '#90CAF9',
      ],
    ],

    'highlight' => [
      '^#\d+',
      '^Stack trace:',
    ],

  ];

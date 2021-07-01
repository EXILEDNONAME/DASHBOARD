<head>
  <base href="../../">
  <meta charset="utf-8">
  @if (request()->is('dashboard')) <title> Dashboard </title>
  @else <title> Dashboard | @stack('title') </title>
  @endif
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="Page with empty content">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="/assets/backend/plugins/global/plugins.bundle.css?v=7.0.5" rel="stylesheet" type="text/css">
  <link href="/assets/backend/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5" rel="stylesheet" type="text/css">
  <link href="/assets/backend/css/style.bundle.css?v=7.0.5" rel="stylesheet" type="text/css">
  <link href="/assets/backend/css/themes/layout/header/base/light.css?v=7.0.5" rel="stylesheet" type="text/css">
  <link href="/assets/backend/css/themes/layout/header/menu/light.css?v=7.0.5" rel="stylesheet" type="text/css">
  <link href="/assets/backend/css/themes/layout/brand/dark.css?v=7.0.5" rel="stylesheet" type="text/css">
  <link href="/assets/backend/css/themes/layout/aside/dark.css?v=7.0.5" rel="stylesheet" type="text/css">
  @stack('css')
  <link rel="shortcut icon" type="image/jpg" href="/assets/backend/favicon.png" />
</head>

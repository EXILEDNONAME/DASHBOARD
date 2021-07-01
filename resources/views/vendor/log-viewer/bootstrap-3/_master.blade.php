<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LogViewer - Created by ARCANEDEV</title>
    <meta name="description" content="LogViewer">
    <meta name="author" content="ARCANEDEV">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{ route('log-viewer::dashboard') }}" class="navbar-brand">
                    <i class="fa fa-fw fa-book"></i> LogViewer
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="{{ Route::is('log-viewer::dashboard') ? 'active' : '' }}">
                        <a href="{{ route('log-viewer::dashboard') }}">
                            <i class="fa fa-dashboard"></i> Dashboard
                        </a>
                    </li>
                    <li class="{{ Route::is('log-viewer::logs.list') ? 'active' : '' }}">
                        <a href="{{ route('log-viewer::logs.list') }}">
                            <i class="fa fa-archive"></i> Logs
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main container --}}
    <main class="container-fluid">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="main-footer">
        <div class="container">
            <p class="text-muted pull-left">
                LogViewer - <span class="label label-info">version {{ log_viewer()->version() }}</span>
            </p>
            <p class="text-muted pull-right">
                Created with <i class="fa fa-heart"></i> by ARCANEDEV <sup>&copy;</sup>
            </p>
        </div>
    </footer>

    {{-- Scripts --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
    <script>
        Chart.defaults.global.responsive      = true;
        Chart.defaults.global.scaleFontFamily = "'Source Sans Pro'";
        Chart.defaults.global.animationEasing = "easeOutQuart";
    </script>
    @yield('modals')
    @yield('scripts')
</body>
</html>

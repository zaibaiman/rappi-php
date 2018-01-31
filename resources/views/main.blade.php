<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Rappi</title>

        <link rel="icon" href="https://img.rappi.com/web/rappi_favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
        <link href="/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/colors.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/extras/animate.min.css" rel="stylesheet" type="text/css">
        <link href="/css/styles.css" rel="stylesheet" type="text/css">

        @section('head_scripts')
        @show
    </head>
    <body class="navbar-top sidebar-xs">
        @yield('root')

        <script type="text/javascript" src="/assets/js/core/libraries/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/js/core/libraries/bootstrap.min.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/loaders/blockui.min.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/uploaders/dropzone.min.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/forms/selects/bootstrap_select.min.js"></script>
        <script type="text/javascript" src="/assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
        <script type="text/javascript" src="/assets/js/core/libraries/jquery_ui/nestedSortable.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/ui/prism.min.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/visualization/d3/d3.min.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/forms/styling/switchery.min.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/forms/styling/switch.min.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/forms/styling/uniform.min.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/ui/moment/moment.min.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/pickers/daterangepicker.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/ui/nicescroll.min.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/visualization/echarts/echarts.js"></script>   
        <script type="text/javascript" src="/assets/js/pages/animations_css3.js"></script>
        <script type="text/javascript" src="/js/app.js"></script>
        @section('scripts')
        @show
    </body>
</html>
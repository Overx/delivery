<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Delivery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <div id="baseURL" data-url="{{ \URL::to('/') }}/"></div>

    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />

    {!! Minify::stylesheet(array(
        '/assets/plugins/pace/pace-theme-flash.css',
        '/assets/plugins/boostrapv3/css/bootstrap.min.css',
        '/assets/plugins/font-awesome/css/font-awesome.css',
        '/assets/plugins/jquery-scrollbar/jquery.scrollbar.css',
        '/assets/plugins/bootstrap-select2/select2.css',
        '/assets/plugins/switchery/css/switchery.min.css',
        '/assets/plugins/nvd3/nv.d3.min.css',
        '/assets/plugins/mapplic/css/mapplic.css',
        '/assets/plugins/rickshaw/rickshaw.min.css',
        '/assets/plugins/bootstrap-datepicker/css/datepicker3.css',
        '/assets/plugins/jquery-metrojs/MetroJs.css',
        '/pages/css/pages-icons.css',
        '/pages/css/themes/unlax.css',
        '/assets/plugins/codrops-dialogFx/dialog.ie.css'
    ))->withFullUrl() !!}

</head>
<body class="fixed-header dashboard esktop pace-done menu-behind">
    @include('partials.sidebar')
    <div class="page-container ">

        @include('partials.header')fixed-header dashboard

        <div class="page-content-wrapper">
            <div class="content sm-gutter">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <div class="container-fluid container-fixed-lg footer">
                <div class="copyright sm-text-center">
                    <p class="small no-margin pull-left sm-pull-reset">
                        <span class="hint-text">Copyright &copy; {{ date("Y") }} </span>
                        <span class="font-montserrat">LineXTI</span>.
                        <span class="hint-text">All rights reserved. </span>
                        <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
                    </p>
                    <p class="small no-margin pull-right sm-pull-reset">
                        <a href="#">Desenvolvido por </a> <span class="hint-text"> Victor Salatiel</span>
                    </p>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN VENDOR JS -->
    {!! Minify::javascript(array(
        '/assets/plugins/pace/pace.min.js',
        '/assets/plugins/jquery/jquery-1.11.1.min.js',
        '/assets/plugins/modernizr.custom.js',
        '/assets/plugins/jquery-ui/jquery-ui.min.js',
        '/assets/plugins/boostrapv3/js/bootstrap.min.js',
        '/assets/plugins/jquery/jquery-easy.js',
        '/assets/plugins/jquery-unveil/jquery.unveil.min.js',
        '/assets/plugins/jquery-bez/jquery.bez.min.js',
        '/assets/plugins/jquery-ios-list/jquery.ioslist.min.js',
        '/assets/plugins/jquery-actual/jquery.actual.min.js',
        '/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js',
        '/assets/plugins/bootstrap-select2/select2.min.js',
        '/assets/plugins/classie/classie.js',
        '/assets/plugins/switchery/js/switchery.min.js',
        '/assets/plugins/nvd3/lib/d3.v3.js',
        '/assets/plugins/nvd3/nv.d3.min.js',
        '/assets/plugins/nvd3/src/utils.js',
        '/assets/plugins/nvd3/src/tooltip.js',
        '/assets/plugins/nvd3/src/interactiveLayer.js',
        '/assets/plugins/nvd3/src/models/axis.js',
        '/assets/plugins/nvd3/src/models/line.js',
        '/assets/plugins/nvd3/src/models/lineWithFocusChart.js',
        '/assets/plugins/mapplic/js/hammer.js',
        '/assets/plugins/mapplic/js/jquery.mousewheel.js',
        '/assets/plugins/mapplic/js/mapplic.js',
        '/assets/plugins/rickshaw/rickshaw.min.js',
        '/assets/plugins/jquery-metrojs/MetroJs.min.js',
        '/assets/plugins/jquery-sparkline/jquery.sparkline.min.js',
        '/assets/plugins/skycons/skycons.js',
        '/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
        '/pages/js/pages.min.js',
        '/assets/js/dashboard.js',
        '/assets/js/scripts.js'
    ))->withFullUrl() !!}
    {!! (!empty($script) ? $script : '') !!}
</body>
</html>
<!DOCTYPE html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ruta Uba</title>
        <meta name="description" content="La Universidad Bicentenaria de Aragua pone a disposición de estudiantes y usuarios el servicio de transporte privado. Contamos con unidades colectivas que ofrecen confort. Garantizamos traslados / viajes en primera clase. Ofrecemos rutas para Maracay, estado Aragua (Venezuela).">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
        <meta http-equiv="cleartype" content="on">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/touch/logo-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/touch/logo-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/touch/logo-72.png">
        <link rel="apple-touch-icon-precomposed" href="img/touch/logo-57.png">
        <link rel="shortcut icon" sizes="196x196" href="img/touch/logo-196.png">
        <link rel="shortcut icon" href="img/touch/logo-57.png">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="img/touch/logo-144.png">
        <meta name="msapplication-TileColor" content="#EF7E1B">

        <!-- SEO: If mobile URL is different from desktop URL, add a canonical link to the desktop page -->
        <!--
        <link rel="canonical" href="http://www.example.com/" >
        -->

        <!-- Add to homescreen for Chrome on Android -->

        <meta name="mobile-web-app-capable" content="yes">

        <!-- For iOS web apps. Delete if not needed. https://github.com/h5bp/mobile-boilerplate/issues/94 -->
        <!--
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="">
        -->

        <!-- This script prevents links from opening in Mobile Safari. https://gist.github.com/1042026 -->
        <!--
        <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>
        -->

        <link rel="stylesheet" href="css/reset.css"> 
        <link rel="stylesheet" href="css/slide-in-panel.css">
        <link rel="stylesheet" href="css/smoothAccordionSlider.css">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/custom.css">

        <script src="js/vendor/modernizr-2.7.1.min.js"></script>
    </head>
    <body>

        <!-- Add your site or application content here -->
        <div class="container">

            <!-- sidebar -->
            <div class="column col-xs-1 hidden-xs" id="sidebar">
                
                <div id="sidebar-header">
                    <h3>ruta<br/>uba</h3>
                </div>

                <h2 class="rutas-btn"><span class="glyphicon glyphicon-plus-sign"></span>Rutas</h2>
              
            </div>
            <!-- /sidebar -->
           
            <div class="sub-container col-sm-11">

                <nav class="header navbar navbar-default">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav hidden-xs">
                            <li class="status-btn"><a>Status</a></li>
                            <li class="mision-btn"><a>Mision y Vision</a></li>
                            <li class="tarifas-btn"><a>Tarifas</a></li>
                            <li class="comentarios-btn"><a>Comentarios</a></li>
                            <li id="noti" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="No hay Notificaciones" data-content=""><a>Notificaciones</a></li>
                        </ul>
                        <ul id="mobile-header" class="nav navbar-nav">
                            <li class="menu-btn visible-xs"><a><span class="glyphicon glyphicon-menu-hamburger"></span></a></li>
                            <li id="time"><a></a></li> 
                        </ul>
                    </div><!-- /.container-fluid -->
                </nav>

                <div id="menu" class="cd-panel from-left visible-xs">
                    <div class="cd-panel-container">
                        <div class="cd-panel-content">
                            <ul class="list-group">
                                <li class="list-group-item rutas-mobile-btn" data-title="Rutas">Rutas</li>
                                <li class="list-group-item status-btn" data-title="Status">Status</li>
                                <li class="list-group-item mision-btn" data-title="Misión y Visión">Mision y Vision</li>
                                <li class="list-group-item tarifas-btn" data-title="Tarifas">Tarifas</li>
                                <li class="list-group-item comentarios-btn" data-title="Comentarios">Comentarios</li>
                            </ul>
                        </div> <!-- cd-panel-content -->
                    </div> <!-- cd-panel-container -->
                </div> <!-- cd-panel -->

                @yield('content')

                <div class="footer">
                    <img src="img/logo.png" alt="Transporte True">
                    <h6><a href="http://uba.edu.ve">Unidad de Marketing Digital<br/>Universidad Bicentenaria de Aragua</a></h6>
                </div>

            </div>

        </div>

        <script src="js/vendor/jquery-2.1.0.min.js"></script>
        <script src="js/helper.js"></script>
        <script src="js/main.js"></script>
        <script src="js/plugins.js"></script>    

        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8g7akf4R7bcfLNCwktwgYsATlAMvDxlk&callback=window.initMap">
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-68468628-1');ga('send','pageview');
        </script>
    </body>
</html>
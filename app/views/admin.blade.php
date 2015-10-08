<!DOCTYPE html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ruta Uba / Administrador</title>
        <meta name="description" content="">
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

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <style type="text/css">
            nav {
                height: 71px;
                background-color: #EF7E1B;
                padding-top: 16px;
                margin-bottom: 16px;
                text-align: center;
                color: white;
            }
            input.btn {
                background-color: #EF7E1B;
            }

            input.btn:hover {
                background-color: #EC681F;
            }
        </style>

        <script src="js/vendor/modernizr-2.7.1.min.js"></script>
    </head>
    <body>

        <!-- Add your site or application content here -->
        <div class="container">

            <nav class="header">
                <h4>Administrador Ruta Uba</h4>
            </nav>

            <div class="marketing">
                @if ( ! Auth::check() )
                    {{ Form::open(array('url' => 'login')) }}
                    
                        <div class="form-group">
                        {{ Form::text('username',Input::old('username'),array('class'=>'form-control', 'placeholder'=>'Usuario', 'autocomplete'=>'off')) }}
                        </div>
                        
                        <div class="form-group">
                        {{ Form::password('password',array('class'=>'form-control', 'placeholder'=>'Contraseña', 'autocomplete'=>'off')) }}           
                        </div>

                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{Session::get('error')}}</div>
                        @endif

                        {{ Form::submit('Login', array('class'=>'btn btn-warning center-block'))}}
                        
                    {{ Form::close() }} 
                @else
                   <div class="panel">
                        <table class="table">
                            <tr>
                                <td id="1">El Limon</td>
                                <td><button class="btn btn-success" status="1">Disponible</button></td>
                                <td><button class="btn btn-warning" status="2">En Camino</button></td>
                                <td><button class="btn btn-danger" status="3">Fuera de Servicio</button></td>
                            </tr>
                            <tr>
                                <td id="2">Terminal</td>
                                <td><button class="btn btn-success" status="1">Disponible</button></td>
                                <td><button class="btn btn-warning" status="2">En Camino</button></td>
                                <td><button class="btn btn-danger" status="3">Fuera de Servicio</button></td>
                            </tr>
                            <tr>
                                <td id="3">Turmero-Cagua</td>
                                <td><button class="btn btn-success" status="1">Disponible</button></td>
                                <td><button class="btn btn-warning" status="2">En Camino</button></td>
                                <td><button class="btn btn-danger" status="3">Fuera de Servicio</button></td>
                            </tr>
                            <tr>
                                <td id="4">La Victoria</td>
                                <td><button class="btn btn-success" status="1">Disponible</button></td>
                                <td><button class="btn btn-warning" status="2">En Camino</button></td>
                                <td><button class="btn btn-danger" status="3">Fuera de Servicio</button></td>
                            </tr>
                        </table>
                    </div>
                @endif
            </div>

        </div>

        <script src="js/vendor/jquery-2.1.0.min.js"></script>
        <script src="js/helper.js"></script>
        <script src="js/main.js"></script>
        <script src="js/plugins.js"></script>
        
        <script src="js/bootstrap.min.js"></script>

        <script>

            $(document).ready(function() {

                var i;

                $.ajax({
                    url: '../public/update',
                    type: 'GET',
                    dataType: 'json',
                    success:function(response) {

                        $('tr').each(function(i) {

                            if( response['estados'][i].estado == 1 )
                            {
                                $(this).css('background-color', 'lightgreen');
                            } 
                            if( response['estados'][i].estado == 2 ) 
                            {
                                $(this).css('background-color', 'gold');
                            }
                            if( response['estados'][i].estado == 3 ) 
                            {
                                $(this).css('background-color', 'tomato');
                            }

                        });
                    }
                });

                $('button').click(function() {

                    var boton  = $(this);
                    var id     = $(this).parent().siblings().first().attr('id');
                    var status = $(this).attr('status'); 

                    $.ajax({
                        url: '../public/update',
                        type: 'POST',
                        data: {'id':id, 'status': status},
                        success:function() {

                            if( status == 1 )
                            {
                                boton.parents('tr').css('background-color', 'lightgreen');
                            } 
                            if( status == 2 ) 
                            {
                                boton.parents('tr').css('background-color', 'gold');
                            }
                            if( status == 3 ) 
                            {
                                boton.parents('tr').css('background-color', 'tomato');
                            }
                        }
                    });
                });
            }); 

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
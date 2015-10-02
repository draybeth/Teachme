<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TeachMe by styde.net</title>

    {{--<link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}">--}}
    {!! Html::style('assets/css/style.css') !!}



            <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:300,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div id="notifications"></div>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/" target="_blank">Styde.net</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                   {!! Html::menu('teachme.menu') !!}

                   @include('layout.login')

                </div>
            </div>
        </div>
    </div>
</nav>

@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <br>
                <p>
                    <strong>TeachMe</strong>
                    es un <strong>sistema de tickets</strong> donde los estudiantes pueden solicitar tutoriales.
                </p>
                <p>
                    Esta aplicación fue desarrollada paso a paso durante el curso:
                    <a href="https://styde.net/cursos/crea-tu-primera-aplicacion-con-laravel-5/" target="_blank">
                        <strong>Crea tu primera aplicación con Laravel 5</strong></a>.<br> Tú también puedes crear aplicaciones como ésta o mucho más grandes:
                    <a href="https://styde.net/planes/" title="Ver planes" target="_blank"><strong>Comienza ahora</strong></a>.
                </p>
                <hr>
                <p class="copy">
                    &copy; 2015
                    <a href="https://styde.net" target="_blank">https://styde.net</a> -
                    Duilio Palacios <a href="https://twitter.com/sileence" target="_blank">@Sileence</a>.
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
{{--<script src="{{asset('assets/js/app.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/alert.js')}}"></script>--}}
{!! Html::script('assets/js/app.js') !!}
{!! Html::script('assets/js/alert.js') !!}
</body>
</html>

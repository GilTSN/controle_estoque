<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Controle de Estoque</title>

    <link href="{{ app('url')->asset('assets/bootstrap-3.3.6-dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- top navbar -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#">Controle de Estoque</a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Início</a></li>
                    <li><a href="#">Pedidos</a></li>
                    <li><a href="#">Estoque</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ./top navbar -->

    <!-- main container -->
    <div class="container">
        @yield('content')
    </div>
    <!-- ./main container -->

    <script src="{{ app('url')->asset('assets/jquery-1.11.3/jquery.min.js') }}"></script>
    <script src="{{ app('url')->asset('assets/bootstrap-3.3.6-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
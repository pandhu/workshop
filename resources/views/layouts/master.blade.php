<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>App Name - @yield('title')</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Theme CSS -->
        <link href="{{url('css/freelancer.min.css')}}" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="{{url('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    </head>
    <body id="page-top" class="index">
        <div id="skipnav">
            <a href="#maincontent">Skip to main content</a>
        </div>

            <!-- Navigation -->
            <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="hidden">
                                <a href="#page-top"></a>
                            </li>
                            <li class="page-scroll">
                                <a href="#portfolio">Portfolio</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#about">About</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
            <!-- Header -->
            <header>
                <div class="container" id="maincontent" tabindex="-1">
                    <div class="row">
                        <div class="col-lg-12">
                            <img class="img-responsive" src="img/profile.png" alt="">
                            <div class="intro-text">
                                <h1 class="name">Start Bootstrap</h1>
                                <hr class="star-light">
                                <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        @yield('content')

        <!-- jQuery -->
        <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <!-- Contact Form JavaScript -->
        <script src="{{url('js/jqBootstrapValidation.js')}}"></script>
        <!-- Theme JavaScript -->
        <script src="{{url('js/freelancer.min.js')}}"></script>
    </body>
</html>

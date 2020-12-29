<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ENTITITI SHOP</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800'
        rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="{{asset('Order/css/animate.css')}}" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="{{asset('Order/css/style.default.css')}}" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="{{asset('Order/css/custom.css')}}" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="{{asset('Order/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('Order/img/apple-touch-icon.png')}}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('Order/img/apple-touch-icon-57x57.png')}}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('Order/img/apple-touch-icon-72x72.png')}}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('Order/img/apple-touch-icon-76x76.png')}}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('Order/img/apple-touch-icon-114x114.png')}}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('Order/img/apple-touch-icon-120x120.png')}}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('Order/img/apple-touch-icon-144x144.png')}}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('Order/img/apple-touch-icon-152x152.png')}}" />
</head>

<body>
    <div id="all">

        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i
                                        class="fa fa-phone"></i></a> <a href="#" data-animate-hover="pulse"><i
                                        class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i
                                        class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i
                                        class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i
                                        class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>

                            <div class="login">
                                <a href="{{URL::to('accountmodule/login')}}"><i class="fa fa-sign-in"></i>
                                    <span class="hidden-xs text-uppercase">Login</span></a>
                                <a href="{{URL::to('accountmodule/register')}}"><i class="fa fa-user"></i> <span
                                        class="hidden-xs text-uppercase">Register</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="index.html">
                                <h3>ENTITITI</h3>
                            </a>   
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active"> 
                                    <a href="javascript: void(0)" >Home</a>
                                </li>
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="img/template-easy-customize.png"
                                                            class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Brands</h5>
                                                        <ul>
                                                            <li><a href="#">Accordions</a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Categories</h5>
                                                        <ul>
                                                            <li><a href="#">Default sticky
                                                                    header</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown">Contact</a>
                                </li>
                            </ul>

                        </div>
            
                    </div>
                </div>
                <!-- /#navbar -->
            </div>
            <!-- *** NAVBAR END *** -->
        </header>
        @yield('user-content')

        <footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>About us</h4>

                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                    <hr>

                    <h4>Join our monthly newsletter</h4>

                    <form>
                        <div class="input-group">

                            <input type="text" class="form-control">

                            <span class="input-group-btn">

                                <button class="btn btn-default" type="button"><i class="fa fa-send"></i></button>

                            </span>

                        </div>
                        <!-- /input-group -->
                    </form>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Blog</h4>

                    <div class="blog-entries">
                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Blog post name</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Blog post name</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Very very long blog post name</a></h5>
                            </div>
                        </div>
                    </div>

                    <hr class="hidden-md hidden-lg">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Contact</h4>

                    <p><strong>Universal Ltd.</strong>
                        <br>13/25 New Avenue
                        <br>Newtown upon River
                        <br>45Y 73J
                        <br>England
                        <br>
                        <strong>Great Britain</strong>
                    </p>

                    <a href="contact.html" class="btn btn-small btn-template-main">Go to contact page</a>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->



                <div class="col-md-3 col-sm-6">

                    <h4>Photostream</h4>

                    <div class="photostream">
                        <div>
                            <a href="#">
                                <img src="img/detailsquare.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare2.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare3.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare3.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare2.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2015. Your company / name goes here</p>
                    <p class="pull-right">Template by <a href="https://bootstraptemple.com">Bootstrap Temple</a>
                        <!-- Please do not remove the backlink to us unless you have purchased the attribution-free license at https://bootstraptemple.com. It is part of the license conditions. Thanks for understanding :) -->
                    </p>

                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>





</body>

</html>
<header>

    <!-- *** TOP ***-->
    <div id="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 contact">
                    <p class="hidden-sm hidden-xs">Contact us on +089 999 888 or entititi@gmail.com</p>
                    <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i
                                class="fa fa-phone"></i></a> <a href="#" data-animate-hover="pulse"><i
                                class="fa fa-envelope"></i></a>
                    </p>
                </div>
                <div class="col-xs-7">
                </div>
            </div>
        </div>
    </div>
    <!-- *** TOP END *** -->

    <!-- *** NAVBAR ***-->
    <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

        <div class="navbar navbar-default yamm" role="navigation" id="navbar">

            <div class="container">
                <div class="navbar-header">

                    <a class="navbar-brand home" href="index.html">
                        <img src="{{ asset('images/logo.png') }}" height="50" alt="Universal logo"
                            class="hidden-xs hidden-sm">
                    </a>
                    <div class="navbar-buttons">
                        <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse"
                            data-target="#navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
                    </div>
                </div>
                <!--/.navbar-header -->

                <div class="navbar-collapse collapse" id="navigation">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown active">
                            <a href="javascript: void(0)">Home </a>
                        </li>

                        <li>
                            <a href="#">Team </a>
                        </li>

                        <li class="dropdown">
                            <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Contact Us <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="contact.html">Le Hoang Anh Trung </a>
                                </li>
                                <li><a href="contact2.html">Mai Manh Thuc </a>
                                </li>
                                <li><a href="contact2.html">Do Duc Thuan </a>
                                </li>
                                <li><a href="contact3.html">Hoang Minh Nguyet </a>
                                </li>

                            </ul>
                        </li>

                        @if (Auth::user())
                            <li><a href="{{ route('editUserInfor') }}"
                                    data-toggle="modal" data-target="#login-modal" style="text-decoration-color: brown"><i class="fa fa-user"></i>HELLO
                                    {{ Auth::user()->name }}</a></li>
                            @if (Auth::user()->roleID == 1)
                                <li><a href="{{ route('admin-layout') }}">Admin page</a></li>
                            @endif
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        @else
                            <li>
                                <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i>
                                    <span class="hidden-xs text-uppercase">Sign in</span></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#register-modal"><i class="fa fa-user"></i>
                                    <span class="hidden-xs text-uppercase">Sign up</span></a>
                            </li>
                        @endif

                    </ul>

                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
        <!-- /#navbar -->

    </div>
    <!-- *** NAVBAR END *** -->

</header>
@include('layouts.login')
@include('layouts.register')
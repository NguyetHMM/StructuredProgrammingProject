<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <div id="all">

        @include('layouts.header')

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Website E-commerce</h1>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.login')

        @include('layouts.register')

        @yield('content')

        @include('layouts.footer')

        <!-- *** COPYRIGHT ***-->
        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2020. HUST / ENTITITI</p>
                    <p class="pull-right">Template by <a href="https://bootstraptemple.com">Bootstrap Temple</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->
    </div>

    @include('layouts.script')

</body>

</html>

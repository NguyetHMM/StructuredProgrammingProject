<!DOCTYPE html>
<html lang="en">

<head>
    <title>Entititi</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link type="text/css" rel="stylesheet" href="css/froala_blocks.css">
    <style>
        .fdb-block {
            border-bottom: 1px solid var(--light);
        }
    </style>
</head>

<body>
    <style>
        body {
            background-color: #fcfcfc;
        }

        .btn-primary {
            color: #fff;
            background-color: #636b6f;
            border-color: #636b6f;
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -18px;
            margin-left: 5px;
        }

        .col-form-label {
            margin-left: 4%;
            margin-right: -6%;
            padding-top: calc(.375rem + 1px);
            padding-bottom: calc(.375rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1.5;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        a {
            margin-bottom: 1.5rem;
            font-family: sans-serif;
            font-weight: 500;
            line-height: 1.2;
            color: #636b6f;
        }

        .navbar-nav .nav-link {
            padding-left: 60px;
        }
        }
        

    </style>
    @yield('content')
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md no-gutters fixed-top ">
                <div class="col-3 text-left">
                    <a href="">
                        <img src="{{ asset('images/logo.png') }}" height="100" alt="image">
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse-2"
                    aria-controls="navbarNav7" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-collapse-2 justify-content-center col-md-6" id="navbarNav7">
                    <ul class="navbar-nav justify-content-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="">
                                <h5>Home</h5><span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <h5>Contact</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <h5>Team</h5>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse navbar-collapse-2" , style="margin-right:5%">
                    <ul class="navbar-nav ml-auto justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Log In</a>
                        </li>
                    </ul>

                    <a class="btn btn-primary ml-md-1" href="{{ route('register') }}">Register</a>
                </div>
            </nav>
        </div>
    </header>
</body>

</html>

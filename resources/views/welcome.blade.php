<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Entititi</title>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link type="text/css" rel="stylesheet" href="css/froala_blocks.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            a {
                color: #636B6F;
                text-decoration: none;
                background-color: transparent;
            }

            .btn-primary {
                color: #fff;
                background-color: #636B6F;
                border-color: #636B6F;
            }

        </style>
    </head>
    <body>

    <header>
  <div class="container">
    <nav class="navbar navbar-expand-md no-gutters fixed-top ">
      <div class="col-3 text-left">
        <a href="{{ route('all-brand-product') }}">
          <img src="{{asset('images/logo.png')}}" height="100" alt="image">
        </a>
      </div>e

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse-2" aria-controls="navbarNav7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navbar-collapse-2 justify-content-center col-md-6" id="navbarNav7">
        <ul class="navbar-nav justify-content-center">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('all-brand-product')  }}"><h5>Home</h5><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""><h5>Contact</h5></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""><h5>Team</h5></a>
          </li>
        </ul>
      </div>

      <div class="collapse navbar-collapse navbar-collapse-2", style="margin-right:5%">
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

        <div class="flex-center position-ref full-height">
            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <div class="container">
                  <div class="row align-items-center">
                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                      <img alt="image" class="img-fluid" src="{{asset('images/mainimg.jpg')}}">
                    </div>
                  <div class="col-12 col-md-6 col-lg-5 ml-md-auto text-left">
                    <h1><b>ENTITITI</b></h1>
                    <p class="lead">E-commerce Website By Entititi Team</p>
                    <p><a class="btn btn-secondary mt-4" href="{{ route('all-brand-product') }}">Shop Now</a></p>
                  </div>
            </div>
          </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <title>Module AccountModule</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/accountmodule.css') }}"> --}}
       <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
        body{
            background-color:#fcfcfc;
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
        h6 {
            margin-bottom: 1.5rem;
            font-family: sans-serif;
            font-weight: 500;
            line-height: 1.2;
            color: #636b6f;
        }
        .navbar-nav .nav-link {
    padding-left: 30px;
}
}
    </style>
        @yield('content')

        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/accountmodule.js') }}"></script> --}}
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module ProductModule</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/productmodule.css') }}"> --}}

    </head>
    <body>
        @yield('content')
        <a href = "{{route('admin-layout')}}" >Admin layout</a><br>
        <a href = "{{route('home')}}" >User layout</a>
        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/productmodule.js') }}"></script> --}}
    </body>
</html>

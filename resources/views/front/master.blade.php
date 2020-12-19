<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>سپاهان الکتریک - @yield('title')</title>
    <meta name="description" content="Default Description">
    <meta name="keywords" content="E-commerce"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.png">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
</head>
    <body>
        <div class="wrapper">
        @include('front.header')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('front.footer')
        </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

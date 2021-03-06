<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>سپاهان الکتریک - @yield('title')</title>
    <meta name="description" content="Default Description">
    <meta name="keywords" content="E-commerce"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
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
        <script>
            $(document).ready(function () {
                $('#search-input').on('keyup', function (e) {
                    console.log(e);

                    $.get("{{ route('front.search-ajax') }}",function () {
                        console.log(534534);
                    });
                })
            })
        </script>
    </body>
</html>

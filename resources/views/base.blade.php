<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</html>
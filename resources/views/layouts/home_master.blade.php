<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <title>{{$title}} [ Company Name ]</title>
        @include('home.partials.external_links')
    </head>

    <body>

        @include('home.partials.header')

        <div id = "content-wrapper">
            @yield('content')
        </div>

    </body>

</html>
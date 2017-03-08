<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <!-- Bootstrap -->
        <link rel="stylesheet" href=/bower_components/bootstrap/dist/css/bootstrap.min.css>
        <!-- JQuery -->
        <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    </head>
    <body>
		@yield('content')
    </body>
    @yield('scripts')
</html>

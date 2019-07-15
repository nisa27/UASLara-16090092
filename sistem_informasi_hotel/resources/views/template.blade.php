<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaravelApp</title>
    <link href="{{ asset ('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet">
</head>
<body style="background-color:#ff9a74;">
    <div class="container">
    @yield('main')
    </div>
    <script src="{{ asset ('js/html5shiv.min.js') }}"></script>
    <script src="{{ asset ('js/respond.min.js') }}"></script>
    <script src="{{ asset ('js/bootstrap.js') }}"></script>
    <script src="{{ asset ('js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ asset ('js/laravelapp.js') }}"></script>
</body>
</html>
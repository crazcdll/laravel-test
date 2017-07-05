<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laravel-try</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- stylesheets -->
    <link href="{{ asset('css/bootstrap-3.3.7.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/mint-ui/lib/style.css">
</head>
<body>

<div class="container">
    @yield('content')
</div>
@yield('footer')
</body>
</html>
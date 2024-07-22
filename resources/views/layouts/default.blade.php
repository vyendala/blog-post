<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Laravel Blog</title>
</head>
<body class="bg-dark">
    <div>
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>
</body>
</html>
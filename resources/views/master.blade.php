<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
</head>
<body>

<nav  class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="{{route('home')}}" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav mx-auto">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('all-products')}}" class="nav-link">Products</a></li>
            <li><a href="{{ route('full-name-form') }}" class="nav-link">Full Name</a></li>
        </ul>
    </div>
</nav>

@yield('body')


<script src="{{asset('/')}}assets/css/bootstrap.bundle.js"></script>
</body>
</html>

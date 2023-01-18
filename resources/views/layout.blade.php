<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>

<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <nav>
        @include('partials.nav')
    </nav>
    <header>
        <h1>@yield('header')</h1>
    </header>
    <main>
        @yield('content')

    </main>
</body>
</html>

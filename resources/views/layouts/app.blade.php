<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/form-style.css') }}">
</head>
<body>

    @include('includes.navbar')

    <main class="container mt-4">
        @yield('content')
    </main>

    @include('includes.footer')
</body>
</html>
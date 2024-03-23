<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Add your CSS links here -->
</head>
<body>

@include('partials.header')

<div class="container">
    @yield('content')
</div>

@include('partials.footer')

<!-- Add your JavaScript links here -->
</body>
</html>
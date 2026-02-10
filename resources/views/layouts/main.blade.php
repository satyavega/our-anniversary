<!DOCTYPE html>
<html class="scroll-smooth" lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
    <link rel="shortcut icon" href="images/logos/logo.svg">
    @vite('resources/css/app.css')
    <title>{{ Str::title($title) }} | About Us</title>
    <style>
        .tenor-gif-embed {
    pointer-events: none;
}
    </style>
</head>

<body>
    @include('partials.transparentNav')

    <div class="px-5 overflow-hidden lg:px-28 md:px-16">
        @yield('container')
    </div>
    @include('partials.footer')
</body>

</html>

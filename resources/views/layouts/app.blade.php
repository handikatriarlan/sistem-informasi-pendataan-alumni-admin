<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>{{ $pageTitle }} | SMP Yayasan Perguruan Rahmat Islamiyah</title> --}}
    <title>SMP Yayasan Perguruan Rahmat Islamiyah</title>
    @vite('resources/css/app.css')
    {{-- @vite('resources/js/main.js')
    @vite('resources/js/alumni.js')
    @vite('resources/js/contact.js')
    @vite('resources/js/login.js')
    @vite('resources/js/profile.js') --}}
</head>

<body class="bg-gray-50">
    @include('layouts.app.header')

    @yield('content')

    @include('layouts.app.footer')
</body>

</html>

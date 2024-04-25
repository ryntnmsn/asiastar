<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AsiaStar Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']);
    @livewireStyles
</head>
<body class="bg-slate-100">
    @include('layouts.admin.header')
    
    <div>
        @include('layouts.admin.sidebar')
        <div class="p-4 sm:ml-64">
            @yield('contents')
        </div>
    </div>

    @include('layouts.admin.footer')
</body>
</html>
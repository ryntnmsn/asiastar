<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>AsiaStar Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']);
    @livewireStyles
</head>
<body class="bg-slate-100">
    @include('layouts.admin.header')
    
    <div>
        @include('layouts.admin.sidebar')
        <div class="p-4 sm:ml-64">
            <div class="w-full max-w-[1280px] mx-auto p-4 md:p-10 rounded-xl bg-white">
                @yield('contents')
            </div>
        </div>
    </div>

    @include('layouts.admin.footer')
</body>
</html>
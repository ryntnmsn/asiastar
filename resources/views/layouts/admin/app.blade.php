<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ url('assets/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <title>AsiaStar Admin</title>
    <script>
        tinymce.init({
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-slate-100">
    @include('layouts.admin.header')

    <div>
        @include('layouts.admin.sidebar')
        <div class="p-4 sm:ml-64">
            <div class="w-full mx-auto p-4 md:p-10 rounded-xl bg-white {{ request()->is('admin/game') ? 'max-w-[1920px]' : 'max-w-[1280px]' }}">
                @yield('contents')
            </div>
        </div>
    </div>

    @include('layouts.admin.footer')
</body>
</html>

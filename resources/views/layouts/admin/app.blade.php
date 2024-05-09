<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- <script src="https://cdn.tiny.cloud/1/19bxp0ozoqy0r717lfry5erv2vaaxw8lz3a0an0aeii0l8da/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script> --}}



    <script src="{{ url('assets/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <title>AsiaStar Admin</title>
    {{-- <script>
        tinymce.init({
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
    </script> --}}
    <script>
        tinymce.init({
          plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',        });
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-slate-100">
    @include('layouts.admin.header')

    <div>
        @include('layouts.admin.sidebar')
        <div class="p-4 sm:ml-64 bg-slate-100">
            <div class="w-full mx-auto p-4 md:p-10 rounded-xl bg-white {{ request()->is('admin/game') ? 'max-w-[1920px]' : 'max-w-[1280px]' }}">
                @yield('contents')
            </div>
        </div>
    </div>

    @include('layouts.admin.footer')
    {{-- @livewireScripts() --}}
</body>
</html>

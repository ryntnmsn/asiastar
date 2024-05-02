<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AsiaStar</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <div class="w-full h-full">
        @include('layouts.home.header')
        <div>
            @yield('contents')
        </div>
        @include('layouts.home.footer')
    </div>
    @livewireScripts

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->


<script>
  var swiper = new Swiper(".featuredGames", {
    slidesPerView: 2,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".featuredGames-next",
      prevEl: ".featuredGames-prev"
    },
  });
</script>

<script>
  var swiper = new Swiper(".hotGames", {
    slidesPerView: 4,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".hotGames-next",
      prevEl: ".hotGames-prev"
    },
  });
</script>

<script>
  var swiper = new Swiper(".newGames", {
    slidesPerView: 3,
    spaceBetween: 30,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    loop: true,
    navigation: {
      nextEl: ".newGames-next",
      prevEl: ".newGames-prev"
    },
  });
</script>

<script>
  var swiper = new Swiper(".rtpGames", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".rtpGames-next",
      prevEl: ".rtpGames-prev"
    },
  });
</script>



</body>
</html>

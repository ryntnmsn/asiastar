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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css"/>
    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    @livewireStyles
</head>
<body class="dark:bg-gray-900 min-h-full">
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
        spaceBetween: 30,
        loop: true,
        navigation: {
        nextEl: ".hotGames-next",
        prevEl: ".hotGames-prev"
        },
        breakpoints: {
            520: {
            slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1280: {
                slidesPerView: 3,
            },
        }
    });
</script>

<script>
    var swiper = new Swiper(".comingSoonGames", {
        spaceBetween: 30,
        loop: true,
        navigation: {
        nextEl: ".comingSoonGames-next",
        prevEl: ".comingSoonGames-prev"
        },
        breakpoints: {
            520: {
            slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1280: {
                slidesPerView: 3,
            },
        }
    });
</script>

<script>
    var swiper = new Swiper(".newGames", {
        spaceBetween: 30,
        loop: true,
        navigation: {
        nextEl: ".newGames-next",
        prevEl: ".newGames-prev"
        },
        breakpoints: {
            520: {
            slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1280: {
                slidesPerView: 3,
            },
        }
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



<script>
    var swiper = new Swiper(".cardPachinko", {
        effect: "cards",
        grabCursor: true,
        loop:true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
    });
</script>

<script>
    var swiper = new Swiper(".cardCasino", {
        effect: "cards",
        grabCursor: true,
        loop:true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
    });
</script>

<script>
    var swiper = new Swiper(".cardCockfighting", {
        effect: "cards",
        grabCursor: true,
        loop:true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
    });
</script>

<script>
    gsap.set(".photo:not(:first-child)", {opacity:0, scale:0.5})

    const animation = gsap.to(".photo:not(:first-child)", {
        opacity:1, scale:1, duration:1, stagger:1
    })

    ScrollTrigger.create({
        trigger:".gallery",
        start:"top top",
        end:"bottom bottom",
        pin:".right",
        animation: animation,
        scrub:true,
        markers:false
    })

</script>


<script>
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }

    });
</script>

</body>
</html>

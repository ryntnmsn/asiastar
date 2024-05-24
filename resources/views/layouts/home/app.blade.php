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
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"></script>
    <script src="{{url('assets/js/inViewport/inViewport.js')}}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7/jquery.min.js"> --}}
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
<body class="min-h-full bg-no-repeat bg-cover bg-fixed" x-cloak x-data="{ open: false }">
    <div class="bg-light-mode dark:bg-dark-mode flex flex-row wrapper bg-fixed">
        <div id="main" class="w-full h-full ">
            @include('layouts.home.header')
            @yield('contents')
            @include('layouts.home.footer')
        </div>
    </div>

    {{-- @livewire('home.global-search') --}}
    @livewire('home.contact.contact-home-index')
    @livewire('home.global-search')
@livewireScripts

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
        // spaceBetween: 30,
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
        // spaceBetween: 30,
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
        // spaceBetween: 30,
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
    });
    ScrollTrigger.create({
        trigger:".gallery",
        start:"top top",
        end:"bottom bottom",
        pin:".right",
        animation: animation,
        scrub:true,
        markers:false
    });
</script>

<script>
    [...document.querySelectorAll(".single-column")].map((column) => {
    column.style.setProperty("--animation", "slide");
    column.style.setProperty("height", "200%");
    column.innerHTML = column.innerHTML + column.innerHTML;
    });
</script>

<script>
    var boxReveal = {
        delay    : 200,
        distance : '50px'
        // rotate   : { z: 6 }
    };
    window.sr = ScrollReveal();
    sr.reveal('.box', boxReveal);
</script>

{{-- <script>
    gsap.registerPlugin(ScrollTrigger);
    gsap.to(".square", {
        x: 0,
        duration: 3,
        scrollTrigger: {
            trigger: ".square",
        }
    })
</script> --}}

<script>
   class CountUp {
    constructor(triggerEl, counterEl) {
    const counter = document.querySelector(counterEl)
    const trigger = document.querySelector(triggerEl)
    let num = 0
    const decimals = counter.dataset.decimals

    const countUp = () => {
        if (num < counter.dataset.stop)

        // Do we want decimals?
        if (decimals) {
            num += 0.01
            counter.textContent = new Intl.NumberFormat('en-GB', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        }).format(num)
        }

        else {
        // No decimals
        num++
        counter.textContent = num
        }
    }

    const observer = new IntersectionObserver((el) => {
        if (el[0].isIntersecting) {
        const interval = setInterval(() => {
            (num < counter.dataset.stop) ? countUp() : clearInterval(interval)
        }, counter.dataset.speed)
        }
    }, { threshold: [0] })

    observer.observe(trigger)
    }
    }

    // Initialize any number of counters:
    // new CountUp('#start1', '#counter1')
    new CountUp('#start3', '#counter3')
    new CountUp('#start2', '#counter2')
</script>

<script>
$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $(".text_header").addClass("active_text");
        } else {
           $(".text_header").removeClass("active_text");
        }

        if($(window).scrollTop() > 50) {
            $(".header").addClass("active_header");
        } else {
           $(".header").removeClass("active_header");
        }
    });
});
</script>

<script>
    $(document).ready(function() {
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("body").toggleClass("show-sidebar");
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#menu-toggle-close").click(function(e) {
            e.preventDefault();
            $("body").removeClass("show-sidebar");
        });
    });
</script>

<script>
let navbar = document.querySelector(".navbar");
let searchBox = document.querySelector(".search-box .bx-search");

searchBox.addEventListener("click", ()=>{
  navbar.classList.toggle("showInput");
  if(navbar.classList.contains("showInput")){
    searchBox.classList.replace("bx-search" ,"bx-x");
  }else {
    searchBox.classList.replace("bx-x" ,"bx-search");
  }
});


let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}


let gamesArrow = document.querySelector(".games-arrow");
gamesArrow.onclick = function() {
 navLinks.classList.toggle("show1");
}
let servicesArrow = document.querySelector(".services-arrow");
servicesArrow.onclick = function() {
 navLinks.classList.toggle("show2");
}
let aboutArrow = document.querySelector(".about-arrow");
aboutArrow.onclick = function() {
 navLinks.classList.toggle("show3");
}
let languagesArrow = document.querySelector(".languages-arrow");
languagesArrow.onclick = function() {
 navLinks.classList.toggle("show4");
}
let moreArrow = document.querySelector(".more-arrow");
moreArrow.onclick = function() {
 navLinks.classList.toggle("show5");
}
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

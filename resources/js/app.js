import { initFlowbite } from 'flowbite';
import './bootstrap';
import 'flowbite';

  // /* SIDEBAR*/
  // var topLimit = $('#bar-fixed').offset().top;
  // $(window).scroll(function() {
  //   //console.log(topLimit <= $(window).scrollTop())
  //   if (topLimit <= $(window).scrollTop()) {
  //     $('#bar-fixed').addClass('stickIt')
  //   } else {
  //     $('#bar-fixed').removeClass('stickIt')
  //   }
  // });


document.addEventListener('livewire:navigated', () => {


    initFlowbite();

    /*GAME BANNER SLIDER*/
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var swiper = new Swiper(".gameBanner", {
        slidesPerView: 3,
        spaceBetween: 0,
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1,
            },
            1080: {
                slidesPerView: 2,
            },
        }

    //   centeredSlides: true,
    //   loop: true,
    //   autoplay: {
    //     delay: 5000,
    //     disableOnInteraction: false
    //   },
    //   pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true
    //   },
    //   navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev"
    //   },
    //   on: {
    //     autoplayTimeLeft(s, time, progress) {
    //       progressCircle.style.setProperty("--progress", 1 - progress);
    //       progressContent.textContent = `${Math.ceil(time / 1000)}s`;
    //     }
    //   }
    });

    //Company News Slider
    var swiper = new Swiper(".companyNews", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 10000,
            disableOnInteraction: false
        },
      });

      //4 Column Slider
      var swiper = new Swiper(".fourColumnSwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
      });




});






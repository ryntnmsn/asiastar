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
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 1 - progress);
          progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
      }
    });
});



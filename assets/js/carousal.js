/*Carousal Section*/ 

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  $(".mySwiper").hover(function() {
    (this).swiper.autoplay.stop();
    }, 
    function() {
    (this).swiper.autoplay.start();
  });
(function () {
  "use strict";


  /**
  * Glightbox
  */
  // Initialize GLightbox
  const glightbox = GLightbox({
    slideNavigation: false,
    selector: '.glightbox',
    width: '85vw',
    height: '85vh',
  });


  /**
   * Clients Slider
   */
  new Swiper(".swiper", {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    slidesPerView: "auto",
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60,
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80,
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 120,
      },
    },
  });
})();

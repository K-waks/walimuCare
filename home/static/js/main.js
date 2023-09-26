(function () {
  "use strict";


  /**
  * Initialize GLightbox
  */
  const glightbox = GLightbox({
    selector: '.glightbox',
    width: '85vw',
    height: '90vh',
  });


  /**
   * Back to top button
   */
  let backtotop = document.querySelector(".back-to-top");
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add("active");
      } else {
        backtotop.classList.remove("active");
      }
    };
    window.addEventListener("load", toggleBacktotop);
    window.addEventListener("scroll", toggleBacktotop);
  };


  /**
   * Service Provider Search Form
   */
  if (window.location.pathname === "/" || window.location.pathname === "/#") {
    document.addEventListener("DOMContentLoaded", function () {
      const countySelect = document.getElementById("county");
      const subCountySelect = document.getElementById("sub-county");
      const townSelect = document.getElementById("town");

      function populateCountyDropdown() {
        fetch(`/api/counties/`)
          .then((response) => response.json())
          .then((data) => {
            data.forEach(function (county) {
              countySelect.innerHTML += `<option value="${county.name}">${county.name}</option>`;
            });
            countySelect.disabled = false;
          });
      }

      // Call the function to populate the County dropdown initially
      populateCountyDropdown();

      countySelect.addEventListener("change", function () {
        const selectedCounty = countySelect.value;
        // Send a GET request to the DRF endpoint for sub-counties
        fetch(`/api/subcounties/?parent_county=${selectedCounty}`)
          .then((response) => response.json())
          .then((data) => {
            data.forEach(function (subcounty) {
              subCountySelect.innerHTML += `<option value="${subcounty.name}">${subcounty.name}</option>`;
            });
            subCountySelect.disabled = false;
          });
      });

      subCountySelect.addEventListener("change", function () {
        const selectedSubCounty = subCountySelect.value;
        // Send a GET request to the DRF endpoint for towns
        fetch(`/api/towns/?parent_subcounty=${selectedSubCounty}`)
          .then((response) => response.json())
          .then((data) => {
            data.forEach(function (town) {
              townSelect.innerHTML += `<option value="${town.name}">${town.name}</option>`;
            });
            townSelect.disabled = false;
          });
      });
    });
  }


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


  /**
   * Animation on scroll
   */
  window.addEventListener("load", () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false,
    });
  });
  
})();

(function () {
  "use strict";


  /**
   * Preloader
   */
  let preloader = document.getElementById('preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }


  /**
   * Back to top button
   */
  const backtotop = document.querySelector(".back-to-top");
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
  }


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


  /**
   * Scroll making header translucent
   */
  const header = document.querySelector("#header .header-nav");
  const offset = header.offsetTop;
  const toggleTranslucentHeader = () => {
    if (window.scrollY > offset) {
      header.classList.add("header-onscroll");
    } else {
      header.classList.remove("header-onscroll");
    };
  }
  window.addEventListener("scroll", toggleTranslucentHeader);


  /**
   * Initialize GLightbox
   */
  const glightbox = GLightbox({
    selector: ".glightbox",
    width: "85vw",
    height: "90vh",
  });


  /**
   * Service Provider Search Form
   */
  document.addEventListener("DOMContentLoaded", function () {
    const countySelect = document.getElementById("county");
    const subCountySelect = document.getElementById("subcounty");
    const townSelect = document.getElementById("town");
    const serviceSelect = document.getElementById("service");
    const searchButton = document.querySelector("#services form button");

    let counties = {};
    let subcounties = {};
    let towns = {};

    async function populateCountyDropdown() {
      const response = await fetch("static/json/counties.json");
      const jsonData = await response.json();
      counties = jsonData;
      Object.keys(counties).forEach(function (county_name) {
        countySelect.innerHTML += `<option value="${county_name}">${county_name}</option>`;
      });
      countySelect.disabled = false;
    }
    // Call the function to populate the County dropdown initially
    populateCountyDropdown();

    countySelect.addEventListener("change", function () {
      const selectedCounty = countySelect.value;
      subcounties = counties[selectedCounty];

      // Clear the sub-county and town dropdown lists
      subCountySelect.innerHTML = "<option selected>Select sub-county</option>";
      townSelect.innerHTML = "<option selected>Select town</option>";

      Object.keys(subcounties).forEach(function (subcounty_name) {
        subCountySelect.innerHTML += `<option value="${subcounty_name}">${subcounty_name}</option>`;
      });
      subCountySelect.disabled = false;
    });

    subCountySelect.addEventListener("change", function () {
      const selectedSubCounty = subCountySelect.value;
      towns = subcounties[selectedSubCounty];

      // Clear the town dropdown list
      townSelect.innerHTML = "<option selected>Select town</option>";

      // Iterate over the towns array and add options to the town dropdown list
      towns.forEach(function (town_name) {
        townSelect.innerHTML += `<option value="${town_name}">${town_name}</option>`;
      });
      townSelect.disabled = false;
    });

    // Enable Search button
    function enableSearchButton() {
      searchButton.classList.remove('disabled');
    }

    serviceSelect.addEventListener("change", function () {
      if (townSelect.value && serviceSelect.value) {
        enableSearchButton();
      }
    });
  });


  /**
  * Providers Table
  */
  const button = document.querySelector('#providers-table .glightbox');
  const searchProvidersFormParams = new URLSearchParams(window.location.search);
  if (searchProvidersFormParams.get('county') && searchProvidersFormParams.get('subcounty') && searchProvidersFormParams.get('town') && searchProvidersFormParams.get('service')) {
    button.click();
    // history.replaceState(null, null, window.location.pathname);
  };


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
   * Benefits Structure
   */
  const benefitsParams = new URLSearchParams(window.location.search);
  if (benefitsParams.has("benefits")) {
    const benefitsContainer = document.querySelector("#benefits");
    const benefits = benefitsParams.get("benefits");
    const category = benefitsParams.get("category");
    if (benefits !== null) {
      // NOTE: use the path that starts from the root directory and not like this - ../templates
      fetch(`static/templates/${benefits}.html`)
        .then((response) => response.text())
        .then((content) => {
          if (benefits === "wellness" && category !== null) {
            // If benefits is "wellness," perform additional DOM manipulations
            // Create a temporary container to hold the fetched content
            const tempContainer = document.createElement("div");
            tempContainer.innerHTML = content;
            const button = tempContainer.querySelector(`#${category} .accordion-button`);
            if (button) {
              button.classList.remove("collapsed");
            }
            const accordionBody = tempContainer.querySelector(`#${category} .accordion-collapse`);
            if (accordionBody) {
              accordionBody.classList.add("show");
            }
            benefitsContainer.innerHTML = tempContainer.innerHTML;
            // history.replaceState(null, null, window.location.pathname);
            window.location.hash = `#${category}`;

          } else {
            benefitsContainer.innerHTML = content;
            // history.replaceState(null, null, window.location.pathname);
            window.location.hash = "#benefits-structure";
          }
        });
    }
  }

})();

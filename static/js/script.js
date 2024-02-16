(function () {
	"use strict";

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
	 * Initialize GLightbox
	 */
	const glightbox = GLightbox({
		selector: ".glightbox",
		width: "85vw",
		height: "90vh",
	});

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
   * Chat button
   */
	const chat = document.querySelector(".chat");
	const chattext = document.querySelector(".chat span");
	let chattimeoutid;

	if (chat) {
		chat.addEventListener("mouseenter", () => {
			chattext.classList.remove("d-none");
			chattimeoutid = setTimeout(() => {
				chattext.classList.remove("invisible");
			}, 200);

			chat.addEventListener("mouseleave", () => {
				clearTimeout(chattimeoutid);
				chattext.classList.add("d-none");
				chattext.classList.add("invisible");
			});
		});
	}

	/**
	 * Other-Products button
	 */
	const otherproducts = document.querySelector(".other-products");
	const otherproductstext = document.querySelector(".other-products span");
	let otherproductstimeoutid;

	if (otherproducts) {
		otherproducts.addEventListener("mouseenter", () => {
			otherproductstext.classList.remove("d-none");
			otherproductstimeoutid = setTimeout(() => {
				otherproductstext.classList.remove("invisible");
			}, 200);

			otherproducts.addEventListener("mouseleave", () => {
				clearTimeout(otherproductstimeoutid);
				otherproductstext.classList.add("d-none");
				otherproductstext.classList.add("invisible");
			});
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
	 * Apply .scrolled class to the body as the page is scrolled down
	 */
	const selectBody = document.querySelector('body');
	const selectHeader = document.querySelector('#header');

	function toggleScrolled() {
		if (!selectHeader.classList.contains('sticky-top')) return;
		window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
	}

	document.addEventListener('scroll', toggleScrolled);
	window.addEventListener('load', toggleScrolled);

	/**
	 * Service Provider Search Form
	 */
	/* *
	   *
	   * NOTE: Ensure that the correct url path is used
	   *     : eg. If files are in the folders MinetKe/tsc then use "MinetKe/tsc/index.php"
	   * 
	   * 
	   */

	if (window.location.pathname === "/TSC/index.php" || window.location.pathname === "/TSC/") {
		document.addEventListener("DOMContentLoaded", function () {
			const countySelect = document.getElementById("County");
			const subCountySelect = document.getElementById("SubCounty");
			const townSelect = document.getElementById("Town");

			let selectedCounty;
			let selectedSubCounty;

			// Initially populate the County dropdown
			async function populateCountyDropdown() {
				fetch("api/county.php")
					.then((response) => response.json())
					.then((jsonData) => {
						jsonData.forEach(function (county) {
							const county_name = county.county;
							countySelect.innerHTML += `<option value="${county_name}">${county_name}</option>`;
						});
					});
			}
			populateCountyDropdown();

			// Initially populate the SubCounty dropdown
			async function populateSubCountyDropdown() {
				fetch("api/subcounty.php")
					.then((response) => response.json())
					.then((jsonData) => {
						jsonData.forEach(function (subcounty) {
							const subcounty_name = subcounty.subcounty.trim(); // remove leading whitespace from the subcounty string
							subCountySelect.innerHTML += `<option value="${subcounty_name}">${subcounty_name}</option>`;
						});
					});
			}
			populateSubCountyDropdown();

			// Initially populate the Town dropdown
			async function populateTownDropdown() {
				fetch("api/serviceprovider.php")
					.then((response) => response.json())
					.then((jsonData) => {
						const uniqueTowns = new Set(); // create a Set to store unique town names
						jsonData.forEach(function (serviceprovider) {
							const town_name = serviceprovider.Town;
							if (town_name && !uniqueTowns.has(town_name)) { // check if town name is not an empty string and not already in the Set
								uniqueTowns.add(town_name); // add town name to the Set if it's not already there
								townSelect.innerHTML += `<option value="${town_name}">${town_name}</option>`;
							}
						});
					});
			}
			populateTownDropdown();

			// Populate the SubCounty and Town dropdowns against County filter
			countySelect.addEventListener("change", function () {
				selectedCounty = countySelect.value;

				fetch(`api/subcounty.php?parent_county=${selectedCounty}`)
					.then((response) => response.json())
					.then((jsonData) => {
						subCountySelect.innerHTML = "<option value='' selected>Select sub-county</option>";
						jsonData.forEach(function (subcounty) {
							const subcounty_name = subcounty.subcounty.trim(); // remove leading whitespace from the subcounty string
							subCountySelect.innerHTML += `<option value="${subcounty_name}">${subcounty_name}</option>`;
						});
					});

				fetch(`api/serviceprovider.php?parent_county=${selectedCounty}`)
					.then((response) => response.json())
					.then((jsonData) => {
						townSelect.innerHTML = "<option value='' selected>Select town</option>";
						const uniqueTowns = new Set(); // create a Set to store unique town names
						jsonData.forEach(function (serviceprovider) {
							const town_name = serviceprovider.Town;
							if (town_name && !uniqueTowns.has(town_name)) {
								uniqueTowns.add(town_name);
								townSelect.innerHTML += `<option value="${town_name}">${town_name}</option>`;
							}
						});
					});
			});

			// Populate the Town dropdown against SubCounty filter
			subCountySelect.addEventListener("change", function () {
				selectedSubCounty = subCountySelect.value;

				fetch(`api/serviceprovider.php?parent_subcounty=${selectedSubCounty}`)
					.then((response) => response.json())
					.then((jsonData) => {
						townSelect.innerHTML = "<option value='' selected>Select town</option>";
						const uniqueTowns = new Set(); // create a Set to store unique town names
						jsonData.forEach(function (town) {
							const town_name = town.Town;
							if (town_name && !uniqueTowns.has(town_name)) {
								uniqueTowns.add(town_name);
								townSelect.innerHTML += `<option value="${town_name}">${town_name}</option>`;
							}
						});
					});
			});
		});
	}

	/**
	* Providers Table
	*/
	if (window.location.pathname === "/TSC/index.php" || window.location.pathname === "/TSC/") {
		const button = document.querySelector('#providers-table .glightbox');
		const searchProvidersFormParams = new URLSearchParams(window.location.search);
		const county = searchProvidersFormParams.get('County');
		if (county || county === "") {
			button.click();
			history.replaceState(null, null, window.location.pathname);
		};
	}

	/**
	 * Clients Slider
	 */
	if (window.location.pathname === "/TSC/index.php" || window.location.pathname === "/TSC/") {
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
	}

	/**
	 * Benefits Structure
	 */
	if (window.location.pathname === "/TSC/benefits-structure.php") {
		const benefitsParams = new URLSearchParams(window.location.search);
		if (benefitsParams.has("benefits")) {
			const benefitsContainer = document.querySelector("#benefits");
			const benefits = benefitsParams.get("benefits");
			const category = benefitsParams.get("category");
			if (benefits !== null) {
				// NOTE: use the path that starts from the root directory and not like this - ../html
				fetch(`static/html/${benefits}.html`)
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
						} else {
							benefitsContainer.innerHTML = content;
						}
					});
				history.replaceState(null, null, window.location.pathname);
				window.location.hash = "#benefits-structure";
			}
		}
	}

	/**
	* Contacts Form
	*/
	if (window.location.pathname === "/TSC/county-offices.php") {
		document.addEventListener("DOMContentLoaded", function () {
			const countySelect = document.getElementById("County");

			// Initially populate the County dropdown
			async function populateCountyDropdown() {
				fetch("api/county.php")
					.then((response) => response.json())
					.then((jsonData) => {
						jsonData.forEach(function (county) {
							const county_name = county.county;
							countySelect.innerHTML += `<option value="${county_name}">${county_name}</option>`;
						});
					});
			}
			populateCountyDropdown();
		});
	}

	/**
	* Contacts Table
	*/
	if (window.location.pathname === "/TSC/county-offices.php") {
		const button = document.querySelector('#contacts-table .glightbox');
		const searchProvidersFormParams = new URLSearchParams(window.location.search);
		const county = searchProvidersFormParams.get('County');
		if (county || county === "") {
			button.click();
			history.replaceState(null, null, window.location.pathname);
		};
	}

})();

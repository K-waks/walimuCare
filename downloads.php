<?php
require_once("api/contacts-list.php");
require_once("api/serviceprovider-list.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="theme-color" content="#c3a22c" />
    <meta name="author" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:image" content="" />
    <meta property="og:locale" content="" />
    <title>Walimu Care | Downloads</title>

    <!-- Favicons & Webmanifest -->
    <link rel="icon" href="static/img/icon/favicon.png" />
    <link rel="apple-touch-icon" href="static/img/icon/apple-touch-icon.png" />
    <link rel="manifest" href="static/manifest.webmanifest" />

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" />

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="static/vendor/aos/aos.css" />
    <link rel="stylesheet" href="static/vendor/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="static/vendor/bootstrap-icons/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="static/vendor/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="static/vendor/glightbox/glightbox.min.css" />

    <!-- Main CSS File -->
    <link rel="stylesheet" href="static/css/style.css">

    <!-- Vendor JS Files -->
    <script src="static/vendor/aos/aos.js" defer></script>
    <script src="static/vendor/bootstrap/bootstrap.bundle.min.js" defer></script>
    <script src="static/vendor/swiper/swiper-bundle.min.js" defer></script>
    <script src="static/vendor/glightbox/glightbox.min.js" defer></script>
    <script src="static/vendor/htmx/htmx.min.js" defer></script>

    <!-- Main JS File -->
    <script src="static/js/script.js" defer></script>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container-fluid header-nav">
            <div class="clearfix position-relative h-100">
                <a href="index.php">
                    <img src="static/img/icon/Afya-kwa-walimu.png" width="" height="90%" alt="" class="float-start">
                </a>
                <img src="static/img/icon/TSC.png" width="" height="90%" alt="" class="float-end">
                <!-- Desktop Navigation -->
                <div class="d-none d-lg-flex desktop-nav">
                    <div class="nav d-table text-uppercase">
                        <div class="d-table-row">
                            <div class="d-table-cell border-end border-secondary nav-item">
                                <a class="nav-link py-0" aria-current="page" href="index.php">Home</a>
                            </div>
                            <div class="d-table-cell border-end border-secondary nav-item">
                                <a class="nav-link py-0" href="about.html">About Afya Kwa Walimu</a>
                            </div>
                            <div class="d-table-cell border-end border-secondary nav-item">
                                <a class="nav-link py-0" href="benefits-structure.html">Benefits Structure</a>
                            </div>
                            <div class="d-table-cell border-end border-secondary nav-item">
                                <a class="nav-link py-0" href="county-offices.php">County Offices</a>
                            </div>
                            <div class="d-table-cell border-end border-secondary nav-item">
                                <a class="nav-link py-0" href="register.html">Registration</a>
                            </div>
                            <div class="d-table-cell border-end border-secondary nav-item">
                                <a class="nav-link active py-0" href="downloads.php">Downloads</a>
                            </div>
                            <div class="d-table-cell nav-item">
                                <a class="nav-link py-0" href="https://collaborationkenya.minet.com/consents?page=/TSC" target="_blank">Documents Uploads</a>
                            </div>
                        </div>
                    </div>
                    <div class="hot-line">
                        Emergency hot line <i class="bi bi-telephone-fill"></i> <span>1528</span>
                    </div>
                </div>
                <div class="d-flex d-lg-none mobile-nav-btn">
                    <button type="button" class="btn btn-primary d-lg-none d-inline-block" data-bs-toggle="modal" data-bs-target="#mobilenavModal">
                        <i class="bi bi-list text-light"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Navigation -->
        <div id="mobilenavModal" class=" mobile-nav modal fade" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="mobilenav-hot-line">
                            Emergency hot line <i class="bi bi-telephone-fill"></i> <span>1528</span>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-unstyled">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link"><i class="bi bi-caret-right-fill"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link active"><i class="bi bi-caret-right-fill"></i>
                                    About Afya Kwa Walimu</a>
                            </li>
                            <li class="nav-item">
                                <a href="benefits-structure.html" class="nav-link"><i class="bi bi-caret-right-fill"></i> Benefits Structure</a>
                            </li>
                            <li class="nav-item">
                                <a href="county-offices.php" class="nav-link"><i class="bi bi-caret-right-fill"></i>
                                    County Offices</a>
                            </li>
                            <li class="nav-item">
                                <a href="register.html" class="nav-link"><i class="bi bi-caret-right-fill"></i>
                                    Registration</a>
                            </li>
                            <li class="nav-item">
                                <a href="downloads.php" class="nav-link"><i class="bi bi-caret-right-fill"></i>
                                    Downloads</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://collaborationkenya.minet.com/consents?page=/TSC" class="nav-link" target="_blank"><i class="bi bi-caret-right-fill"></i> Documents Uploads</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ======= Main ======= -->
    <main id="main">
        <!-- Breadcrumbs -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container-fluid breadcrumbs-padding">
                <ol>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Downloads</li>
                </ol>
                <h2>Downloads</h2>
            </div>
        </section>
        <!-- Downloads Section -->
        <section id="downloads">
            <div class="container-fluid section-padding">

                <div class="d-flex justify-content-center flex-wrap downloads">
                    <a class="shadow d-block" href="static/pdf/TSC CHANGE OF DEPENDENT FORM.PDF" target="_blank">
                        <div class="icon">
                            <i class="bi bi-file-pdf"></i>
                        </div>
                        <h5 class="mb-4">Download/View</h5>
                        <p>Change of details Form</p>
                    </a>
                    <a class="shadow d-block" href="static/pdf/county-offices-contacts.pdf" target="_blank">
                        <div class="icon">
                            <i class="bi bi-file-pdf"></i>
                        </div>
                        <h5 class="mb-4">Download/View</h5>
                        <p>County Offices Contact list</p>
                    </a>
                    <a class="shadow d-block" href="static/pdf/service-providers-list.pdf" target="_blank">
                        <div class="icon">
                            <i class="bi bi-file-pdf"></i>
                        </div>
                        <h5 class="mb-4">Download/View</h5>
                        <p>Updated Service Providers list</p>
                    </a>
                </div>
        </section>
        <!-- Cta Section -->
        <section id="cta">
            <div class="container">
                <div class="text-center">
                    <h3>TSC Medical Scheme Brochure</h3>
                    <p> Learn more about the Teachers' Medical Scheme, a comprehensive health insurance plan for TSC-employed teachers and their dependents, by downloading the brochure below.</p>
                    <a class="cta-btn" href="static/pdf/TSC Medical Scheme Brochure.pdf" target="_blank">Download <i class="bi bi-file-pdf"></i></a>
                </div>
            </div>
        </section>
    </main>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container-fluid section-padding">
            <div class="row">
                <div class="quick-links col-12 col-sm-6 col-md-4 d-flex justify-content-md-start">
                    <div>
                        <h3>Quick links</h3>
                        <ul class="text-uppercase ">
                            <li>
                                <a href="about.html"><i class="bi bi-caret-right-fill"></i><span>Afya Kwa Walimu explained</span></a>
                            </li>
                            <li>
                                <a href="benefits-structure.html"><i class="bi bi-caret-right-fill"></i><span>Benefits Structure</span></a>
                            </li>
                            <li>
                                <a href="benefits-structure.html#eligibility"><i class="bi bi-caret-right-fill"></i><span>Eligibility</span></a>
                            </li>
                            <li>
                                <a href="register.html"><i class="bi bi-caret-right-fill"></i><span>Registration</span></a>
                            </li>
                            <li>
                                <a href="benefits-structure.html#scheme-exclusions"><i class="bi bi-caret-right-fill"></i><span>Exclusions</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="benefits-links col-12 col-sm-6 col-md-4 d-flex justify-content-md-center">
                    <div>
                        <h3>Benefits</h3>
                        <ul class="text-uppercase">
                            <li>
                                <a href="benefits-structure.html?benefits=inpatient"><i class="bi bi-caret-right-fill"></i><span>Inpatient</span></a>
                            </li>
                            <li>
                                <a href="benefits-structure.html?benefits=outpatient"><i class="bi bi-caret-right-fill"></i><span>Outpatient</span></a>
                            </li>
                            <li>
                                <a href="benefits-structure.html?benefits=additional-cover"><i class="bi bi-caret-right-fill"></i><span>Additional cover</span></a>
                            </li>
                            <li>
                                <a href="benefits-structure.html?benefits=wellness&category=maternity"><i class="bi bi-caret-right-fill"></i><span>Maternity</span></a>
                            </li>
                            <li>
                                <a href="benefits-structure.html?benefits=wellness&category=optical"><i class="bi bi-caret-right-fill"></i><span>Optical</span></a>
                            </li>
                            <li>
                                <a href="benefits-structure.html?benefits=wellness&category=dental"><i class="bi bi-caret-right-fill"></i><span>Dental</span></a>
                            </li>
                            <li>
                                <a href="benefits-structure.html?benefits=wellness&category=evacuation"><i class="bi bi-caret-right-fill"></i><span>Local Road and Air Evacuation</span></a>
                            </li>
                            <li>
                                <a href="benefits-structure.html?benefits=wellness&category=international-treatment"><i class="bi bi-caret-right-fill"></i><span>International Treatment</span></a>
                            </li>
                            <li>
                                <a href="benefits-structure.html?benefits=wellness&category=psychiatric-counsellings"><i class="bi bi-caret-right-fill"></i><span>Psychiatric and Counsellings</span></a>
                            </li>
                            <li>
                                <a href="benefits-structure.html?benefits=wellness&category=last-respects"><i class="bi bi-caret-right-fill"></i><span>Funeral and Last Respects</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="contacts-links col-12 col-md-4 d-flex justify-content-md-end">
                    <div class="flex-sm-grow-1 flex-md-grow-0">
                        <h3>Contacts</h3>
                        <div class="d-flex flex-column flex-sm-row flex-md-column">
                            <ul class="flex-grow-1">
                                <li>
                                    <a href="tel:+254 (730) 604 000"><i class="bi bi-telephone"></i><span>1528</span></a>
                                </li>
                                <li>
                                    <a href="tel:+254 (730) 604 000"><i class="bi bi-phone"></i><span>+254 (730) 604000</span></a>
                                </li>
                                <li>
                                    <a href="mailto:afya@minet.com"><i class="bi bi-envelope"></i><span>afya@minet.com</span></a>
                                </li>
                                <li>
                                    <a href="tel:*202*07#"><i class="bi bi-hash"></i><span>USSD *202*07#</span></a>
                                </li>
                                <li>
                                    <a href="https://minet.com/Kenya" target="_blank"><i class="bi bi-globe"></i><span>minet.com/Kenya</span></a>
                                </li>
                                <li>
                                    <a href="https://play.google.com/store/apps/details?id=com.healthierkenya.minet&pli=1" target="_blank"><i class="bi bi-phone-landscape"></i><span>WalimuCare App</span></a>
                                </li>
                                <li>
                                    <a href="static/pdf/TSC Medical Scheme Brochure.pdf" target="blank"><i class="bi bi-file-earmark-text"></i><span>Teachers medical scheme</span></a>
                                </li>
                            </ul>
                            <div class="register-btn flex-grow-1" data-aos="fade-in">
                                <a class="text-uppercase" href="register.html"><span>Register</span><i class="bi bi-caret-right-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ======= Bottom Bar ======= -->
    <section id="bottom-bar">
        <div class="container-fluid section-padding">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col">
                    <div class="copyright text-center text-lg-start pe-xl-5">
                        <p>All rights reserved ©️ Minet Group 2023</p>
                    </div>
                </div>
                <div class="col">
                    <div class="social-links d-flex justify-content-evenly">
                        <a href="" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="" target="_blank"><i class="bi bi-twitter-x"></i></a>
                        <a href="" target="_blank"><i class="bi bi-linkedin"></i></a>
                        <a href="" target="_blank"><i class="bi bi-youtube"></i></a>
                        <a href="" target="_blank"><i class="bi bi-telegram"></i></a>
                        <a href="" target="_blank"><i class="bi bi-vimeo"></i></a>
                        <a href="" target="_blank"><i class="bi bi-snapchat"></i></a>
                        <a href="" target="_blank"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col col-md-12 col-lg-4">
                    <div class="slogan text-center text-lg-end text-uppercase ps-xl-5">
                        <p>Risk.Reinsurance.People</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Preloader ======= -->
    <div id="preloader"></div>
    <!-- ======= Back To Top Arrow ======= -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>
</body>

</html>
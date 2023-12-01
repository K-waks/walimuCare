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
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:image" content="" />
    <meta property="og:locale" content="" />

    <!-- Title -->
    <?php
    $pageTitleMapping = array(
        'index.php' => 'Home',
        'about.php' => 'About Afya Kwa Walimu',
        'benefits-structure.php' => 'Benefits Structure',
        'county-offices.php' => 'County Offices',
        'register.php' => 'Registration',
        'downloads.php' => 'Downloads',
    );
    $currentPage = basename($_SERVER['PHP_SELF']);
    $pageTitle = isset($pageTitleMapping[$currentPage]) ? 'Walimu Care - ' . $pageTitleMapping[$currentPage] : 'Walimu Care';
    ?>
    <title><?php echo $pageTitle; ?></title>

    <!-- Favicons & Webmanifest -->
    <link rel="icon" href="static/img/icon/favicon.png" />
    <link rel="apple-touch-icon" href="static/img/icon/apple-touch-icon.png" />
    <link rel="manifest" href="static/manifest-old.webmanifest" />

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" />

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="vendors/aos/aos.css" />
    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="vendors/bootstrap-icons/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="vendors/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="vendors/glightbox/glightbox.min.css" />

    <!-- Main CSS File -->
    <link rel="stylesheet" href="static/css/style.css">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="sticky-top">
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
                            <a class="nav-link <?php echo ($currentPage === 'index.php') ? 'active' : ''; ?> py-0" href="index.php">Home</a>
                        </div>
                        <div class="d-table-cell border-end border-secondary nav-item">
                            <a class="nav-link <?php echo ($currentPage === 'about.php') ? 'active' : ''; ?> py-0" href="about.php">About Afya Kwa Walimu</a>
                        </div>
                        <div class="d-table-cell border-end border-secondary nav-item">
                            <a class="nav-link <?php echo ($currentPage === 'benefits-structure.php') ? 'active' : ''; ?> py-0" href="benefits-structure.php">Benefits Structure</a>
                        </div>
                        <div class="d-table-cell border-end border-secondary nav-item">
                            <a class="nav-link <?php echo ($currentPage === 'county-offices.php') ? 'active' : ''; ?> py-0" href="county-offices.php">County Offices</a>
                        </div>
                        <div class="d-table-cell border-end border-secondary nav-item">
                            <a class="nav-link <?php echo ($currentPage === 'register.php') ? 'active' : ''; ?> py-0" href="register.php">Registration</a>
                        </div>
                        <div class="d-table-cell border-end border-secondary nav-item">
                            <a class="nav-link <?php echo ($currentPage === 'downloads.php') ? 'active' : ''; ?> py-0" href="downloads.php">Downloads</a>
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
        <!-- Mobile Navigation -->
        <div id="mobilenavModal" class="mobile-nav modal fade" tabindex="-1">
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
                                <a href="index.php" class="nav-link <?php echo ($currentPage === 'index.php') ? 'active' : ''; ?>"><i class="bi bi-caret-right-fill"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link <?php echo ($currentPage === 'about.php') ? 'active' : ''; ?>"><i class="bi bi-caret-right-fill"></i> About Afya Kwa Walimu</a>
                            </li>
                            <li class="nav-item">
                                <a href="benefits-structure.php" class="nav-link <?php echo ($currentPage === 'benefits-structure.php') ? 'active' : ''; ?>"><i class="bi bi-caret-right-fill"></i> Benefits Structure</a>
                            </li>
                            <li class="nav-item">
                                <a href="county-offices.php" class="nav-link <?php echo ($currentPage === 'county-offices.php') ? 'active' : ''; ?>"><i class="bi bi-caret-right-fill"></i> County Offices</a>
                            </li>
                            <li class="nav-item">
                                <a href="register.php" class="nav-link <?php echo ($currentPage === 'register.php') ? 'active' : ''; ?>"><i class="bi bi-caret-right-fill"></i> Registration</a>
                            </li>
                            <li class="nav-item">
                                <a href="downloads.php" class="nav-link <?php echo ($currentPage === 'downloads.php') ? 'active' : ''; ?>"><i class="bi bi-caret-right-fill"></i> Downloads</a>
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
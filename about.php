<?php include("includes/header.php"); ?>
<!-- ======= Main ======= -->
<main id="main">
    <!-- Breadcrumbs -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container-fluid breadcrumbs-padding">
            <ol>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>About</li>
            </ol>
            <h2>About Us</h2>
        </div>
    </section>
    <!-- About Section -->
    <section id="about">
        <div class="container-fluid section-padding">
            <div class="row">
                <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative" data-aos="fade-right">
                    <!-- 
                            * Glightbox can display videos hosted on Youtube or Vimeo, or self-hosted videos
                            * The original video can be found at this url: https://www.facebook.com/watch/?v=256432546739937
                         -->
                    <!-- Youtube or Vimeo url -->
                    <!-- <a href="youtube or vimeo url" class="glightbox play-btn mb-4"></a> -->

                    <!-- Or self-host the about video -->
                    <a href="static/video/About_Afya_Kwa_Walimu.mp4" class="glightbox play-btn mb-4"></a>
                </div>
                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h4 data-aos="fade-up">About us</h4>
                    <h3 data-aos="fade-up">Afya Kwa Walimu Explained</h3>
                    <p data-aos="fade-up">
                        The Afya Kwa Walimu cover is the comprehensive and enhanced medical cover for
                        teachers employed by TS.
                    </p>
                    <div class="icon-box" data-aos="fade-up">
                        <div class="icon">
                            <i class="bi bi-eye"></i>
                        </div>
                        <h4 class="title">Our Vision</h4>
                        <p class="description">
                            To be the preferred provider of quality and affordable health care
                            solutions for teachers and their dependents in Kenya.
                        </p>
                    </div>
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon">
                            <i class="bi bi-award"></i>
                        </div>
                        <h4 class="title">Our Mission</h4>
                        <p class="description">
                            To deliver innovative and customer-centric health care solutions that
                            enhance the well-being of teachers and their dependents.
                        </p>
                    </div>
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <h4 class="title">Our Values</h4>
                        <p class="description">
                            We uphold the values of integrity, professionalism, excellence, teamwork,
                            and customer satisfaction in all our operations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cta Section -->
    <section id="cta">
        <div class="container">
            <div class="text-center">
                <h3>TSC Medical Scheme Brochure</h3>
                <p> Learn more about the Teachers' Medical Scheme, a comprehensive health insurance plan for
                    TSC-employed teachers and their dependents, by downloading the brochure below.</p>
                <a class="cta-btn" href="documents/TSC Medical Scheme Brochure.pdf" target="_blank">Download <i class="bi bi-file-pdf"></i></a>
            </div>
        </div>
    </section>
</main>
<?php include("includes/footer.php"); ?>
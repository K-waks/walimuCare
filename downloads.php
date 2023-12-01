<?php
require_once("api/contacts.php");
require_once("api/list_serviceproviders.php");
?>

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
                <li>Downloads</li>
            </ol>
            <h2>Downloads</h2>
        </div>
    </section>
    <!-- Downloads Section -->
    <section id="downloads">
        <div class="container-fluid section-padding">

            <div class="d-flex justify-content-center flex-wrap downloads">
                <a class="shadow d-block" href="documents/TSC CHANGE OF DEPENDENT FORM.PDF" target="_blank">
                    <div class="icon">
                        <i class="bi bi-file-pdf"></i>
                    </div>
                    <h5 class="mb-4">Download/View</h5>
                    <p>Change of details Form</p>
                </a>
                <a class="shadow d-block" href="documents/county-offices-contacts.pdf" target="_blank">
                    <div class="icon">
                        <i class="bi bi-file-pdf"></i>
                    </div>
                    <h5 class="mb-4">Download/View</h5>
                    <p>County Offices Contact list</p>
                </a>
                <a class="shadow d-block" href="documents/service-providers-list.pdf" target="_blank">
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
                <a class="cta-btn" href="documents/TSC Medical Scheme Brochure.pdf" target="_blank">Download <i class="bi bi-file-pdf"></i></a>
            </div>
        </div>
    </section>
</main>
<?php include("includes/footer.php"); ?>
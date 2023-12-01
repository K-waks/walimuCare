<?php include("includes/header.php"); ?>
<!-- ======= Main ======= -->
<main id="main">
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-bar d-flex justify-content-end">
            <div id="first-col"></div>
            <div id="second-col"></div>
            <div id="third-col"></div>
        </div>
        <div id="herocarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false" data-bs-interval="6000">
            <div class="carousel-indicators d-flex flex-column">
                <button type="button" data-bs-target="#herocarousel" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1" class="active"></button>
                <button type="button" data-bs-target="#herocarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#herocarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" data-aos="fade-in">
                <div class="carousel-item slide-1 active">
                    <p>
                        Guard your daily smile with the
                        <br>
                        Wellness from <span>Afya Kwa Walimu</span>
                    </p>
                </div>
                <div class="carousel-item slide-2">
                    <p>
                        Protect your <span>whole family</span> with
                        <br>
                        <span>Afya Kwa Walimu</span> medical scheme
                    </p>
                </div>
            </div>
        </div>
        <p class="hero-caption">Risk.Reinsurance.People</p>
    </section>
    <!-- ======= Services Section ======= -->
    <section id="services">
        <div class="container-fluid section-padding py-0">
            <div class="row g-4">
                <div class="col-12 col-lg-5">
                    <form id="search-provider-form" action="" method="get">
                        <h3>Search a provider near you.</h3>
                        <div class="row row-cols-2 g-4">
                            <div class="col">
                                <div class="form-group">
                                    <label for="County" class="form-label">County</label>
                                </div>
                                <div class="form-group">
                                    <select id="County" name="County" class="form-select">
                                        <option value="" selected>Select county</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="Town" class="form-label">Town</label>
                                </div>
                                <div class="form-group">
                                    <select id="Town" name="Town" class="form-select">
                                        <option value="" selected>Select town</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="SubCounty" class="form-label">Sub-county</label>
                                </div>
                                <div class="form-group">
                                    <select id="SubCounty" name="SubCounty" class="form-select">
                                        <option value="" selected>Select sub-county</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="Service" class="form-label">Services</label>
                                </div>
                                <div class="form-group">
                                    <select id="Service" name="Service" class="form-select">
                                        <option value="" selected>Select service</option>
                                        <option value="Inpatient">Inpatient</option>
                                        <option value="Outpatient">Outpatient</option>
                                        <option value="Optical">Optical</option>
                                        <option value="Dental">Dental</option>
                                        <option value="Maternity">Maternity</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="search-provider-btn">
                            <button type="submit" class="btn btn-primary rounded-0">Search <i class="bi bi-caret-right-fill"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="services-icons rounded-2 user-select-none">
                        <div class="row row-cols-2 row-cols-sm-4 g-3">
                            <div class="col">
                                <a href="benefits-structure.php?benefits=wellness&category=maternity">
                                    <img src="static/img/service/Maternity.png" width="" height="" alt="" class="img-fluid shadow">
                                </a>
                            </div>
                            <div class="col">
                                <a href="benefits-structure.php?benefits=wellness&category=optical">
                                    <img src="static/img/service/Optical.png" width="" height="" alt="" class="img-fluid shadow">
                                </a>
                            </div>
                            <div class="col">
                                <a href="benefits-structure.php?benefits=wellness&category=dental">
                                    <img src="static/img/service/Dental.png" width="" height="" alt="" class="img-fluid shadow">
                                </a>
                            </div>
                            <div class="col">
                                <a href="benefits-structure.php?benefits=wellness&category=evacuation">
                                    <img src="static/img/service/RoadEvacuation.png" width="" height="" alt="" class="img-fluid shadow">
                                </a>
                            </div>
                            <div class="col" data-aos="flip-left">
                                <a href="benefits-structure.php?benefits=wellness&category=international-treatment">
                                    <img src="static/img/service/InternationalTravel.png" width="" height="" alt="" class="img-fluid shadow">
                                </a>
                            </div>
                            <div class="col" data-aos="flip-left" data-aos-delay="100">
                                <a href="benefits-structure.php?benefits=wellness&category=evacuation">
                                    <img src="static/img/service/AirEvacuation.png" width="" height="" alt="" class="img-fluid shadow">
                                </a>
                            </div>
                            <div class="col" data-aos="flip-left" data-aos-delay="200">
                                <a href="benefits-structure.php?benefits=wellness&category=psychiatric-counsellings">
                                    <img src="static/img/service/Psychiatric&Counselling.png" width="" height="" alt="" class="img-fluid shadow">
                                </a>
                            </div>
                            <div class="col" data-aos="flip-left" data-aos-delay="300">
                                <a href="benefits-structure.php?benefits=wellness&category=last-respects">
                                    <img src="static/img/service/LastRespects.png" width="" height="" alt="" class="img-fluid shadow">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Service Providers Table ======= -->
    <section id="providers-table" class="d-none">
        <a href="#providers-table" class="glightbox d-none"></a>
        <?php
        if (!empty($_GET)) {
            require_once("api/db_conn.php");

            try {
                $conn = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

                // Retrieve search query from form submit GET request
                $county = $_GET['County'];
                $subcounty = $_GET['SubCounty'];
                $town = $_GET['Town'];
                $service = $_GET['Service'];

                // if only Service is selected
                if ($county == "" && $subcounty == "" && $town == "" && $service != "") {
                    $sql = "SELECT * FROM serviceprovider WHERE Services LIKE :Services AND Active != 'NO'";
                }
                // else if only Town is selected
                else if ($county == "" && $subcounty == "" && $town != "" && $service == "") {
                    $sql = "SELECT * FROM serviceprovider WHERE Town LIKE :Town AND Active != 'NO'";
                }
                // else if only SubCounty is selected
                else if ($county == "" && $subcounty != "" && $town == "" && $service == "") {
                    $sql = "SELECT * FROM serviceprovider WHERE SubCounty LIKE :SubCounty AND Active != 'NO'";
                }
                // else if only County is selected
                else if ($county != "" && $subcounty == "" && $town == "" && $service == "") {
                    $sql = "SELECT * FROM serviceprovider WHERE County LIKE :County AND Active != 'NO'";
                }
                // else if only Town and Service are selected
                else if ($county == "" && $subcounty == "" && $town != "" && $service != "") {
                    $sql = "SELECT * FROM serviceprovider WHERE Town LIKE :Town AND Services LIKE :Services AND Active != 'NO'";
                }
                // else if only SubCounty and Service are selected
                else if ($county == "" && $subcounty != "" && $town == "" && $service != "") {
                    $sql = "SELECT * FROM serviceprovider WHERE SubCounty LIKE :SubCounty AND Services LIKE :Services AND Active != 'NO'";
                }
                // else if only County and Service are selected
                else if ($county != "" && $subcounty == "" && $town == "" && $service != "") {
                    $sql = "SELECT * FROM serviceprovider WHERE County LIKE :County AND Services LIKE :Services AND Active != 'NO'";
                }
                // else if only SubCounty and Town are selected
                else if ($county == "" && $subcounty != "" && $town != "" && $service == "") {
                    $sql = "SELECT * FROM serviceprovider WHERE SubCounty LIKE :SubCounty AND Town LIKE :Town AND Active != 'NO'";
                }
                // else if only County and Town are selected
                else if ($county != "" && $subcounty == "" && $town != "" && $service == "") {
                    $sql = "SELECT * FROM serviceprovider WHERE County LIKE :County AND Town LIKE :Town AND Active != 'NO'";
                }
                // else if only County and SubCounty are selected
                else if ($county != "" && $subcounty != "" && $town == "" && $service == "") {
                    $sql = "SELECT * FROM serviceprovider WHERE County LIKE :County AND SubCounty LIKE :SubCounty AND Active != 'NO'";
                }
                // else if only SubCounty, Town and Service are selected
                else if ($county == "" && $subcounty != "" && $town != "" && $service != "") {
                    $sql = "SELECT * FROM serviceprovider WHERE SubCounty LIKE :SubCounty AND Town LIKE :Town AND Services LIKE :Services AND Active != 'NO'";
                }
                // else if only County, Town and Service are selected
                else if ($county != "" && $subcounty == "" && $town != "" && $service != "") {
                    $sql = "SELECT * FROM serviceprovider WHERE County LIKE :County AND Town LIKE :Town AND Services LIKE :Services AND Active != 'NO'";
                }
                // else if only County, SubCounty and Service are selected
                else if ($county != "" && $subcounty != "" && $town == "" && $service != "") {
                    $sql = "SELECT * FROM serviceprovider WHERE County LIKE :County AND SubCounty LIKE :SubCounty AND Services LIKE :Services AND Active != 'NO'";
                }
                // else if only County, SubCounty and Town are selected
                else if ($county != "" && $subcounty != "" && $town != "" && $service == "") {
                    $sql = "SELECT * FROM serviceprovider WHERE County LIKE :County AND SubCounty LIKE :SubCounty AND Town LIKE :Town AND Active != 'NO'";
                }
                // if County, Sub County, Town and Service are all selected
                else if ($county != "" && $subcounty != "" && $town != "" && $service != "") {
                    $sql = "SELECT * FROM serviceprovider WHERE County LIKE :County AND SubCounty LIKE :SubCounty AND Town LIKE :Town AND Services LIKE :Services AND Active != 'NO'";
                }
                // else if all are None return all service providers
                else {
                    $sql = "SELECT * FROM serviceprovider WHERE Active != 'NO'";
                }

                // Prepare statement
                $stmt = $conn->prepare($sql);

                echo "<h2>Service Providers</h2>";

                $display = "<h3>Showing results for: ";

                // Bind parameters
                if ($county != "") {
                    $stmt->bindParam(":County", $county);
                    $display .= $county . " County | ";
                }
                if ($subcounty != "") {
                    $stmt->bindParam(":SubCounty", $subcounty);
                    $display .= $subcounty . " Sub-County | ";
                }
                if ($town != "") {
                    $stmt->bindParam(":Town", $town);
                    $display .= $town . " Town | ";
                }
                if ($service != "") {
                    $stmt->bindParam(":Services", $service);
                    $display .= $service . " Service";
                }
                if ($county == "" && $subcounty == "" && $town == "" && $service == "") {
                    $display .= "All service locations";
                }

                $display .= "</h3>";

                echo $display;

                // Execute statement
                $stmt->execute();

                // Fetch results
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (count($results) == 0) {
                    echo "<h3>No results found.</h3>";
                } else {
                    // Output table
                    echo "<div class='table-responsive'>";
                    echo "<table class='table table-dark table-bordered table-striped table-hover w-100'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>Type</th>";
                    echo "<th>Access</th>";
                    echo "<th>Facility Name</th>";
                    echo "<th>County</th>";
                    echo "<th>SubCounty</th>";
                    echo "<th>Town</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    foreach ($results as $row) {
                        echo "<tr>";
                        echo "<td>" . $row['Type'] . "</td>";
                        echo "<td>" . $row['Access'] . "</td>";
                        echo "<td>" . $row['FacilityName'] . "</td>";
                        echo "<td>" . $row['County'] . "</td>";
                        echo "<td>" . $row['SubCounty'] . "</td>";
                        echo "<td>" . $row['Town'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
                }
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
                die();
            }
        }
        ?>
    </section>
    <!-- ======= Clients Section ======= -->
    <section id="clients">
        <div class="container-fluid section-padding">
            <div class="swiper" data-aos="zoom-in">
                <div class="swiper-wrapper align-items-center user-select-none">
                    <div class="swiper-slide">
                        <img src="static/img/client/minetlogo.png" class="img-fluid" width="" height="" alt="Minet logo">
                    </div>
                    <div class="swiper-slide">
                        <img src="static/img/client/Bliss-healthcare-logo.png" class="img-fluid" width="" height="" alt="Bliss Healthcare logo">
                    </div>
                    <div class="swiper-slide">
                        <img src="static/img/client/Pioneer-Assurance-logo.png" class="img-fluid" width="" height="" alt="Pioneer Assurance logo">
                    </div>
                    <div class="swiper-slide">
                        <img src="static/img/client/cicinsurance-logo.png" class="img-fluid" width="" height="" alt="CIC insurance logo">
                    </div>
                    <div class="swiper-slide">
                        <img src="static/img/client/old-mutual-logo.png" class="img-fluid" width="" height="" alt="Old Mutual logo">
                    </div>
                    <div class="swiper-slide">
                        <img src="static/img/client/Britam-Logo.png" class="img-fluid" width="" height="" alt="Britam logo">
                    </div>
                    <div class="swiper-slide">
                        <img src="static/img/client/makllogo.png" class="img-fluid" width="" height="" alt="Medical Administrator Kenya Ltd logo">
                    </div>
                    <div class="swiper-slide">
                        <img src="static/img/client/star-discover-general-insurance.png" class="img-fluid" width="" height="" alt="Star Discover General Insurance logo">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- ======= Comprehensive Benefits Section ======= -->
    <section id="comprehensive-benefits" class="section-bg">
        <div class="container-fluid section-padding">
            <h2>Comprehensive Benefits</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                <div class="col" data-aos="fade-up">
                    <div class="d-grid gap-4">
                        <div>
                            <img class="img-fluid" src="static/img/benefit_card_1.png" width="" height="" alt="">
                        </div>
                        <h3>Inpatient benefits</h3>
                        <p>
                            This benefit covers treatment that requires admission to a hospital or day care
                            surgery/procedure.
                        </p>
                    </div>
                    <a href="benefits-structure.php?benefits=inpatient">Read More <i class="bi bi-chevron-right"></i></a>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="d-grid gap-4">
                        <div>
                            <img class="img-fluid" src="static/img/benefit_card_2.png" width="" height="" alt="">
                        </div>
                        <h3>Outpatient benefits</h3>
                        <p>
                            This benefit covers treatment that requires admission to a hospital or day care
                            surgery/procedure.
                        </p>
                    </div>
                    <a href="benefits-structure.php?benefits=outpatient">Read More <i class="bi bi-chevron-right"></i></a>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="200">
                    <div class="d-grid gap-4">
                        <div>
                            <img class="img-fluid" src="static/img/benefit_card_3.png" width="" height="" alt="">
                        </div>
                        <h3>Additional benefits</h3>
                        <p>
                            Beyond outpatient and in-patient services, Afya kwa walimu extends to world wide cover
                            that also allows for treatment of chronic illnesses.
                        </p>
                    </div>
                    <a href="benefits-structure.php?benefits=additional-cover">Read More <i class="bi bi-chevron-right"></i></a>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="300">
                    <div class="d-grid gap-4">
                        <div>
                            <img class="img-fluid" src="static/img/benefit_card_4.png" width="" height="" alt="">
                        </div>
                        <h3>Wellness education</h3>
                        <p>
                            The ultimate shield of protection for you and your family will always be wellness. Let's
                            show you how to keep yourself well.
                        </p>
                    </div>
                    <a href="benefits-structure.php?benefits=wellness">Read More <i class="bi bi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include("includes/footer.php"); ?>
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
                <li>County Offices</li>
            </ol>
            <h2>County Offices</h2>
        </div>
    </section>
    <!-- County-Offices section -->
    <section id="county-offices">
        <div class="container-fluid section-padding">
            <h3>Search Contact Details.</h3>
            <p>Select County from the drop down list below then click on search to load details of the selected County</p>
            <div class="d-flex justify-content-center">
                <form id="search-provider-form" role="form" action="" method="get" class="w-75">
                    <div class="form-floating form-group mt-3">
                        <select id="County" name="County" class="form-select">
                            <option value="" selected>All counties</option>
                        </select>
                        <label for="County">Select county</label>
                    </div>
                    <div class="contact-btn form-group text-center mt-3">
                        <button type="submit" class="btn rounded-0">Search <i class="bi bi-caret-right-fill"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ======= Contacts Table ======= -->
    <section id="contacts-table" class="d-none">
        <a href="#contacts-table" class="glightbox d-none"></a>
        <?php
        if (!empty($_GET)) {
            require_once("api/db_conn.php");

            try {
                $conn = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

                // Retrieve search query from form submit GET request
                $county = $_GET['County'];

                echo "<h2>Contacts</h2>";

                $display = "<h3>Showing results for: ";


                // Prepare SQL statement
                if ($county != "") {
                    $stmt = $conn->prepare("SELECT * FROM contacts WHERE county LIKE :county AND Active != 'NO'");
                    $stmt->bindParam(":county", $county);
                    $display .= $county . " County";
                } else {
                    $stmt = $conn->prepare("SELECT * FROM contacts WHERE Active != 'NO'");
                    $display .= "All contacts";
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
                    echo "<th>County</th>";
                    echo "<th>Location</th>";
                    echo "<th>contacts</th>";
                    echo "<th>email</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    foreach ($results as $row) {
                        echo "<tr>";
                        echo "<td>" . $row['county'] . "</td>";
                        echo "<td>" . $row['location'] . "</td>";
                        echo "<td>" . $row['contacts'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
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
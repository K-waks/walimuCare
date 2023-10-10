<?php
    // Set up database connection
    $user = "mariadb";
    $password = "mariadb";
    $database = "minetkedb";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

        // Retrieve search query from GET request
        $parent_county = $_GET["parent_county"];
        
        // if not null, return subcounties where county is the parent_county
        if ($parent_county != null) {
            $stmt = $conn->prepare("SELECT county_code FROM county WHERE county LIKE :parent_county");
            $stmt->bindParam(":parent_county", $parent_county);
            $stmt->execute();
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
            $county_code = $results["county_code"];

            $stmt = $conn->prepare("SELECT * FROM subcounty WHERE county LIKE $county_code");
        }
        // else, return all subcounties
        else {
            $stmt = $conn->prepare("SELECT * FROM subcounty");
        }

        $stmt->execute();

        // Fetch results
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Output results as JSON
        header("Content-Type: application/json");
        echo json_encode($results);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
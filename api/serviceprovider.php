<?php
require_once("db-conn.php");

try {
    $conn = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

    // Retrieve search query from GET request
    $parent_county = $_GET["parent_county"];
    $parent_subcounty = $_GET["parent_subcounty"];

    // if both parent_county and parent_subcounty are not null
    if ($parent_county != null && $parent_subcounty != null) {
        $stmt = $conn->prepare("SELECT * FROM serviceprovider WHERE County LIKE :parent_county AND SubCounty LIKE :parent_subcounty");
        $stmt->bindParam(":parent_county", $parent_county);
        $stmt->bindParam(":parent_subcounty", $parent_subcounty);
    }
    // if parent_county is null and parent_subcounty is not null
    else if ($parent_county == null && $parent_subcounty != null) {
        $stmt = $conn->prepare("SELECT * FROM serviceprovider WHERE SubCounty LIKE :parent_subcounty");
        $stmt->bindParam(":parent_subcounty", $parent_subcounty);
    }
    // if parent_county is not null and parent_subcounty is null
    else if ($parent_county != null && $parent_subcounty == null) {
        $stmt = $conn->prepare("SELECT * FROM serviceprovider WHERE County LIKE :parent_county");
        $stmt->bindParam(":parent_county", $parent_county);
    }
    // if both parent_county and parent_subcounty are null
    else {
        $stmt = $conn->prepare("SELECT * FROM serviceprovider");
    }

    $stmt->execute();

    // Fetch results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output results as JSON
    header("Content-Type: application/json");
    echo json_encode($results);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

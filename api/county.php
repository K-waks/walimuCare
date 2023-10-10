<?php
    // Set up database connection
    $user = "mariadb";
    $password = "mariadb";
    $database = "minetkedb";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

        $stmt = $conn->prepare("SELECT * FROM county");
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
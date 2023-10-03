<?php
$host = 'your_database_host';
$user = 'your_username';
$password = 'your_password';
$database = 'your_database_name';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

$stmt = $pdo->query("SELECT * FROM your_table_name");
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

$endpoints = [];

foreach ($records as $record) {
    $endpoints[] = "/api/records/{$record['id']}";
}

header('Content-Type: application/json');
echo json_encode($endpoints, JSON_PRETTY_PRINT);

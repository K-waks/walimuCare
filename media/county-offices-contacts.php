<?php
require_once('tcpdf/tcpdf.php');

$user = "mariadb";
$password = "mariadb";
$database = "minetkedb";

try {
    $conn = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

    // Prepare SQL statement
    $stmt = $conn->prepare("SELECT * FROM contacts WHERE Active != 'NO'");

    // Execute statement
    $stmt->execute();

    // Fetch results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Create PDF
    $pdf = new TCPDF();

    // Add a page
    $pdf->AddPage();

    // Set font to a UTF-8 compatible font
    $pdf->SetFont('times', '', 12);

    // Output table with simplified inline styles
    $html = <<<EOD
        <table style='border-collapse: collapse; width: 100%;'>
            <thead style='background-color: #343a40; color: #ffffff;'>
                <tr>
                    <th style='border: 1px solid #dee2e6;'>County</th>
                    <th style='border: 1px solid #dee2e6;'>Location</th>
                    <th style='border: 1px solid #dee2e6;'>Contacts</th>
                    <th style='border: 1px solid #dee2e6;'>Email</th>
                </tr>
            </thead>
            <tbody>
    EOD;

    foreach ($results as $row) {
        $html .= <<<EOD
            <tr>
                <td style='border: 1px solid #dee2e6;'>{$row['county']}</td>
                <td style='border: 1px solid #dee2e6;'>{$row['location']}</td>
                <td style='border: 1px solid #dee2e6;'>{$row['contacts']}</td>
                <td style='border: 1px solid #dee2e6;'>{$row['email']}</td>
            </tr>
        EOD;
    }

    $html .= <<<EOD
            </tbody>
        </table>
    EOD;

    // Output the HTML content
    $pdf->writeHTML($html, true, false, true, false, '');

    // Open the PDF in the browser
    $pdf->Output('county-offices-contacts.pdf', 'I');

    echo 'PDF created successfully.';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
}

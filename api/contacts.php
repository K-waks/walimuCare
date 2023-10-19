<?php
require_once("db-conn.php");
require_once("tcpdf/tcpdf.php");

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
    $pdf->SetFont("times", "", 12);

    // Output table with simplified inline styles
    $html = <<<EOD
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #ffffff; /* Background color for the entire table */
        }

        thead {
            background-color: #343a40;
            color: #ffffff;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: center;
        }

        tbody tr:nth-child(odd) {
            background-color: #f2f2f2; /* Alternate row color */
        }

        tbody tr {
            border-bottom: 1px solid #dee2e6; /* Border for each row */
        }

        thead th {
            font-weight: bold;
            height: 40px; /* Header height */
        }
    </style>
        <table class="table">
            <thead>
                <tr>
                    <th>County</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Contacts</th>
                    <th>Email</th>
                    <th>Office</th>
                    <th>Physical Location</th>
                </tr>
            </thead>
            <tbody>
    EOD;

    foreach ($results as $row) {
        $html .= <<<EOD
            <tr>
                <td>{$row["county"]}</td>
                <td>{$row["name"]}</td>
                <td>{$row["Designation"]}</td>
                <td>{$row["contacts"]}</td>
                <td>{$row["email"]}</td>
                <td>{$row["Office"]}</td>
                <td>{$row["location"]}</td>
            </tr>
        EOD;
    }

    $html .= <<<EOD
            </tbody>
        </table>
    EOD;

    // Output the HTML content and save the PDF file to a directory
    $pdf->writeHTML($html, true, false, true, false, "");
    $pdf->Output(dirname(__DIR__) . "/static/pdf/county-offices-contacts.pdf", "F");



    // echo "PDF created successfully.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

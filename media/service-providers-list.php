<?php
    require_once('tcpdf/tcpdf.php');

    $user = "mariadb";
    $password = "mariadb";
    $database = "minetkedb";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

        // Prepare SQL statement
        $stmt = $conn->prepare("SELECT * FROM serviceprovider WHERE Active != 'NO' LIMIT 1000");
       
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
                        <th style='border: 1px solid #dee2e6;'>Type</th>
                        <th style='border: 1px solid #dee2e6;'>Access</th>
                        <th style='border: 1px solid #dee2e6;'>FacilityName</th>
                        <th style='border: 1px solid #dee2e6;'>County</th>
                        <th style='border: 1px solid #dee2e6;'>SubCounty</th>
                        <th style='border: 1px solid #dee2e6;'>Town</th>
                    </tr>
                </thead>
                <tbody>
        EOD;
    
        foreach ($results as $row) {
            $html .= <<<EOD
                <tr>
                    <td style='border: 1px solid #dee2e6;'>{$row['Type']}</td>
                    <td style='border: 1px solid #dee2e6;'>{$row['Access']}</td>
                    <td style='border: 1px solid #dee2e6;'>{$row['FacilityName']}</td>
                    <td style='border: 1px solid #dee2e6;'>{$row['County']}</td>
                    <td style='border: 1px solid #dee2e6;'>{$row['SubCounty']}</td>
                    <td style='border: 1px solid #dee2e6;'>{$row['Town']}</td>
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
        $pdf->Output('service-providers-list.pdf', 'I');
    
        echo 'PDF created successfully.';
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        die();
    }
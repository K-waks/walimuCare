<?php
require_once("db_conn.php");
require_once 'vendors/tcpdf/tcpdf.php';

try {
    $conn = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

    // Prepare SQL statement
    $stmt = $conn->prepare("SELECT * FROM contacts WHERE Active != 'NO' ORDER BY county ASC");

    // Execute statement
    $stmt->execute();

    // Fetch results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    class MYPDF extends TCPDF
    {
        //Page header
        public function Header()
        {
            // Get current date and time in the specified timezone
            $currentDateTime = date_create('now', new DateTimeZone('Africa/Nairobi'));
            $formattedDateTime = $currentDateTime->format('d/m/Y H:i');

            // Logo on the left
            $this->Image(dirname(dirname(__FILE__)) . "/static/img/icon/Afya-kwa-walimu.png", 5, 5, 27, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

            // Second logo on the right
            $this->Image(dirname(dirname(__FILE__)) . "/static/img/icon/TSC.png", 264, 5, 27, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

            // Title
            $this->Ln(10);
            $this->setFont('times', 'B', 20);
            $this->Cell(0, 15, "TEACHERS MEDICAL SCHEME COUNTY CONTACTS LIST", 0, false, 'C', 0, '', 0, false, 'M', 'M');

            // Subheading with formatted date and time
            $this->Ln(10); // Move down 10 units
            $this->setFont('times', '', 12);
            $this->Cell(0, 10, "Status as at {$formattedDateTime} EAT", 0, false, 'C', 0, '', 0, false, 'M', 'M');
        }

        // Page footer
        public function Footer()
        {
            // Position at 15 mm from bottom
            $this->setY(-15);

            // Footer text
            $this->setFont('times', 'I', 10);
            $this->Cell(0, 10, "For more information, contact us on +254719049799,+254719044000 or email us on mmc.customerservice@minet.co.ke", 0, false, 'C', 0, '', 0, false, 'M', 'M');

            // Page number
            $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
        }
    }

    // create new PDF document
    $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, "A3", true, 'UTF-8', false);

    // set document information
    $pdf->setCreator(PDF_CREATOR);
    $pdf->setAuthor('Minet Kenya');
    $pdf->setTitle('County Offices Contacts');
    $pdf->setSubject('County Offices Contacts');
    $pdf->setKeywords('Minet, Afya Kwa Walimu, County Offices, Contacts');

    // set margins
    $pdf->setMargins(5, 35, 5); // left, top, right
    $pdf->setFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // Set font to a UTF-8 compatible font
    $pdf->SetFont("times", "", 11);

    // Add a page
    $pdf->AddPage();

    // Output table with simplified inline styles
    $html = <<<EOD
        <style>
            table {
                border-collapse: collapse;
                text-align: center;
                line-height: 1.5;
            }

            th{
                background-color: #0a0037;
                color: #ffffff;
                font-weight: bold;
                font-size: 16px;
                border: 1px solid #dee2e6;
            }

            td {
                border: 1px solid #dee2e6;
            }
        </style>

        <table>
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

    foreach ($results as $index => $row) {
        $evenOddClass = ($index % 2 == 0) ? 'even' : 'odd';

        if ($evenOddClass == "even") {
            $alternate = "background-color: #f2f2f2;";
        } else {
            $alternate = "";
        }

        $html .= <<<EOD
            <tr>
                <td style="background-color: #0a0037; color: #ffffff; font-style: italic; font-weight: bold;">{$row["county"]}</td>
                <td style="$alternate">{$row["name"]}</td>
                <td style="$alternate">{$row["Designation"]}</td>
                <td style="$alternate">{$row["contacts"]}</td>
                <td style="$alternate">{$row["email"]}</td>
                <td style="$alternate">{$row["Office"]}</td>
                <td style="$alternate">{$row["location"]}</td>
            </tr>
        EOD;
    }

    $html .= <<<EOD
            </tbody>
        </table>
    EOD;

    // Output the HTML content and save the PDF file to a directory
    $pdf->writeHTML($html, true, false, true, false, "");
    $pdf->Output(dirname(dirname(__FILE__)) . "/documents/county-offices-contacts.pdf", "F");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

<?php
require_once("db-conn.php");
require_once("tcpdf/tcpdf.php");

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
            // Set the timezone to Africa/Nairobi
            date_default_timezone_set('Africa/Nairobi');

            // Logo
            $this->Image(dirname(dirname(__FILE__)) . "/static/img/icon/Afya-kwa-walimu.png", 10, 5, 27, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

            // Set font for the title
            $this->setFont('helvetica', 'B', 20);

            // Title
            $this->Ln(3); // Move down 10 units
            $this->Cell(0, 15, "Teachers Medical Scheme County Contacts List", 0, false, 'C', 0, '', 0, false, 'M', 'M');

            // Set font for the subheading
            $this->setFont('helvetica', 'I', 14);

            // Get current date and time in the specified timezone
            $currentDateTime = date_create('now', new DateTimeZone('Africa/Nairobi'));
            $formattedDateTime = $currentDateTime->format('d/m/Y H:i');

            // Subheading with formatted date and time
            $this->Ln(10); // Move down 10 units
            $this->Cell(0, 10, "Status as at {$formattedDateTime} EAT", 0, false, 'C', 0, '', 0, false, 'M', 'M');

            // Set font for the subheading
            $this->setFont('helvetica', 'I', 10);

            // Subheading
            $this->Ln(10); // Move down 10 units
            $this->Cell(0, 10, "For more information, contact us on +254719049799,+254719044000 or email us on mmc.customerservice@minet.co.ke", 0, false, 'C', 0, '', 0, false, 'M', 'M');
        }
    }

    // create new PDF document
    $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, "A3", true, 'UTF-8', false);
    // set document information
    $pdf->setCreator(PDF_CREATOR);
    $pdf->setAuthor('Minet Kenya');
    $pdf->setTitle('Afya Kwa Walimu');
    $pdf->setSubject('County Offices Contacts');
    $pdf->setKeywords('Minet, Afya Kwa Walimu, County Offices, Contacts');

    // remove default header/footer
    $pdf->setPrintFooter(false);
    // the logo image is located in tcpdf/examples/images/ folder

    // set margins
    $pdf->setMargins(4, 33, 4);
    $pdf->setFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // Set font to a UTF-8 compatible font
    $pdf->SetFont("times", "I", 10);

    // Add a page
    $pdf->AddPage();

    // Output table with simplified inline styles
    $html = <<<EOD
        <style>
            table {
                border-collapse: collapse;
                text-align: center;
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
                <td  style="background-color: #0a0037; color: #ffffff; font-weight: bold; font-size: 13px;">{$row["county"]}</td>
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
    $pdf->Output(dirname(dirname(__FILE__)) . "/static/pdf/county-offices-contacts.pdf", "F");



    // echo "PDF created successfully.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

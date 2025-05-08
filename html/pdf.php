<?php

    // Make sure required fields are not empty
    if (!empty($_POST['submit'])){
        $pname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $roll = $_POST['rollno'];
        
        // Include FPDF library
        require("../fpdf/fpdf.php");
        
        // Create a new PDF instance
        $pdf = new FPDF();
        
        // Add a page to the PDF
        $pdf->AddPage();
        
        // Output the PDF (You need to specify a filename or an output destination here)
        // For example:
        $pdf->Output('generated_pdf.pdf', 'D'); // 'D' forces download
        
        
     
    }
?>

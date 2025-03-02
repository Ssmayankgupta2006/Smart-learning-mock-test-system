<?php

require 'vendor/autoload.php'; 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    // Create a new Spreadsheet object
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    
    // set the colomun nmes
    
    $sheet->setCellValue('A1', 'STUDENT NAME');
    $sheet->setCellValue('B1','STUDENT TCA NUMBER');
    $sheet->setCellValue('C1','SECTION NAME');
    $sheet->setCellValue('D1','PASSWORD');
    
    require "server.php";
    
    $selection = "SELECT `STUDENT NAME`, `STUDENT TCA NUMBER`, `SECTION NAME`, `PASSWORD` FROM `resistration`;";
    $selection_ex = mysqli_query($conn, $selection);
    // $selection_fetch=mysqli_fetch_assoc($selection_ex);
    
    $rowNumber = 2;
    while ($selection_fetch = mysqli_fetch_assoc($selection_ex)) {
        $sheet->setCellValue('A' . $rowNumber, $selection_fetch['STUDENT NAME']);
        $sheet->setCellValue('B' . $rowNumber, $selection_fetch['STUDENT TCA NUMBER']);
        $sheet->setCellValue('C' . $rowNumber, $selection_fetch['SECTION NAME']);
        $sheet->setCellValue('D' . $rowNumber, $selection_fetch['PASSWORD']);
        $rowNumber++;
    }
    
    // Write the spreadsheet to a temporary file
    $writer = new Xlsx($spreadsheet);
    $temp_file = tempnam(sys_get_temp_dir(), 'PHPSpreadsheet');
    $writer->save($temp_file);
    
    // Send the file to the browser for download
    header('Content-Description: File Transfer');
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="resistration.xlsx"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($temp_file));
    readfile($temp_file);
    unlink($temp_file); // Remove the temporary file
    exit();

?>

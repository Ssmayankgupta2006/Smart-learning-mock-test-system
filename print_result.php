<?php
require 'vendor/autoload.php'; 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
require "server.php";
session_start();
if(isset($_SESSION['database_use'])){
    $db=$_SESSION['database_use']."_result_sub";
    $selection = "SELECT `TCA`, `STUDENT NAME`, `DATE`, `SECTION NAME`, `RIGHT ANSWER`, `WRONG ANSWER`, `TIME OUT`, `TOTAL NUMBER OF QUESTION`, `MARKS` FROM `".$db."`;";
    $selection_ex = mysqli_query($conn, $selection);
    
    // Create a new Spreadsheet object
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();    $sheet->setCellValue('A1', 'TCA');
    $sheet->setCellValue('B1', 'STUDENT NAME');
    $sheet->setCellValue('C1', 'DATE');
    $sheet->setCellValue('D1', 'SECTION NAME');
    $sheet->setCellValue('E1', 'RIGHT ANSWER');
    $sheet->setCellValue('F1', 'WRONG ANSWER');
    $sheet->setCellValue('G1', 'TIME OUT');
    $sheet->setCellValue('H1', 'TOTAL NUMBER OF QUESTION');
    $sheet->setCellValue('I1', 'TOTAL MARKS');
    
    $rowNumber = 2;
    while ($selection_fetch = mysqli_fetch_assoc($selection_ex)) {
        $sheet->setCellValue('A' . $rowNumber, $selection_fetch['TCA']);
        $sheet->setCellValue('B' . $rowNumber, $selection_fetch['STUDENT NAME']);
        $sheet->setCellValue('C' . $rowNumber, $selection_fetch['DATE']);
        $sheet->setCellValue('D' . $rowNumber, $selection_fetch['SECTION NAME']);
        $sheet->setCellValue('E' . $rowNumber, $selection_fetch['RIGHT ANSWER']);
        $sheet->setCellValue('F' . $rowNumber, $selection_fetch['WRONG ANSWER']);
        $sheet->setCellValue('G' . $rowNumber, $selection_fetch['TIME OUT']);
        $sheet->setCellValue('H' . $rowNumber, $selection_fetch['TOTAL NUMBER OF QUESTION']);
        $sheet->setCellValue('I' . $rowNumber, $selection_fetch['MARKS']);
        $rowNumber++;
    }
    
    // Write the spreadsheet to a temporary file
    $writer = new Xlsx($spreadsheet);
    $temp_file = tempnam(sys_get_temp_dir(), 'PHPSpreadsheet');
    $writer->save($temp_file);
    
    // Send the file to the browser for download
    header('Content-Description: File Transfer');
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="result.xlsx"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($temp_file));
    readfile($temp_file);
    unlink($temp_file); // Remove the temporary file
    
    exit;
}
else{
    echo "<a>Choose Database name .</a>";
}
?>
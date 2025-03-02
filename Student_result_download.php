<?php
require "server.php";
// echo $_SESSION['tca'];
session_start();
require 'vendor/autoload.php'; 
use PhpOffice\PhpPresentation\PhpPresentation;
use PhpOffice\PhpPresentation\IOFactory;
use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Shape\row;

if((isset($_SESSION['tca']))&&(isset($_SESSION['database_use']))){
$tca=$_SESSION['tca'];
$database_use=$_SESSION['database_use'];
$db=$database_use."_result_sub";
$selection = "SELECT `TCA`, `STUDENT NAME`, `DATE`, `SECTION NAME`, `RIGHT ANSWER`, `WRONG ANSWER`, `TIME OUT`, `TOTAL NUMBER OF QUESTION`, `MARKS` FROM `".$db."` where `TCA`='$tca';";
$selection_ex = mysqli_query($conn, $selection);

// Create a new PHPPresentation object
$presentation = new PhpPresentation();
$currentSlide = $presentation->getActiveSlide();

// Set the title of the slide
$title = $currentSlide->createRichTextShape()
    ->setHeight(50)
    ->setWidth(600)
    ->setOffsetX(0)
    ->setOffsetY(50);
$title->getActiveParagraph()->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$textRun = $title->createTextRun('Your CTLD Aptitude Result');
$textRun->getFont()->setBold(true)->setName('Blackadder ITC')
    ->setSize(30)
    ->setColor(new Color(Color::COLOR_RED));

// Add table headers
$tableShape = $currentSlide->createTableShape(9); // 9 columns for 9 headers
$tableShape->setHeight(50);
$tableShape->setWidth(850);
$tableShape->setOffsetX(60);
$tableShape->setOffsetY(120);

$headers = ['TCA', 'STUDENT NAME', 'DATE', 'SECTION NAME', 'RIGHT ANSWER', 'WRONG ANSWER', 'TIME OUT', 'TOTAL NUMBER OF QUESTION', 'TOTAL MARKS'];

$headerRow = $tableShape->createRow();
foreach ($headers as $header) {
    $cell = $headerRow->nextCell();
    $cell->createTextRun($header)->getFont()->setName('Bahnschrift');
    
}

// Add data rows
while ($selection_fetch = mysqli_fetch_assoc($selection_ex)) {
    $row = $tableShape->createRow();
    $row->nextCell()->createTextRun($selection_fetch['TCA']);
    $row->nextCell()->createTextRun($selection_fetch['STUDENT NAME']);
    $row->nextCell()->createTextRun($selection_fetch['DATE']);
    $row->nextCell()->createTextRun($selection_fetch['SECTION NAME']);
    $row->nextCell()->createTextRun($selection_fetch['RIGHT ANSWER']);
    $row->nextCell()->createTextRun($selection_fetch['WRONG ANSWER']);
    $row->nextCell()->createTextRun($selection_fetch['TIME OUT']);
    $row->nextCell()->createTextRun($selection_fetch['TOTAL NUMBER OF QUESTION']);
    $row->nextCell()->createTextRun($selection_fetch['MARKS']);
}

// Write the presentation to a temporary file
$writer = IOFactory::createWriter($presentation, 'PowerPoint2007');
$temp_file = tempnam(sys_get_temp_dir(), 'PHPPresentation');
$writer->save($temp_file);

// Send the file to the browser for download
header('Content-Description: File Transfer');
header('Content-Type: application/vnd.openxmlformats-officedocument.presentationml.presentation');
header('Content-Disposition: attachment; filename="result.pptx"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($temp_file));
readfile($temp_file);
unlink($temp_file); // Remove the temporary file

exit;

}
else{
    echo "Login first";
}
?>

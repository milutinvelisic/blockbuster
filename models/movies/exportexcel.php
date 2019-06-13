<?php

$excelApp = new COM("Excel.Application");
$excelApp->Visible = true;

$excelFile = $excelApp->Workbooks->Add();

$worksheet = $excelFile->Worksheets("Sheet1");// ili List1 = zavisi od jezik windowsa


include '../../config/connection.php';

include "functions.php";

$movies = getAllMovies();

$br = 0;
$count = count($movies);

for ($i = 1; $i <= $count; $i++) {
    if ($br == $count) break;

    $polje = $worksheet->Range("A" . $i);
    $polje->activate;

    $polje->Value = $movies[$br]->mainCatInfoName;
    $br++;
}
$excelFile->_SaveAs("Filmovi" . time() . ".xlsx");
$excelFile->Save();
$excelFile->Saved=true;
$excelFile->Close;
$excelApp->Workbooks->Close();
$excelApp->Quit();
unset($polje);
unset($excelFile);
unset($excelApp);
header("Location: ../../index.php?p=admin&ap=dashboard");

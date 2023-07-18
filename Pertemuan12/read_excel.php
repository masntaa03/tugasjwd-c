<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$s= new Spreadsheet();

$sheet=$s->getActiveSheet();
$sheet->setCellValue('A1','Selamat Berhasil');

// tulis file ke hardisk
$write=new Xlsx($s);
$write->save('file_excel.xlsx');
<?php

$jawaban=true;

// kontrol program if
if ($jawaban){ // ekspresi
    // statemen
    echo "Selamat jawaban benar";
} else {
    echo "Maaf Jwaban kurang tepat";
}

$nilai = 80;
if($nilai > 85){
    $index='A';
}elseif($nilai >= 70){
    $index='B';
}elseif ($nilai >= 50){
    $index='C';
} else {
    $index='D';
}

// switch
$plat_nomor='AB';
switch ($plat_nomor) {
    case "AB":
        // statement ketika variabeel bernilai AB
        echo("Yogyakarya");
        break;
    case "AD":
        echo "Surakarta";
        break;
    case "BE" :
        echo "lampung";
        break;
    default :
        echo "plat nomor tidak diketahui";
        break;
}
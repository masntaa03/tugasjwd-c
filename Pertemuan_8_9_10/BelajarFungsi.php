<?php

function perkenalan() {
    // instruksi
    echo "Selamat Datang, ";
    echo ("Pada Acara Digitalent");
    echo '2023<br/>';
}

// memanggil fungsi
perkenalan();


function perkenalan_input( $nama, $salam ){
    echo "<hr>";
    echo $salam."," ;
    echo "perkenalan , nama saya ".$nama." <br>";
    echo "Senang berkenalan dengan anda";
}

perkenalan_input("gus nanang","selamat pagi");

$nama="Andi";
$salam="Selamat Siang";
perkenalan_i($nama,$salam);
perkenalan_input($salam="Selamat pagi",$nama="TONO");

function hitungUmur ( $thn_lahir, $thn_sekarang=2023 ){
    $umur= $thn_lahir-$thn_sekarang;
    return $umur;
}

echo ("\n umur saya adalah".hitungUmur(1992));

function faktorial($angka){
    if($angka < 2 ){
        return 1;
    }else {
        return ($angka * faktorial($angka - 1));
    }
}

echo("<br> Faktorial 5 adalah ".faktorial(5));
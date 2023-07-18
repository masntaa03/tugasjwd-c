<?php

function perkalian ($bil1,$bil2){
    $hasil=$bil1*$bil2;
    return $hasil;
}

// by value
function tambahSatu(&$value){
    $value=$value+1;
    //echo $value ;
}
$a=5;
tambahSatu($a);
echo $a;

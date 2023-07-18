<?php

$awal=microtime(true);
$si=0;
while ($si<1000){
    $tmp[]='';
    $si++;
}

$akhir=microtime(true);
$waktu=$akhir-$awal;
echo($waktu);







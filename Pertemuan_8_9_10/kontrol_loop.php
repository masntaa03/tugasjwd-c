<?php

// komponen 1- inisialisasi, 2-kondisi, 3-increment/decrement dan 4-statement

// for
for($i=1;$i<=10;$i++){
    echo "Perulangan ke".$i."<br>";
}

// while
$i=0;
while($i<=10){
    echo "perulangan degnan while ke-".$i."<br>";
    $i++;
}
//do-while
$i=0;
do{
    echo("Perulangan ke".$i);
    $i++;
}while ($i<=10);

//foreach
//array
$nama_mhs=array('budi','tono','andi','dedy');
$nama_mhs[3]="DODo";
echo($nama_mhs[0]);
echo($nama_mhs[3]);

foreach ($nama_mhs as $n){
    echo($n."<br>");
}

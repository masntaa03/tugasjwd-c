<?php

// membuka file
$file=fopen('welcome.txt','r+');


if($file){
    //menulis ke dalam file
    //fputs($file,"Selamat Datang");

    // memebaca data dari file
    //echo fgets($file);

    // memebaca format tag html depreaced since 7.3
    echo fgetss($file);
}

//menutup file
fclose($file);

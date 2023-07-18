<?php

$file="welcome.txt";
$open=fopen($file,"r");
if(!$open){
    print "File gagal Dibuka !";
    exit();
}

while (!feof($open)){
    $data=fgets($open,50);
    print($data."<br>");
}

fclose($open);

<?php
$host="localhost";
$u='root';
$p="";
$database="db_mhs";

// MySQLi (object-oriented)
$conOOP=new mysqli($host,$u,$p,$database);
if($conOOP->connect_error){
    die(" Koneksi gagal".$conOOP->connect_error);
}
echo("koneksi OOP berhasil");


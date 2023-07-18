<?php
$host="localhost";
$u='root';
$p="";
$database="db_mhs";

//PDO
try {
    $conn = new PDO("mysql:host=$host;dbname=myDB", $u, $p);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi Berhasil";
} catch(PDOException $e) {
    echo "Konksi Gagal " . $e->getMessage();
}
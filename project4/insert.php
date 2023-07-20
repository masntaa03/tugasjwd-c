<?php
session_start();

include_once 'koneksi.php';
if (isset($_POST["gender"])) {
  $jenis_kelamin = $_POST["gender"];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $agama = $_POST['agama'];
  $sekolah_asal = $_POST['sekolah_asal'];
  $query = "INSERT INTO siswa (nama,alamat,jenis_kelamin,agama,sekolah_asal) 
  VALUES ('$nama' , '$alamat' , '$jenis_kelamin' , '$agama', '$sekolah_asal')";
  if (mysqli_query($conn, $query)) {
    $_SESSION['status']='berhasil';
    header("location:index.php");
  } else if (!mysqli_query($conn, $query)) {
    $_SESSION['status']='gagal';
    header("location:index.php");
  }
  mysqli_close($conn);
} else {
  $_SESSION['status']='gagal';
  header("location:index.php");
}
?>
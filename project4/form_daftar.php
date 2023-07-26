<?php
include "helper/koneksi.php";
if (isset($_POST['submit'])) {
  $nama = mysqli_real_escape_string($conn, $_POST['nama']);
  $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
  $jenis_kelamin = mysqli_real_escape_string($conn, $_POST['jenis_kelamin']);
  $agama = mysqli_real_escape_string($conn, $_POST['agama']);
  $sekolah_asal = mysqli_real_escape_string($conn, $_POST['sekolah_asal']);

  $sql = "INSERT INTO pendaftaran(nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";
  $hasil = mysqli_query($conn, $sql) or die(mysqli_error($conn));

  if ($hasil) {
    header("location:index.php?status=sukses");
  } else {
    header('location = index.php?status=gagal');
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Siswa</title>
</head>

<body>
  <h2>Formulir Pendaftaran Siswa Baru</h2>
  <div style="border: 2px solid #000; padding: 5px;">

    <form action="form_daftar.php" method="post">
      <label for="nama">Nama :</label>
      <input type="text" name="nama" placeholder="nama lengkap"><br><br>
      <label for="alamat">Alamat :</label>
      <textarea name="alamat" cols="30" rows="4"></textarea><br><br>
      <label for="gender">Jenis Kelamin :</label>
      <input type="radio" name="jenis_kelamin" value="L"> Laki - Laki
      <input type="radio" name="jenis_kelamin" value="P"> Perempuan
      <br><br>
      <label for="agama">Agama :</label>
      <select name="agama">
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddha">Buddha</option>
        <option value="Protestan">Protestan</option>
      </select><br><br>
      <label for="asal">Asal Sekolah :</label>
      <input type="text" name="sekolah_asal" placeholder="nama sekolah"><br><br>
      <input type="submit" name="submit" value="Daftar">
    </form>
  </div>
</body>

</html>
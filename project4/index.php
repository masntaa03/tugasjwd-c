<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran</title>
</head>

<body>
  <h3>Pendaftaran Siswa Baru</h3>
  <h1>Digital Talent</h1>
  <h3>Menu</h3>
  <ul>
    <li><a href="form_daftar.php">Daftar Baru</a></li>
    <li><a href="list_siswa.php">Pendaftar</a></li>
  </ul>
  <br>
  <?php
  if (isset($_GET['status'])) {
    if ($_GET['status'] == "sukses") {
      echo "Pendaftaran siswa baru berhasil!";
    } elseif ($_GET['status'] == "gagal") {
      echo "Pendaftaran siswa baru gagal!";
    }
  }
  ?>
</body>

</html>
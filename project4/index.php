<?php
session_start();
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <div>
      <h2>Pendaftaran Siswa Baru</h2>
      <h1>Digital talent</h1>
      <h3>Menu</h3>
    </div>
    <div>
      <ul>
        <li><a href="form-daftar.php">Daftar Baru</a></li>
        <li><a href="list-siswa.php">Pendaftar</a></li>
      </ul>
    </div>
    <div>
      <?php
      if (isset($_SESSION['status']) == 'berhasil') {
        echo 'Pendaftaran Siswa Baru ' . $_SESSION['status'];
      } else {
        echo 'Pendaftaran Siswa Baru ' . $_SESSION['status'];
      }
      session_destroy();
      ?>
    </div>
  </div>
</body>

</html>
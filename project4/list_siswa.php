<?php
include "helper/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Siswa</title>
</head>

<body>
  <h2>Siswa yang sudah mendaftar</h2>
  <a href="form_daftar.php">[+] Tambah Data</a><br><br>
  <table border="2">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Jenis Kelamin</th>
      <th>Agama</th>
      <th>Sekolah Asal</th>
    </tr>
    <?php
    $query = "select * from pendaftaran";
    $list = mysqli_query($conn, $query);
    $jumlah_siswa = mysqli_num_rows($list);

    if (!$list) {
      die("Gagal terhubung ke database " . mysqli_errno($conn) . " " . mysqli_error($conn));
    }

    while ($data = mysqli_fetch_assoc($list)) {
    ?>
      <tr>
        <td><?= htmlspecialchars($data['no_daftar']); ?></td>
        <td><?= $data['nama']; ?></td>
        <td><?= htmlspecialchars($data['alamat']); ?></td>
        <td><?= htmlspecialchars($data['jenis_kelamin']); ?></td>
        <td><?= htmlspecialchars($data['agama']); ?></td>
        <td><?= htmlspecialchars($data['sekolah_asal']); ?></td>
      </tr>
    <?php } ?>
  </table>
  <p>Total :
    <?= $jumlah_siswa ?>
  </p>
</body>

</html>
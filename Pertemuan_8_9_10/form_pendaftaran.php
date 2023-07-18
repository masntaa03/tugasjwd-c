<?php
if(isset($_POST)) {
    $alamat = $_POST['Alamat'];
    $nama = $_POST['nama_pendaftar'];
    echo $nama." dan ".$alamat;
}

?>

<form method="post" action="form_pendaftaran.php">
    <label for="nama_pendaftar">Nama Anda</label>
  <input type="text" name="nama_pendaftar"><br>
    <label for="alamat"> Alamat tempat tinggl</label>
    <input type="text" name="Alamat">
    <input type="submit" value="Kirim">
</form>

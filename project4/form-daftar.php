<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container">
    <h2>Formulir Pendaftaran Siswa Baru</h2>
    <form action="insert.php" method="post">
      <div class="container-box">
        <label for="nama">Nama:</label>
        <input class="container-input" type="text" name="nama" id="nama" placeholder="nama lengkap" />
      </div>
      <br>
      <div class="container-box">
        <label for="alamat">Alamat:</label>
        <input class="container-input" type="text" name="alamat" id="alamat" />
      </div>
      <br>
      <div>
        <label for="gender">Jenis kelamin:</label>
        <input type="radio" name="gender" value="laki-laki"> Laki-Laki
        <input type="radio" name="gender" value="perempuan"> Perempuan
      </div>
      <br>
      <div class="container-box">
        <label>Agama: </label>
        <input list="agama" name="agama">
        <datalist id="agama">
          <option value="Islam" name="Islam">
          <option value="Kristen" name="Kristen">
          <option value="Hindhu" name="Hindhu">
          <option value="Buddha" name="Buddha">
          <option value="Konghucu" name="Buddha">
        </datalist>
      </div>
      <br>
      <div class="container-box">
        <label for="sekolah_asal">Sekolah Asal:</label>
        <input class="container-input" type="text" name="sekolah_asal" id="sekolah_asal" placeholder="sekolah asal" />
      </div>
      <br>
      <input type="submit" value="submit">
      <!-- <input type="text" onclick="send()" name="" id=""> -->
      <!-- <script>
        function send() {
          alert("Data Dimasukkan");
        }
      </script> -->
    </form>
  </div>
</body>

</html>
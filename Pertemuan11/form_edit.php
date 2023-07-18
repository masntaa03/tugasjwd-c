<?php

include 'lib_koneksi/con_pros.php';

$id= $_GET['id'];
//$id=$_POST['id'];
$id= mysqli_real_escape_string($conn,$id);
$mahasiswa =mysqli_query($conn,"select * from mahasiswa where id_mhs='$id'");
$row =mysqli_fetch_array($mahasiswa);
// memebuat data jurusan dalam bentuk array
$jurusan= array('TEKNIK INFORMATIKA','TEKNIK ELEKTRO','REKAMEDIS');
// memebuat function untuk set aktif radio button
function active_radio_button($value,$input){
    // apabila value dari radio sama dengan yang di input
    $result= $value==$input?'cheked':'';
    return $result;
}
if($row==null){
    echo('data tidak ada');
    die();
}
?>

<html>
    <head>
        <title>Digital Talent</title>
    </head>
    <body>
        <form method="post" action="form_edit.php">
            <input type="hidden" value="<?php echo htmlentities($row['id_mhs']) ?>" name="id_mhs">
            <table>
                <tr>
                    <td>NIM</td>
                    <td><input type="text"  value="<?php echo $row['nim'] ?>" name="nim"></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td><input type="text"  value="<?php echo htmlentities($row['nama']) ?>" name="nama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio"  value="<?php echo active_radio_button("L",$row['jenis_kelamin']) ?>" name="jenis_kelamin"> Laki-Laki
                        <input type="radio"  value="<?php echo active_radio_button("P",$row['jenis_kelamin']) ?>" name="jenis_kelamin"> Perempuan
                    </td>
                </tr>
                <input type="submit" value="kirim">
            </table>
        </form>
    </body>
</html>

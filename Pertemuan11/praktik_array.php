<?php

$arr_mahasiswa =array('andi','budi');
$arr_guru=['ilham','toto',123,154678,13213];


echo $arr_guru[0]."<br>";
echo $arr_guru[1]."<br>";
print_r($arr_guru);

$leng=count($arr_guru);

for($i=0;$i<$leng;$i++){
    echo $arr_guru[$i].'<br>';
}
foreach ($arr_guru as $guru){
    echo $guru."<br>";
}

$arr_anggota[0]='andi';
$arr_anggota[1]='budi';
// menambah array
$arr_anggota[2]='Ahmad';
$arr_anggota[3]='Amin';
$arr_anggota[]='tono';

// menghapus data didalam array
unset($arr_anggota[0]);
print_r($arr_anggota);

// array asosiatif
$artikel=[
    'Judul' => "Belajar PHP",
    "Penulis" => "digital talent"
];
echo "<h2>".$artikel['Judul']."</h2>";
$artikel['Penerbit']=" Penerbit Andi";
print_r($artikel);


$gambar3x3=[
  [2,3,4],
  [7,5,0],
  [4,3,8]
];
// menampilkan nilai 7
echo '<br>'.$gambar3x3[1][0];





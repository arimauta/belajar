<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array bileh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "tulisann", false];


// menampilkan array
// var_dump($hari);
// echo"<br>";
// print_r($bulan);
// echo"<br>";


// menampilkan 1 elemen pada array
// echo $arr1[0];
// echo"<br>";
// echo $bulan[1];


// menambahkan elemen baru
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";
var_dump($hari);
?>
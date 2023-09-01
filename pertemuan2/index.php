<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP 

// komen
/* komen*/
// 1 blok control /
// 2
// 3
// Standar Output
// echo, print angka gausah ""
//echo true = 1, echo false kosong
// print_r
// var_dump menghitung panjang string

// echo " e";

// print " p";

// print_r(" r");

// var_dump("var");

// Penulisan sintaks PHP
// 1. php didalam HTML
// 2. HTML didalam PHP

// Variabel dan Tipe Data
// Variabel digunakan untuk menampung sebuah nama
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// gaboleh ada spasinya harus pake _ 
// kalo - akan dikurangi

// kapan menggunakan ' dan " , kkhusus php " lebih sakti
// dengan itu konsep interpolasi klo ada variabel dikutip dua maka diisi $ 

// $nama="Sandhika";
// echo 'Halo, nama saya $nama';


// Operator
// aritmatika
// + - x / %
// $x=10;
// $y=20;
// echo $x * $y;


// penggabung string / concatenation / concat
// .
// $nama_depan="Sandhika";
// $nama_belakang="Galih";
// echo $nama_depan . " " . $nama_belakang;


// Assignment (operator penugasan)
// =, +=, -=, *=, /=, %=, .=
// $x=1;
// $x-=5;
// echo $x;
// $nama="Sandhika";
// $nama.=" ";
// $nama.="Galih";
// echo $nama;


// Perbandingan tidak mengecek tipedata 
// <, >, <=, >=, ==
// var_dump(1=="1");


// Identitas
// ===, !==
// var_dump(1=="1");


// Logika
// &&, ||, !
$x=30;
var_dump($x < 20 && $x % 2 == 0);
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang //<?php //echo $nama; ?></h1>
</body>
</html> -->
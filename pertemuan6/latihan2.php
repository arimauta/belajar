<?php
// $mahasiswa = [
//     ["Sandhika Galih", "043040023", "Email","Teknik Informatika"],
//     [" Galih", "043040023", "Email","Teknik Informatika"],
//     [" Gal", "043040023", "Email","Teknik Informatika"],

// ];

// arrau associative
// definisinya sama seperti array numerik, kecuali
// keynya adlaah string yang buat sendiri
$mahasiswa = [
    [
        "nama" => "sandhika galih",
        "nrp" => "04030023",
        "email" => "a@gmail.com",
        "jurusan" => "teknik",
        "gambar" => "b.png"
    ],
    [
        "nama" => "sandhika galih",
        "nrp" => "04030023",
        "email" => "a@gmail.com",
        "jurusan" => "teknik",
        "tugas" => [90, 80, 100],
        "gambar" => "d.png"

    ],
    [
        "nama" => "sandhika galih",
        "nrp" => "04030023",
        "email" => "a@gmail.com",
        "jurusan" => "teknik",
        "gambar" => "e.png"

    ]
];
echo $mahasiswa[1]["tugas"][1];
?>
<!DOCTYPE html>

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama :<?= $mhs["nama"]; ?></li>
            <li>NRP :<?= $mhs["nrp"]; ?></li>
            <li>Email :<?= $mhs["email"]; ?></li>
            <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>
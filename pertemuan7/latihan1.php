<?php
// SUPERGLOBALS
// variiable global milik PJP
// merupakan Array Associative
$mahasiswa = [
    [
        "nama" => "sandhika ",
        "nrp" => "0403",
        "email" => "a@gmail.com",
        "jurusan" => "teknik",
        "gambar" => "b.png"
    ],
    [
        "nama" => " galih",
        "nrp" => "0101",
        "email" => "b@gmail.com",
        "jurusan" => "maba",
        "gambar" => "d.png"

    ]
];
?>
<!DOCTYPE html>

<head>
    <title>GEt</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>
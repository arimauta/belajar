<?php 
    // Date
    // Untuk menampilkan tanggal dengan format tertentu
    // echo date("l,d-M-Y");


    //Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 januari 1970
    // echo time();
    // echo date("d M Y",time()+60*60*24*100);
    // echo date("d M Y",time()-60*60*24*100);
    // echo date("l",time()-60*60*24*100);

    
    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan tanggal, tahun
    // echo date("l", mktime(0,0,0,4,6,2001)); 
    // echo date("l", mktime(0,0,0,8,25,1985));
    
    
    // strtotime 
    // masukannya string
    // strlen() untuk menghitung panjang string
    // strcmp
    // explode() ketika mengambil sebuah file kita pecah ekstensi nama. file. ekstensi
    //hhtmlspecialchars() khusus untuk menjaga orang isenf seperti hacker
    // echo date("l", strtotime("25 aug 1985")); 


    // Utility 
    //var_dump()
    //isset()
    //empty() apakah variabel yang ada ,kosong apa ga
    // die() memberhentikan program kita, ketka ketemu bawah mati
    // sleep() berhenti sementara seperti 2dua maka ///.....
?>
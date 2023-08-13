<?php
    function coba ($d,$m,$y){
        // echo date("l",mktime(0,0,0,$m,$d,$y));
        echo date("l",strtotime("$d $m $y"));
    };

    function salam ($nama = "tes"){
        return "halo $nama";
    };
    // date = menampilkan tanggal dengan parameters l = nama hari , d = tanggal , M = bulan , Y = tahun
    // echo date("l,d-M-Y");
    
    // time = menunjukan detik dari UNIX timestamp (detik yang sudah berlalu sejak 1 january 1970)
    // echo time();
    
    // echo date("l",time()+60*60*24*100);
    
    // mktime = membuat detik sendiri parameter (jam, menit, detik, bulan, tanggal, tahun)
    // echo date("l",mktime(0,0,0,9,11,2004));
    // coba(11,9,2004);

    // strtotime = tanggal jadi detik (seperti mktime tapi memasukan string)
    // echo strtotime("11 september 2004");
    coba(11,"September",2004);


    // fungi terkait string
    // strlen = menghitung panjang string
    // strcmp = membandingkan antar string(compare)
    // explode = memecah string menjadi array
    // htmlspecialchars = mencegah orang memanipulasi web dengan html

    // fungsi bantuan
    // var_dump = debug
    // isset = mengecek variable sidah pernah di buat apa belum(true/false)?
    // empty = mengecek variable apakah isinya kosong (true/false)
    // die = memberhentikan program
    // sleep = memberhentikan program sementara

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1><?= salam(); ?></h1>
</body>
</html>
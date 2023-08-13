<?php
    function coba ($d,$m,$y){
        echo date("l",mktime(0,0,0,$m,$d,$y));
    };
    // date = menampilkan tanggal dengan parameters l = nama hari , d = tanggal , M = bulan , Y = tahun
    // echo date("l,d-M-Y");
    
    // time = menunjukan detik dari UNIX timestamp (detik yang sudah berlalu sejak 1 january 1970)
    // echo time();
    
    // echo date("l",time()+60*60*24*100);
    
    // mktime = membuat detik sendiri parameter (jam, menit, detik, bulan, tanggal, tahun)
    // echo date("l",mktime(0,0,0,9,11,2004));
    coba(11,9,2004);
    

?>
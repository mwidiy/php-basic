<?php 
    // variable scope pada php = variable di luar funtion tidak bisa di akses kecuali dengan menambahakan keyword global
    // variable di funtion bersifat local walaupun di kasih keyword global
    // $tes = "red face";
    // function coba (){
    //     global $tes;
    //     echo $tes;
    // };
    // coba();

    // variable super global = variable defauld php
    // variablenya berisi array associative
    // macam macamnya
    // $_GET;
    // $_POST;
    // $_REQUEST;
    // $_SESSION;
    // $_COOKIE;
    // $_SERVER;
    // $_ENV;


    // $_GET
    // dapat mengambil data lewat url yang dikirimkan oleh reques tipe get dan di terima dengan $_GET
    // keyword (?) pada url berarti ingin memasukan data ke urlnya sendiri

    var_dump($_GET);
?>
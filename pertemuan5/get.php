<?php 
    // variable scope pada php = variable di luar funtion tidak bisa di akses kecuali dengan menambahakan keyword global
    // variable di funtion bersifat local walaupun di kasih keyword global
    $tes = "red face";
    function coba (){
        global $tes;
        echo $tes;
    };
    coba();
?>
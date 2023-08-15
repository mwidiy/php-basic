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
    // var_dump($_GET);



    $markets = [
        "data1"=>[
            "foto"=>"img/akungenshin1.jpg",
            "jenis"=>"genshin impack",
            "harga"=>"1000000",
            "toko"=>"chandra store",
            "deskripsi"=>"jual akun genshin b5 lengkap sisanya lihat foto",
        ],
        "data2"=>[
            "foto"=>"img/akungenshin2.jpg",
            "jenis"=>"genshin impack",
            "harga"=>"200000",
            "toko"=>"amelia store",
            "deskripsi"=>"jual akun genshin xiao c6 minus infoker",
        ],
        "data3"=>[
            "foto"=>"img/akunmlbb.jpg",
            "jenis"=>"mobile legend",
            "harga"=>"500000",
            "toko"=>"amelia store",
            "deskripsi"=>"jual akun mlbb skin legend gs epik limit banyak",
        ],
        "data4"=>[
            "foto"=>"img/akunpubg.jpg",
            "jenis"=>"pubg mobile",
            "harga"=>"1500000",
            "toko"=>"ferdy sambo",
            "deskripsi"=>"akun pubg full skin no minus siap reff",
        ],
        "data5"=>[
            "foto"=>"img/akunff.jpg",
            "jenis"=>"free fire",
            "harga"=>"100000",
            "toko"=>"danang tpg",
            "deskripsi"=>"jual akun ff full pet dan inventori rank gm",
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get_browser</title>
</head>
<body>
    <h1>data akun</h1>
    <?php foreach($markets as $market) :?>
        <ul>
            <li><img src="<?= $market["foto"]?>"></li>
            <li><?= $market["jenis"]?></li>
            <li><?= $market["harga"]?></li>
            <li><?= $market["toko"]?></li>
            <li><?= $market["deskripsi"]?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>
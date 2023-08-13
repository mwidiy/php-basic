<?php
    // array = variable yang menyimpan banyak nilai
    // array boleh memeiliki tipe data yang berbeda
    // array adalah pasangan antara keydan value
    // array lama
    $days = array("senin","selasa","rabu","kamis","jumat","sabtu","ahad");
    // print_r($days);
    // array baru
    $items = ["buku","pensil","penghapus","meja"];
    // echo $items[1];

    // cara menambahkan nilai array
    $items [] = "penggaris";
    // print_r($items);

    // cara menampilkan isi array yang benar adalah dengan pengulangan
    // for($i=0; $i<4; $i++){
    //     echo $items[$i];
    // };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: red;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {clear: both;}
    </style>
</head>
<body>
    <!-- count = fungsi untuk menampilkan banyaknya nilai array -->
    <!-- gaya penulisan templating = { diganti : dan } diganti end -->
<?php for($i = 0; $i < count($days); $i++) :?>
    <div class="kotak"><?= $days[$i]; ?></div>
<?php endfor ?>

<div class="clear"></div>

<!-- foreach = pengulangan yang khusus untuk array -->
<?php foreach($items as $barang) :?>
    <div class="kotak"><?= $barang ?></div>
<?php endforeach?>
</body>
</html>
<?php
    // array = variable yang menyimpan banyak nilai
    // array boleh memeiliki tipe data yang berbeda
    // array adalah pasangan antara keydan value
    // array lama
    $days = array("senin","selasa","rabu","kamis","jumat","sabtu","ahad");
    // print_r($days);
    // array baru
    $items = ["buku","pensil","penghapus",];
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
        div {
            width: 50px;
            height: 50px;
            background-color: red;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    <!-- count = fungsi untuk menampilkan banyaknya nilai array -->
<?php for($i = 0; $i < count($days); $i++) {?>
    <div><?= $days[$i];?></div>
<?php } ?>
</body>
</html>
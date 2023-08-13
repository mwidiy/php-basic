<?php
    // materi 1 sintax pHP

    // // mencetak txt 
    // echo "muscovy itu seram";
    // print " red face";
    // // mencetak isi array 
    // print_r (" caruncle");
    // // mencetak isi variable (var_dump)
    // var_dump (" scary face")
    
    // html dalam php
    echo "<h1> widi yanto </h1>";
    
    // variable php
    $nama = "apa kamu tahu tentang entog si muka merah ";
    echo $nama;

    // operator menggabungkan string yaitu dengan (.)
    echo "dragon"."jali";

    $nama .= "jali";

    var_dump($nama);
    
?>

<!-- php dalam html -->
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>hallo entok <?php echo $nama;?></h1>
    </body>
    </html>

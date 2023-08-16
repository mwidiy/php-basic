<?php 
    // post = adalah metode mongirim menggunakan form
    // $_POST = variable untuk menerika request dengan metode post



   // pengkondisian password yang benar
   if (isset($_POST["submit"])) {
        if ($_POST["username"] == "pembeli" && $_POST["password"] == "123"){
            header("location: menu.php");
        }else {
            echo "<script>alert('email of password wrong')</script>";
            
       }
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posix_times</title>
</head>
<body>
    <!-- parameter wajib form ada 2 (action -> data di kirim kemana | kalo kosong dikirim ke halaman itu sendiri) (methode = metode apa yang di gunakan misal GET or POST | kalo kosong akan berisi GET) -->
    <!-- name pada input sangat penting karena akan menjadi key padda nilai yang dimasuan (dalam bentuk array associative) -->
    <!-- <form action="" method="POST">
        <label for="nama">masukan nama</label>
        <input type="text" name="nama">
        <button type="submit" name="submit">tekan</button>
    </form> -->


    <!-- membuat login -->
    <form action="" method="POST">
        <label for="username">masukan username</label>
        <input type="username" id="username" name="username" required>
        <br>
        <label for="password">masukan password</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit" name="submit">kirim</button> 
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome Page</title>

</head>
<body>
    <?php

    $email = $_POST['emailku'];
    $pass = $_POST['password'];

    // JIKA KONIDISI
    if($email == "wawan@gmail.com" && $pass == "123"){
        echo "<script>
                alert('Anda Berhasil Login ');
                window.location.href='../orderlist.php';
                </script>";
        echo  "  <h1>Anda Berhasil Login :)</h1>"; 
    }  else {
        echo "<script>
                alert('Gagal Login Bos');
                window.location.href='validasi.html';
                </script>";
        echo  "  <h1>Gagal Login Bos :)</h1>";  
    }
    ?>   

</body>
</html>
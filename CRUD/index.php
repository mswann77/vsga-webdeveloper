<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulir Pendaftaran Siswa Baru | SMAN 1 KEJAYAN</title>
    <link rel="stylesheet" href="design.css">

  </head>
<body>
     <div class="login-box">
         <h3>SMAN 1 KEJAYAN</h3>
            <button type="button" class="btn"><a href="form-daftar.php">Daftar Baru</a></button> 
            <button type="button" class="btn"><a href="list-siswa.php">Pendaftar</a></button> 
    </div>

  </body>
</html>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    </body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
        <title>Formulir Pendaftaran Siswa Baru | SMAN 1 KEJAYAN</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="design.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
     <div class="title">Web Developer</div>
        <div class="form-group">
            <a href="form-daftar.php" class="btn btn-success">Daftar Baru
            </a>
        </div>
        <div class="form-group">
            <a href="list-siswa.php" class="btn btn-success">Pendaftar
            </a>
        </div>

</body>
</html>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                ?>

             <p style="color:white">Pendaftaran siswa baru berhasil !.</p>;
            <?php } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    </body>
</html>
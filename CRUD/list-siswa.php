<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="list-siswa.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
    <title>Pendaftaran Siswa Baru | SMAN 1 KEJAYAN</title>
</head>

</head>
<body>
        <div class="container">
        <div class="title">Daftar Siswa</div>
        <div class="form-group">
            <a href="form-daftar.php" class="btn btn-success">
                <i class="fa fa-plus-square" ></i> Tambah Siswa
            </a>
        </div>

    <div class="container">
    <div class="box-body table-responsive no-padding">
        <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">Agama</th>
                <th class="text-center">Sekolah Asal</th>
                <th class="text-center">Tindakan</th>
            </tr>
        </thead>
    <tbody>
        

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);
        
        $no = 0; 
        while($siswa = mysqli_fetch_array($query)){
        $no++;

        ?>
        <tr>
            <td align="center"><?=$no?></td>
            <td align="center"><?=$siswa['nama']?></td>
            <td align="center"><?=$siswa['alamat']?></td>
            <td align="center"><?=$siswa['jenis_kelamin']?></td>
            <td align="center"><?=$siswa['agama']?></td>
            <td align="center"><?=$siswa['sekolah_asal']?></td>
            <td align="center">
            <a href='form-edit.php?id=<?php echo $siswa['id']; ?>' class="edit_modal btn btn-warning btn-sm">
            <i class="fa fa-pencil-square-o"> </i>
            </a>
            <a href='hapus.php?id=<?=$siswa['id']?>' class="delete-modal btn btn-danger btn-sm">
            <i class="fa fa-trash-o"></i>
            </a>
            </td>
        </tr>

        <?php 
        }
        ?>

    </body>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>
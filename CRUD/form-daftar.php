<!DOCTYPE html>
<html>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="form-daftar.css">

</style>
</head>
<body>
    <form action="proses-pendaftaran.php" method="POST">
        <div class="container"> 
            <h1>Formulir Pendaftaran Siswa Baru</h1>

        <fieldset>

            <p>
                 <label for="nama"><b>Nama</b></label>
                 <input type="text" name="nama" placeholder="Nama Lengkap" required />
            </p>
            <p>
                 <label for="nama"><b>Alamat</b></label>
                 <textarea name="alamat" required></textarea>
            </p>
            <p>
                 <label for="nama"><b>Jenis Kelamin</b></label>
                 <label><input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki</label>
                 <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
            </p>
            <p>
                 <label for="agama"><b>Agama</b></label>
                    <select name="agama">
                         <option>Islam</option>
                         <option>Kristen</option>
                         <option>Hindu</option>
                         <option>Budha</option>
                         <option>Katholik</option>
                    </select>
            </p>
            <p>
                 <label for="nama"><b>Sekolah Asal</b></label>
                 <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" required />
            </p>
            <p>
                 <input type="submit" value="Daftar" name="daftar" />
            </p>

        </fieldset>

    </form>

 </body>
</html>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="form-daftar.css">
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMAN 1 KEJAYAN</title>
</head>

</style>
</head>
<body>

    <h3>Formulir Pendaftaran Siswa Baru</h3>

    <div class="container"> 
         <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" placeholder="Nama Lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat : </label>
            <textarea name="Alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin : </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal : </label>
            <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulis Pendaftaran Siswa Baru | SMK Coding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--link rel="stylesheet" type="text/css" media="screen" href="main.css"-->
    <!-- script src="main.js"></script-->
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" placeholder="nama lengkap"/>
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat" placeholder="alamat lengkap"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin : </label>
                <label><input type="radio" name="jenis_kelamin" value="Pria"/>Pria</label>
                <label><input type="radio" name="jenis_kelamin" value="Wanita"/>Wanita</label>
            </p>
            <p>
                <label for="agama">Agama : </label>
                    <select name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katolik</option>
                        <option>Protestan</option>
                        <option>Hindu</option>
                        <option>Buddha</option>
                        <option>Atheist</option>
                    </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah asal : </label>
                <input type="text" name="sekolah_asal" placeholder="sekolah asal"/>
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
        </fieldset>
    </form>
</body>
</html>
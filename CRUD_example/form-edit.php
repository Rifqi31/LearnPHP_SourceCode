<?php

    include("config.php");

    // kalau tidak ada id di query string
    if( !isset($_GET['id']) ){
        header('Location: list-siswa.php');
    }

    //ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    // jika data yang di-edit tidak ditemukan
    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulir Edit Siswa | SMK Coding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--link rel="stylesheet" type="text/css" media="screen" href="main.css"-->
    <!--script src="main.js"></script-->
</head>
<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>"/>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>"/>
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat" placeholder="alamat lengkap"><?php echo $siswa['alamat'] ?></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin : </label>
                <?php $jenis_kelamin = $siswa['jenis_kelamin']; ?>
                <label><input type="radio" name="jenis_kelamin" value="Pria" <?php echo ($jenis_kelamin == 'Pria') ? "checkked" : "" ?>></label>
                <label><input type="radio" name="jenis_kelamin" value="Wanita" <?php echo ($jenis_kelamin == 'Wanita') ? "checkked" : "" ?>></label>
            </p>
            <p>
                <label for="agama">Agama : </label>
                <?php $agama = $siswa['agama']; ?>
                <select name="agama">
                    <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                    <option <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
                    <option <?php echo ($agama == 'Protestan') ? "selected": "" ?>>Protestan</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                    <option <?php echo ($agama == 'Buddha') ? "selected": "" ?>>Buddha</option>
                    <option <?php echo ($agama == 'Atheist') ? "selected": "" ?>>Atheist</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal : </label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal']; ?>">
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan"/>
            </p>
        </fieldset>
    </form>
</body>
</html>
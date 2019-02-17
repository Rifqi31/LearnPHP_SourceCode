<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--link rel="stylesheet" type="text/css" media="screen" href="main.css" /-->
    <!--script src="main.js"></script-->
</head>
<body>
    <header>
        <h3> Siswa yang terdaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php" >[+] Tamba Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
        </tr>
    </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);

            // create counter from 0
            $counter = 0;

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";
                $counter++;
                // echo "<td>".$siswa['id']."</td>";
                echo "<td>".$counter."</td>";    
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['jenis_kelamin']."</td>";
                echo "<td>".$siswa['agama']."</td>";
                echo "<td>".$siswa['sekolah_asal']."</td>";

                echo "<td>";
                echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                echo "</td>";

                echo "</tr>";

                }
            ?>
        </tbody>
    </table>
    <p>Total :  <?php echo mysqli_num_rows($query) ?>
</body>
</html>
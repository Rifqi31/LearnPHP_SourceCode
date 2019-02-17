<?php
    include("config.php");

    // cek apakah tombol simpan sudah diklik atau belum ?
    if (isset($_POST['simpan']) ) {

        // ambil data formulir
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah_asal = $_POST['sekolah_asal'];

        // buat query
        $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal' WHERE id=$id";
        $query = mysqli_query($db, $sql);

        // apakah query update berhasil ?
        if ($sql) {
            header('Location: list-siswa.php');
        } else {
            die("Gagal menyimpan data");
        }

    } else {
        die("Akses dilarang...");
    }

?>
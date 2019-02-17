<?php
// identify server
$server = "localhost";
$user = "root";
$password = "pedhfynbn";
$db_name = "pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $db_name);

if( !$db ) {
    die("Gagal terhubung ke database". mysqli_connect_error());
}

?>
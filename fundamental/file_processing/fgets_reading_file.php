<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membaca File</title>
</head>
<body>
    <h3>Membaca Data Buku Telpon dengan fgets</h3>
    <?php
        // param r untuk read
        // fgets() adalah pembacaan dalam mode strings
        $fp = fopen("bukutelpon.txt","r");
        while ($isi = fgets($fp, 25)) {
            echo $isi."<br>";
        }
    ?>
</body>
</html>
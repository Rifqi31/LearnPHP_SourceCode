<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reading File</title>
</head>
<body>
    <h3>Membaca file dengan fscanf</h3>
    <?php
        $fp = fopen("bukutelpon.txt","r");
        while (list($nama, $telepon)=fscanf($fp,"%s\t%s\n")) {
            echo $nama."\t".$telepon."<br>";
        }
    ?>
</body>
</html>
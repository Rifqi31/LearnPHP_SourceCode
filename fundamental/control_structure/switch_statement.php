<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch Statement</title>
</head>
<body>
    <h3>Contoh switch statemen</h3>
    <pre>
        switch($var) {
            case nilai1:
                perintah_nilai1;
                break;
            case nilai2:
                perintah_nilai2:
                break;
            case nilai3:
                perintah_nilai3:
                break;
            default:
                perintah_nilai_default;
                break;
        }
    </pre>
    <?php
        $varday = 6;

        switch ($varday) {
            case 1:
                echo "Minggu";
                break;
            case 2:
                echo "Senin";
                break;
            case 3:
                echo "Selasa";
                break;
            case 4:
                echo "Rabu";
                break;
            case 5:
                echo "Kamis";
                break;
            case 6:
                echo "Jumat";
                break;
            case 7:
                echo "Sabtu";
                break;
            
            default:
                echo "tidak ada hari yang dipilih";
                break;
        }
    ?>
</body>
</html>
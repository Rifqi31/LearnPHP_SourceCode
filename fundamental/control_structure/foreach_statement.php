<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foreach Statement</title>
</head>
<body>
    <h3>Foreach Statement</h3>
    <p>Pengulangan untuk struktur data array</p>
    <pre>
        <!-- cara satu -->
        foreach(ekspresi_array as value){
            perintah 1;
            perintah 2;
            ....
        }

        <!-- cata dua -->
        foreach(ekspresi_array as key => value){
            perintah 1;
            perintah 2;
            ....
        }
    </pre>
    <?php
        // cara 1
        $champ = array("Kyle", "Morgana", "Camile", "Vayne", "Sona");
        // use foreach
        foreach ($champ as $hero) {
            echo "Champion name\t: $hero"."<br>";
        }
        echo "<br>";
        // cara 2
        $kda = array("Evelyn", "Kai'sa", "Ahri", "Akali");
        // use foreach
        foreach ($kda as $key => $new_skin) {
            echo "Champion name\t: $new_skin"."<br>";
        }
    ?>
</body>
</html>
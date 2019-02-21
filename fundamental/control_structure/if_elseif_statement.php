<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If Else statement</title>
</head>
<body>
    <h3>If Else Statement</h3>
    <pre>
        if (ekspresi) {
            perintah 1;
            perintah 2;
            perintah 3;
        } elseif (ekspresi) {
            perintah 1;
            perintah 2;
            perintah 3;
        }
    </pre>
    <?php
    
        $varnum = array(33,-11,21,-322,-133, 0);
        
        for ($counter=0; $counter <= 5; $counter++) { 
            // echo $varnum[$counter]."<br>";

            // try 1
            if ($varnum[$counter] > 0) {

                if ($varnum[$counter] % 2 == 0) {
                    echo $varnum[$counter]. " = bilangan genap dan positif<br>";
                } else {
                    echo $varnum[$counter]. " = bilangan ganjil dan positif<br>";
                }
                
            } elseif ($varnum[$counter] < 0) {

                if ($varnum[$counter] % 2 == 0) {
                    echo $varnum[$counter]. " = bilangan genap dan negatif<br>";
                } else {
                    echo $varnum[$counter]. " = bilangan ganjil dan negatif<br>";
                }
                
            } else {
                echo $varnum[$counter]. " = bilangan nol<br>";
            }

            echo "<br>";
            // try 2
            /*if ($varnum[$counter] % 2 == 0) {
                echo "$varnum[$counter] = bilangan genap <br>";
            } else {
                echo "$varnum[$counter] = bilangan ganjil <br>";
            }*/
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bitwise operator</title>
</head>
<body>
    <?php

        $boolvarTrue = TRUE;
        $boolvarFalse = FALSE;

        // membuat table kebenaran
        // ^
        echo "and table <br>";
        $resultand1 = $boolvarTrue & $boolvarFalse;
        $resultand2 = $boolvarFalse & $boolvarTrue;
        $resultand3 = $boolvarTrue & $boolvarTrue;
        $resultand4 = $boolvarFalse & $boolvarFalse;

        // v
        echo "or table <br>";
        $resultor1 = $boolvarTrue | $boolvarFalse;
        $resultor2 = $boolvarFalse | $boolvarTrue;
        $resultor3 = $boolvarTrue | $boolvarTrue;
        $resultor4 = $boolvarFalse | $boolvarFalse;


        $andtable = array($resultand1, $resultand2, $resultand3, $resultand4);
        $ortable = array($resultor1, $resultand2, $resultand3, $resultand4);

        // print result
        for ($i=0; $i <= 3; $i++) { 
            echo $andtable[$i]. "<br>";
        }

        for ($i=0; $i <= 3 ; $i++) { 
            echo $ortable[$i]. "<br>";
        }

    ?>
</body>
</html>
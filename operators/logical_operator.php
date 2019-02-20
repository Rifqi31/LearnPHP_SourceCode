<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logical Operator</title>
</head>
<body>
    <?php
        $boolvarTrue = TRUE;
        $boolvarFalse = FALSE;

        // and or xor !var && ||

        // membuat table kebenaran
        // ^
        echo "and table <br>";
        $resultand1 = $boolvarTrue and $boolvarFalse;
        $resultand2 = $boolvarFalse and $boolvarTrue;
        $resultand3 = $boolvarTrue and $boolvarTrue;
        $resultand4 = $boolvarFalse and $boolvarFalse;

        // v
        echo "or table <br>";
        $resultor1 = $boolvarTrue or $boolvarFalse;
        $resultor2 = $boolvarFalse or $boolvarTrue;
        $resultor3 = $boolvarTrue or $boolvarTrue;
        $resultor4 = $boolvarFalse or $boolvarFalse;


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
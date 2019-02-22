<?php
    require_once("require_once_1.php");
    function showVar($var){
        if (PHPVERSION == 7) {
            print_r($var);
        } else {
            var_dump($var);
        }
    }
?>
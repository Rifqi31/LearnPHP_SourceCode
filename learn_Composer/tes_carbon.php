<?php

    require 'vendor/autoload.php';

    use Carbon\Carbon;

    $sekarang = Carbon::now();

    echo "Sekarang: $sekarang <br>";
    echo "Umur saya: " . Carbon::createFromDate(1996, 1, 31)->age . "<br>";
    echo "Besok: " . $sekarang->addDay() ."<br>";

?>

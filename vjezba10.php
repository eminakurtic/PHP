<?php

    $promjenljiva = "Ovo je promjenljiva";
    define('KONSTANTA', "Ovo je konstanta");


    echo $promjenljiva;
    echo "<br><br>";
    echo KONSTANTA;

    $promjenljiva = "Ovo je promjenjena promjenljiva";
    define('KONSTANTA', "Ovo je nova kontanta");

    echo $promjenljiva;
    echo "<br><br>";
    echo KONSTANTA;
    

?>
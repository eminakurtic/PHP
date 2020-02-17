<?php

 //Ova funkcija ispisuje nešto
    function nekiNazivFunkcije(){
        echo "Pozdrav iz funkcije";
    }

//Ova funkcija vraća nešto
    function drugaFunkcija(){
        return "Pozdrav iz funkcije";
    }

//Poziv funkcije
    nekiNazivFunkcije();
    echo $rezultat = drugaFunkcija();

    echo "<br>";

    function trecaFunkcija($ime){
        echo "Ja se zovem " . $ime . "<br>";
    }

    trecaFunkcija("Emina");
    trecaFunkcija("Pero Djetlić");
    trecaFunkcija("John Wayne");
    trecaFunkcija("Duško Dugouško");

    function cetvrta_funkcija($ime = "Johnny English"){
        echo "Hi, " . $ime . ". Welcome to MI7.";
    }

    cetvrta_funkcija("His buddy");
<?php
    #Operatori

    #Operator dodjele =
    #Aritmetički operatori +, -, *, /, %
        #Modulo operator
        //echo 12 % 2;

    #Operatori poređenja
        #Operator jednako ==
        echo 10 == "10";
        #Operator identično ===
        echo 10 === 10;
        #Operator nije jednako !=
        echo 10 != 5;
        #Operator nije identično !==
        echo 10 !== "10";
    #Nadovezivanje stringova .
        echo "Ovo " . "je " . "kompletan " . "string";
    #Unarni operatori +=, -=, *=, /=, %=
        $a = 15;
        $a += 7; //$a = $a + 7;
        echo $a;
        $a -= 3; //$a = $a - 3;
        echo $a;
    #Inkrement i dekremetn ++, --
        $c = 10;
        echo $c++;
        echo ++$c;

        echo "<br>";

        $x = 4;
        $y = $x--;
        echo ($y++) + $x;
        echo $y + $x;

    #Logički operatori &&, || i !
        $f = 10;
        $g = 5;
        $h = 0;
        echo "<br>";
        echo $f<3 && $g>4;
        echo $f<3 || $g>4;

?>
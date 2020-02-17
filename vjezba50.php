<?php

    function Kalkulator($broj1, $broj2, $operator){
        if($operator == "+"){
            return $broj1 + $broj2;
        }else if ($operator == "-"){
            return $broj1 - $broj2;
        }else if ($operator == "*"){
            if($broj1 == 0 || $broj2 == 0){
                return 0;
            }else{
                return $broj1 * $broj2;
            }
        }else{
            if($broj1 == 0 || $broj2 == 0){
                return "Error";
            }else{
                return $broj1 / $broj2;
            }
        }
    }

    echo Kalkulator(10, 5, '+');
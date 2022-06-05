<?php

    function sum($num1, $num2){
        return $num1 + $num2;
    }

    function area($num1, $num2){
        return ($num1 + $num2) / 2;
    }

    function getLastItem(array $arr){
        return end($arr);
    }

    function check(array $arr, $num){
        if (in_array($num, $arr)) {
            return true;
        } else {
            return false;
        }
     }

     function animals($numGalinhas, $numVacas, $numPorcos){
        $pernaGalinha = 2;
        $pernaVaca = 4;
        $pernaPorco = 4;
        
        $mathGalinha = $numGalinhas * $pernaGalinha;
        $mathVaca = $numVacas * $pernaVaca;
        $mathPorco = $numPorcos * $pernaPorco;
    
        $res = $mathGalinha + $mathVaca + $mathPorco;
        return $res;
    }

    function smallNumber($num1, $num2){
        $res = min($num1,$num2);
        return $res;
    }

    function findSmallestNumber(array $arr){
        $res = min($arr);
        return $res;
    }

    function missNumber(array $arr){
        $newArray = range(1,max($arr));
        $res = array_diff($newArray,$arr);
        return $res;
    }

    function isChristmas($date){
        $xmasDay = $date->format('25');
        $xmasMonth = $date->format('12');
        $day = $date->format('d');
        $month = $date->format('m');
            
            if ($day == $xmasDay && $month == $xmasMonth) {
                echo "Hoje é natal";
                return true;
            } else {
                echo "Hoje não é natal";
                return false;
            }
    }

    function isValidEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "E-mail válido";
            return true;
        } else {
            echo "E-mail inválido";
            return false;
        }
    }

?>
<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

    $array = [];



    for ($i=0; $i < 15; $i++) { 
        $numero = rand(1, 50);
        if (in_array($numero, $array) != true) {
            $array[] = $numero;
            echo $array[$i]." - ";
        }else{
            $i--;
        }
    }

?>
<?php

function esPar($num){
    if ($num%2==0){
        echo "el $num es par" . "<br>";
    }else{
        echo "el $num NO es par" . "<br>";
    }
}

esPar(4);
esPar(1);
esPar(10);
esPar(8);
esPar(7);

?>
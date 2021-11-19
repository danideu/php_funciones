<?php
/* La criba d'Eratóstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. Basats en l'informació de l'enllaç adjunt, implementa la criba d'Eratóstenes dins d'una funció, de tal forma que poguem invocar la funció per a un número concret. 
*/

comprobar_primo(120);

function comprobar_primo($num){
    for ($i=0; $i<=$num;$i++){
        if (esPrimo($i)){
            echo "El número " . $i . " es primo<br>";
        }
    }
}

function esPrimo($num){
    $cont = 0;

    for ($i=1; $i <= $num; $i++){
        if($num % $i == 0){
            $cont++;

        }
    }

    if ($cont == 2){
        echo "El número " . $i . " es primo<br>"; //es número primo
    }
}


?>
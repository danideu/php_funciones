<?php

/* Imagina't que volem que compti fins a un nombre diferent de 10. Programa la funció perquè el final del compte estigui parametritzat. */


function contar($num){
    for($i=0; $i<=$num; $i++){
        if($i%2 == 0){
            echo $i;
        }
    }
}

contar(10);

?>
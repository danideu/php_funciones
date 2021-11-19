<?php

/* Per jugar a el "amagatall" se'ns ha demanat un programa que compti fins a 10. Però la persona que comptarà és una mica tramposa i ho farà comptant de dos en dos. Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla. */

function contar(){
    $num = 10;
    for($i=0; $i<=$num; $i++){
        if($i%2 == 0){
            echo $i;
        }
    }
}

contar();

?>
<?php
/* Per prevenir oblits a l'utilitzar la nostra meravellosa opció "amagatall" establirem un paràmetre per defecte igual a 10 a la funció que s'encarrega de fer aquest compte. */
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
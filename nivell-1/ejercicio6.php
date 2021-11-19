<?php

/* Charlie em va mossegar el dit!
Charlie et mossegarà el dit exactament el 50% del temps.
Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.
Consell: pot ser que la funció rand () et resulti útil.
*/

$random = rand(0,100);
isBitten($random);

function isBitten($porcentaje){
    echo 'Probabilidad: ' . $porcentaje . '%<br>';
    $resultado = $porcentaje == 50 ? true : false;
    var_dump($resultado);
}


?>
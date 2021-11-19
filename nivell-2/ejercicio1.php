<?php
/* Ens han demanat un llistat de tots els anys on es van produir jocs olímpics desde 1960 inclós fins al 2016. Programa un bucle que calculi i mostri per pantalla els anys olímpics dins de l'interval esmentat. */

$fecha_inicio = 1960;
$fecha_final = 2016;

echo '<h1>Juegos Olimpicos desde '. $fecha_inicio . ' hasta ' . $fecha_final .'</h1>';
//echo 'Los años olimpicos desde ' . $fecha_inicio . ' hasta ' . $fecha_final . 'son: <br>';
for( $i = $fecha_inicio; $i <= $fecha_final; $i++ ){
    if($i % 4 == 0){
        echo 'Año ' . $i . '<br>';
    } 
}

?>  
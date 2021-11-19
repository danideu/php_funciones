<?php
/* Escriu una funció que determini la quantitat total a pagar per una trucada telefònica d'acord a les següents premisses:

Tota crida que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims. */

coste_llamada(1);
coste_llamada(2);
coste_llamada(10);
coste_llamada(50);

function coste_llamada($tiempo){
    echo 'El tiempo de la llamada ha sido de: ' . $tiempo . ' min<br>';
    $coste_min = 10;

    if ($tiempo > 3){
        $resto_tiempo = $tiempo - 3;
        $coste = $coste_min + (5 * $resto_tiempo);
    }else{
        $coste = $coste_min;
    }
    echo 'El coste es de: ' . $coste . ' céntimos<br><hr>';
}


?>
<?php
/* Escriure una funciò per verificar el grau de un estudiant en d'acord a la nota.

Condicions

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà. */

function grado_estudiante($nota){
    echo 'Calificación<br>';
    if ($nota >= '60%'){
        echo 'Estudiante de Primera División';
    }else if ($nota >= '45%'){
        echo 'Estudiante de Segunda División';
    }else if ($nota >= '33%'){
        echo 'Estudiante de Tercera División';
    }else if ($nota < '33%'){
        echo 'El estudiante tiene que volver a probar';
    }
}

$nota = '30%';
echo 'Carlos ha obtenido una Nota del ' . $nota . '<br>';
grado_estudiante($nota);

$nota = '70%';
echo 'Carlos ha obtenido una Nota del ' . $nota . '<br>';
grado_estudiante($nota);

$nota = '33%';
echo 'Carlos ha obtenido una Nota del ' . $nota . '<br>';
grado_estudiante($nota);

$nota = '40%';
echo 'Carlos ha obtenido una Nota del ' . $nota . '<br>';
grado_estudiante($nota);

?>
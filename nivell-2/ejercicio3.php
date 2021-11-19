<?php
/* Imagina que som a una botiga on es ven

Xocolata: 1 euro
Xiclets: 0.50 euros
Carmels: 1.50 euros
Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. Per exemple, que si comprem:

2 xocolates, 1 de xiclets i 1 de carmels, tinguem un programa que permeti anar afegint els subtotals a un total, tal que així:

funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5

Sent per tant el total, 4 */

echo "Dani ha comprado 2 chocolates, 1 chicle y 1 caramelo. ";
comprar("Dani", 2,1,1);

echo "Pedro ha comprado 5 chocolates, 5 chicle y 2 caramelo. ";
comprar("Pedro", 5,5,2);


function comprar($cliente, $cant_choco, $cant_chicle, $cant_caram){
    $precio_choco = 1;
    $precio_chicle = 0.50;
    $precio_caramelo = 1.50;
    $total = ($cant_choco * $precio_choco) + ($cant_chicle * $precio_chicle) + ($cant_caram * $precio_caramelo) ;
    echo "El total de la compra de " . $cliente . " es: <strong>" . $total . "€</strong><br><hr>";
}



?>
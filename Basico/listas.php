<?php

$idades = [21, 23, 19, 25, 30, 41, 18];

$idades[] = 20;

echo count($idades) . PHP_EOL;

unset($idades[4]);

foreach($idades as $idade) {
    echo $idade . PHP_EOL;
}

echo PHP_EOL . "*********" . PHP_EOL;

[$idadeVinicius, , $idadeMaria] = $idades;

echo $idadeVinicius . PHP_EOL . $idadeMaria;

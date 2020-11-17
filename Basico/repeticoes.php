<?php

$contadorWhile = 1;

echo "***** Repeticao While *****" . PHP_EOL;

while($contadorWhile <= 15) {
    if($contadorWhile == 13) {
        break;
    }
    echo "\t#$contadorWhile" . PHP_EOL;
    $contadorWhile++;
}

echo "***** Repeticao For *****" . PHP_EOL;

for($contadorFor = 1; $contadorFor <= 15; $contadorFor++) {
    if($contadorFor == 13) {
        continue;
    }
    echo "\t#$contadorFor" . PHP_EOL;
}
<?php

echo "***** Numeros Impares *****" . PHP_EOL;

for($numero = 0; $numero <= 100; $numero++) {
    if($numero % 2 != 0) {
        echo "#$numero" . PHP_EOL;
    }
}
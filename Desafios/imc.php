<?php

$peso = 77;
$altura = 1.76;

$imc = $peso / $altura ** 2;

echo "Seu IMC é: $imc. Você está ";

if($imc < 16) {
    echo "com subpeso severo.";
} else if($imc >= 16 and $imc < 20) {
    echo "com subpeso.";
} else if($imc >= 20 and $imc < 25) {
    echo "normal.";
} else if($imc >= 25 and $imc < 30) {
    echo "com sobrepeso.";
} else if($imc >= 30 and $imc < 40) {
    echo "obeso.";
} else if($imc > 40) {
    echo "com obesidade mórbida.";
} 
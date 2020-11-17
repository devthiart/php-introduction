<?php

$idade = 22;
$nome = "Vinicius";
$acompanhadoPeloVinicius = false;

echo "Bem vindo a casa do Vinicius!" . PHP_EOL;
echo "Você só pode entrar se tiver a partir de 18 anos e for o Vinicius ou estar com ele." . PHP_EOL;

echo "Você tem $idade anos e seu nome é $nome, ";

if($idade >= 18 and $nome == "Vinicius" or $acompanhadoPeloVinicius) {
    echo "pode entrar $nome!";
} else {
    echo "não pode entrar $nome!";
}

$variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso;
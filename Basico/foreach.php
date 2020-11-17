<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    12345648911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    12325678910 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes[12345637811] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

$contasCorrentes[] = [
    'titular' => 'Ana',
    'saldo' => 2500
];

foreach($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . " - CPF: $cpf" .PHP_EOL;
}
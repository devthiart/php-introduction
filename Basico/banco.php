<?php

function exibeMensagem(string $mensagem) 
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar): array
{
    if($valorASacar > $conta['saldo']) {
        exibeMensagem($conta['titular'] . ' você não tem saldo suficiente.');
    } else {
        $conta['saldo'] -= $valorASacar;
        exibeMensagem($conta['titular'] . ' seu saque foi realizado com sucesso. Seu saldo é de R$' . $conta['saldo']);
    }

    return $conta;
}

function depositar(array $conta, float $valorADepositar): array
{
    if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    
        exibeMensagem($conta['titular'] . ' seu depósito de R$' . $valorADepositar . ' foi realizado com sucesso.');
    
        return $conta;
    } else {
        exibeMensagem("Você não pode realizar um depósito negativo.");
    }
}

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    '123.456.489-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '123.256.789-10' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.256.789-10'] = sacar($contasCorrentes['123.256.789-10'], 500);
$contasCorrentes['123.456.489-11'] = depositar($contasCorrentes['123.456.489-11'], 1500);

foreach($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf $conta[titular] $conta[saldo]");
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}

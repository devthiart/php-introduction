<?php
function exibeMensagem(string $mensagem) 
{
    echo $mensagem . '<br/>';
}

function sacar(array $conta, float $valorASacar): array
{
    if($valorASacar > $conta['saldo']) {
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valorADepositar): array
{
    if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
        return $conta;
    } else {
        //exibeMensagem("Você não pode realizar um depósito negativo.");
    }
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;

    $html = "<li>Titular: $titular Saldo: $saldo";

    echo $html;
}
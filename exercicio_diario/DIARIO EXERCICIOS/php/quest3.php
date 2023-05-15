<?php
/*  Faça a ordenação e impressão da estrutura $arrayDeClientes resultante do exercício
2 pela data de nascimento (pode ser ascendente ou descendente).
*/

$nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia'];

$cliente1 = new stdClass();
$cliente1->nome = $nomes[0];
$cliente2 = new stdClass();
$cliente2->nome = $nomes[1];
$cliente3 = new stdClass();
$cliente3->nome = $nomes[2];

$arrayDeClientes = [$cliente1, $cliente2, $cliente3];

$arrayDeNascimento = [
    'Francisco Souza' => '10-12-1996',
    'Arthur Golveia' => '14-01-2000',
    'Guilherme Rosa' => '26-05-1985',
    'Marcelo Planalto' => '26-05-1985'
];

foreach ($arrayDeClientes as $cliente) {
    $nome = $cliente->nome;
    if (isset($arrayDeNascimento[$nome])) {
        $cliente->dataNascimento = $arrayDeNascimento[$nome];
    } else {
        $cliente->dataNascimento = "Data de nascimento não encontrada";
    }
}

// Função de comparação para ordenar os clientes pela data de nascimento
function compararDataNascimento($clienteA, $clienteB)
{
    $dataA = isset($clienteA->dataNascimento) ? $clienteA->dataNascimento : '';
    $dataB = isset($clienteB->dataNascimento) ? $clienteB->dataNascimento : '';

    return strtotime($dataA) - strtotime($dataB);
}

// Ordenar o array de clientes pela data de nascimento
usort($arrayDeClientes, 'compararDataNascimento');

// Imprimir os clientes ordenados
foreach ($arrayDeClientes as $cliente) {
    echo $cliente->nome . " nascido em " . $cliente->dataNascimento . "<br>";
}


?>

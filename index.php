<?php declare(strict_types=1);

require 'autoload.php';

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

$relacionados = array_combine ($correntistas, $saldos);

if (array_key_exists("João", $relacionados)) {
    echo "O saldo do João é: {$relacionados["João"]}";
} else {
    echo "Não foi encontrado";
};

$maiores = \Alura\ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

echo "<pre>";
var_dump($maiores);
echo  "</pre>";

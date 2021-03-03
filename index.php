<?php declare(strict_types=1);

$correntistas1 = [
  "Giovanni",
  "João",
  "Maria",
  "Luis",
  "Luisa",
  "Rafael"
];

$correntistasNaoPagantes1 = [
  "Luis",
  "Luisa",
  "Rafael",
];

$correntistasPagantes = array_diff ($correntistas1, $correntistasNaoPagantes1);

echo "<pre>";
var_dump ($correntistasPagantes);
echo "</pre>";

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

$relacionados = array_combine($correntistas, $saldos);

$relacionados["Matheus"] = 4500;

echo "<pre>";
var_dump ($relacionados);
echo "</pre>";

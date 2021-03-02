<?php

$saldos = [
     2500,
     3000,
     1000,
     3700,
     9000
];

foreach  ($saldos as $saldo) {
     echo "<p>O saldo é $saldo</p>";
}

echo "<pre>";

sort($saldos);

echo "O menor saldo é $saldos[0]";
echo "</pre>";

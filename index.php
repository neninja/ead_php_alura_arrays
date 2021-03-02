<?php

$notas = [9, 3, 10, 5, 10, 8];

echo "<p>a nota de português: $notas[0]</p>";
echo "<p>a nota de matemática: $notas[1]</p>";
echo "<p>a nota de geografia: $notas[2]</p>";
echo "<p>a nota de história: $notas[3]</p>";
echo "<p>a nota de química: $notas[4]</p>";
echo "<p>a nota de artes: $notas[5]</p>";

$quantidadeNotas = sizeof($notas);

$soma = 0;
for ($i = 0; $i < $quantidadeNotas; $i++) {
    $soma = $soma + $notas[$i];
}

$media = $soma/ $quantidadeNotas;

echo "A média é: $media";

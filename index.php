<?php

$nomes = "Giovanni, João, Maria, Pedro";
$array_nomes = explode (", ", $nomes);
foreach ($array_nomes as $nome) {
     echo  "<p> $nome </p>";
}
var_dump($array_nomes);

$nomesJuntos = implode(",", $array_nomes);
echo $nomesJuntos;

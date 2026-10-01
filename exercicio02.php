<?php

$nome = $_POST["nome"];
$cidade = $_POST["Cidade"];

echo "Olá," . $nome . " de " . $cidade . "!<br>";

if (strtolower($cidade) == "curitiba") {
    echo "Curitibano!";
}
?>
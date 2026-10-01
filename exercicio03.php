<?php

$num1 = (int) $_POST["num1"];
$num2 = (int) $_POST["num2"];

$soma = $num1 + $num2;

print "A some é: " . $soma . "<br><br>";

echo "Verificação de tipos com ver_dump():<br>";

var_dump($num1);
echo "<br>";
var_dump($num2);
echo "<br>";
var_dump($soma);
?>
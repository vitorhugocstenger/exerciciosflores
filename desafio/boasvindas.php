<?php

session_start();

if (isset($_SESSION["usuario"])) {
    echo "Bem-vindo(a), " . $_SESSION["usuario"] . "!";
} else {
    echo "Por favor, faça login primeiro.";
}
?>
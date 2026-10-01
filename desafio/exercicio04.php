<?php

session_start();

$_SESSION["usuario"] = $_POST["usuario"];

header("location: boasvindas.php");
exit()
?>

<?php

$usuario = $_GET["usuario"];
$password = $_GET["password"];

if ($usuario == "admin" && $password == "admin") {
    echo "Bienvenido";
} else {
    echo "Usuario y contraseña incorrectos, intente de nuevo";
}

?>

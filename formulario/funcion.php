<?php
if (empty($_GET["correo"]) || empty($_GET["password1"]) || empty($_GET["password2"])) {
    echo "Ingrese correo y contraseña.";
    echo '<button onclick="history.go(-1);">Regresar</button>';
    echo '<br>';
    echo '<img src="img/no autorizo.jpeg" alt="Error">';
} else {
    echo "¡Todos los campos se han llenado satisfactoriamente!";
    echo '<button onclick="history.go(-1);">Regresar</button>';
    echo '<br>';
    echo '<img src="img/autorizo.jpeg" alt="Error">';
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $campos = array(
        "correo" => "Correo",
        "password1" => "Contraseña",
        "password2" => "Repetir Contraseña",
        "nombre" => "Nombre",
        "apellido" => "Apellido",
        "telefono" => "Teléfono"
    );

    $errores = array();

    // Verificar cada campo individualmente
    foreach ($campos as $campo => $etiqueta) {
        if (empty($_GET[$campo])) {
            $errores[] = "El campo de $etiqueta está vacío.";
        }
    }

    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo $error . "<br>";
        }
        exit;
    }

}
?>

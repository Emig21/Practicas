<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if(isset($_POST["adicional1"]) && isset($_POST["adicional2"]) && isset($_POST["adicional3"])) {
        
        $campo1 = $_POST["adicional1"];
        $campo2 = $_POST["adicional2"];
        $campo3 = $_POST["adicional3"];
        
        echo = "Registro exitoso";
    } else {
        echo "Por favor, complete todos los campos";
    }
} else {

    echo "Acceso denegado";
}
?>

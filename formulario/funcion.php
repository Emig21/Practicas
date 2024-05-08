<?php
// if (empty($_POST["correo"]) || empty($_POST["password1"]) || empty($_POST["password2"])) {
//     echo "Ingrese correo y contraseña.";
//     echo '<button onclick="history.go(-1);">Regresar</button>';
//     echo '<br>';
//     echo '<img src="img/no autorizo.jpeg" alt="Error">';
// } else {
//     echo "¡Todos los campos se han llenado satisfactoriamente!";
//     echo '<button onclick="history.go(-1);">Regresar</button>';
//     echo '<br>';
//     echo '<img src="img/autorizo.jpeg" alt="Error">';
// }

if(isset($_POST['registrar'])){
    if($_POST['password1']==$_POST['password2']){
        $correo = $_POST['correo'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $adicional1 = $_POST['adicional1'];
        $adicional2 = $_POST['adicional2'];
        $adicional3 = $_POST['adicional3'];
        // echo"<h2 class='paso_titulo'> El Correo es ".$correo." </h2>";
        // echo"<h2 class='paso_titulo'> El Nombre es ".$nombre." </h2>";
        // echo"<h2 class='paso_titulo'> El Apellido es ".$apellido." </h2>";
        // echo"<h2 class='paso_titulo'> El Teléfono es ".$telefono." </h2>";
        // echo"<h2 class='paso_titulo'> Adicional 1 ".$adicional1." </h2>";
        // echo"<h2 class='paso_titulo'> Adicional 2 ".$adicional2." </h2>";
        // echo"<h2 class='paso_titulo'> Adicional 3 ".$adicional3." </h2>";
        
    }else {
        echo"<h2 class='paso_titulo'> Contraseña no es igual </h2>";
    }
    echo "<a href='formulario.html'> Regresar</a>";
}else {
    echo '<img src="img/no autorizo.jpeg" alt="Error">';
}

?>

<style>
  table {
    font-family: Arial, sans-serif;
    width: 100%;
    border-collapse: collapse;
  }
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
</style>

<table>
  <tr>
    <td>Correo</td>
    <td>Nombre</td>
    <td>Apellido</td>
    <td>Teléfono</td>
    <td>Adicional1</td>
    <td>Adicional2</td>
    <td>Adicional3</td>
  </tr>
  <tr>
    <td><?php echo $correo; ?></td>
    <td><?php echo $nombre; ?></td>
    <td><?php echo $apellido; ?></td>
    <td><?php echo $telefono; ?></td>
    <td><?php echo $adicional1; ?></td>
    <td><?php echo $adicional2; ?></td>
    <td><?php echo $adicional3; ?></td>
  </tr>
</table>

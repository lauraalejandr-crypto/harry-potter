<?php
include 'conexion.php';

$nombre= $_POST['nombre'];
$edad= $_POST['edad'];
$casa= $_POST['casa'];
$profesor= $_POST['profesor'];
 
$sql = "INSERT INTO Hogwars (Nombre, edad, casa, profesor) VALUES ('$nombre', '$edad', '$casa','$profesor')";

if($conexion ->query ($sql) == TRUE) {
    echo "informacion inscrita existosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}
?>
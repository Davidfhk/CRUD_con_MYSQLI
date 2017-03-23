<?php
require __DIR__ . '/../conecction/conexion.php';
$direccion = $_POST['direccion'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
try{
    $consulta = "INSERT INTO gestion_de_pisos (direccion,precio,descripcion) VALUES ('$direccion','$precio','$descripcion')";
}catch(Exception $e){
    echo $e->getMesagge();
}


$resultado = mysqli_query($conexion,$consulta);
?>

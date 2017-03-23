<?php
require_once __DIR__ . '/../conecction/conexion.php';

    $id = $_GET['id'];
    $direccion = $_POST['direccion'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];


    try{
    $consulta = "UPDATE `gestion_de_pisos` SET `direccion`='$direccion',`precio`='$precio',`descripcion`='$descripcion' WHERE id='$id'";

    $resultado = mysqli_query($conexion,$consulta);
}catch(Exception $e){
    echo $e->getMesagge();
}
?>
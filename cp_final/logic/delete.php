<?php
require __DIR__ . '/../conecction/conexion.php';
$id=$_GET['id'];
$consulta = "DELETE FROM gestion_de_pisos WHERE id='$id'";

$resultado = mysqli_query($conexion,$consulta);

header('location:http://localhost/cp_final/index.php');

?>
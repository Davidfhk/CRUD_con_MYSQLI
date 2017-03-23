<?php
    require __DIR__ . '/../conecction/conexion.php';
    $id = $_GET['id'];

    $consulta = "SELECT * FROM gestion_de_pisos WHERE id='$id'" ;

    $resultado = mysqli_query($conexion,$consulta);
    $piso = mysqli_fetch_assoc($resultado);

    include __DIR__ . '/../views/show.php';
?>
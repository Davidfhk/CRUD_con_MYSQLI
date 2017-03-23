<?php
require __DIR__ . '/conecction/conexion.php';

$consulta = 'SELECT * FROM gestion_de_pisos';

$resultado = mysqli_query($conexion,$consulta);

include __DIR__ . '/views/index.php';
<?php
$config = require_once 'config_conexion.php';
mysqli_report(MYSQLI_REPORT_STRICT);
$conexion = mysqli_connect($config['db']['host'],$config['db']['user'],$config['db']['pass'],$config['db']['dbname']);

mysqli_set_charset($conexion,$config['db']['charset']);

if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();
}

?>


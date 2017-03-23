<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style type="text/css">
        #edit_piso{
            border: 1px solid red;
            float: left;
        }
        #modificar{
            float: right;
        }
    </style>
<body>
    <?php
    if(isset($_POST['modificar'])){
        include __DIR__.'/../logic/edit.php';
    }


    require_once __DIR__ . '/../conecction/conexion.php';
    $id = $_GET['id'];

    $consulta = "SELECT * FROM gestion_de_pisos WHERE id='$id'" ;

    $resultado = mysqli_query($conexion,$consulta);
    $piso = mysqli_fetch_assoc($resultado);
    $direccion = $piso['direccion'];
    $precio = $piso['precio'];
    $descripcion = $piso['descripcion'];
?>
    <form action="" method="POST">
        <fieldset id="edit_piso">
            <legend>Modificar Piso</legend>
            <table>
                <tr>
                    <td><label for="direccion">Dirección</label></td>
                    <td><input type="text" name="direccion" value="<?php echo $direccion ?>"></td>
                </tr>
                <tr>
                    <td><label for="precio">Precio</label></td>
                    <td><input type="text" name="precio" value="<?php echo $precio ?>"></td>
                </tr>
                <tr>
                    <td><label for="descripcion">Descripción</label></td>
                    <td><input type="text" name="descripcion" value="<?php echo $descripcion ?>"></td>
                </tr>
            </table>
            <input type="submit" name="modificar" value="Modificar" id="modificar">
            <a href="http://localhost/cp_final/index.php">Volver a la lista</a>
        </fieldset>
    </form>

</body>
</html>
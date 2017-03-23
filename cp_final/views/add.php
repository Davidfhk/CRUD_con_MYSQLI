<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
        #edit_piso{
            border: 1px solid blue;
            float: left;
        }
        #añadir{
            float: right;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <fieldset id="edit_piso">
            <legend>Agregar Piso</legend>
            <table>
                <tr>
                    <td><label for="direccion">Dirección</label></td>
                    <td><input type="text" name="direccion"></td>
                </tr>
                <tr>
                    <td><label for="precio">Precio</label></td>
                    <td><input type="text" name="precio"></td>
                </tr>
                <tr>
                    <td><label for="descripcion">Descripción</label></td>
                    <td><input type="text" name="descripcion"></td>
                </tr>
            </table>
            <input type="submit" name="enviar" value="Añadir" id="añadir">
        </fieldset>
    </form>
    <?php
    if(isset($_POST['enviar'])){
        include __DIR__.'/../logic/add.php';
        header('location:http://localhost/cp_final/index.php');
    }

    ?>
</body>
</html>
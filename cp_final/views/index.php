<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pisos</title>
    <style type="text/css">
        tr,td,th{
            border:1px solid blue;
        }
    </style>
</head>
<body>
<table>
    <th>Dirección</th>
    <th>Precio</th>
    <th>Detalle</th>
    <th>Modificar</th>
    <th>Borrar</th>
    <?php while ($pisos = mysqli_fetch_assoc($resultado)):?>
    <tr>
        <td><?php echo $pisos['direccion'] ?></td>
        <td><?php echo $pisos['precio'] ?></td>
        <td><a href="http://localhost/cp_final/logic/show.php?id=<?php echo $pisos['id'] ?>" >+info</a></td>
        <td><a href="http://localhost/cp_final/views/edit.php?id=<?php echo $pisos['id'] ?>">edit</a></td>
        <td><a href="http://localhost/cp_final/logic/delete.php?id=<?php echo $pisos['id'] ?>">X</a></td>
    </tr>
    <?php endwhile ?>
</table>
    <a href="http://localhost/cp_final/views/add.php">Agregar piso</a>
</body>
</html>
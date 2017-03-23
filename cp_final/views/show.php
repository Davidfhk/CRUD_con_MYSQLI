<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>show</title>
    <style type="text/css">
        th,tr,td{
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <h1>Detalles</h1>
    <table>
        <th>Dirección</th>
        <th>Precio</th>
        <th>Descripción</th>
        <tr>
            <td><?php echo $piso['direccion']?></td>
            <td><?php echo $piso['precio']?></td>
            <td><?php echo $piso['descripcion']?></td>
        </tr>
    </table>
    <a href="http://localhost/cp_final/index.php">Volver a la lista</a>
</body>
</html>
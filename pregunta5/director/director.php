<?php

include('conecta.php');

$query = "SELECT p.departamento, 
                 CASE WHEN COUNT(i.notafinal)>0 THEN ROUND(AVG(i.notafinal), 2) ELSE 0 END AS media_notas
          FROM persona p
          LEFT JOIN inscripcion i ON p.carneT = i.carnet
          GROUP BY p.departamento;";

//Ejecutar consulta
$result = mysqli_query($conexion, $query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <title>Director</title>
</head>

<body>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="./cerrar.php" class="btn btn-primary">Cerrar Sesion</a>
        
    </div>
    <div>
        <h1 style="text-align: center;">Rol de Director</h1>

        <div class="text-center">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "Departamento: " . $row["departamento"] . " - Media de notas: " . $row["media_notas"] . "<br>";
                }
            } else {
                echo "No se encontraron resultados.";
            }
            ?>
        </div>
    </div>
</body>

</html>
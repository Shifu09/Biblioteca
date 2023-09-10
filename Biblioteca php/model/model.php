<?php
include("conex.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">

</head>

<body id="fuck">
    <h2 class="text_model">Lista de libros disponibles</h2>
    <table class="container">
        <tr>
            <td>Id</td>
            <td>Titulo</td>
            <td>Autor</td>
            <td>Año de publicacion</td>
            <td>Disponibilidad</td>
        </tr>
        <?php

        $play = mysqli_query($conex, "SELECT * FROM libros");

        while ($ver = mysqli_fetch_array($play)) {
            $disponible = ($ver['disponible'] == 1) ? 'Disponible' : 'No Disponible';
        ?>
            <tr>
                <td><?php echo $ver['id'] ?></td>
                <td><?php echo $ver['titulo'] ?></td>
                <td><?php echo $ver['autor'] ?></td>
                <td><?php echo $ver['age_p'] ?></td>
                <td><?php echo $disponible ?></td>
            </tr>
        <?php
        };
        ?>
    </table>
</body>

</html>
<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '<script> 
    alert("Tienes que iniciar sesion.");
    window.location.href = "log/inicio.php";
    </script>';

    session_destroy();
    exit;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Gestión de Biblioteca</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a class="sap" href="index.php?pepe=todos">Todos los ejemplares</a></li>
            <li><a class="sap" href="index.php?pepe=agregar">Agregar ejemplares</a></li>
            <li><a class="sap" href="index.php?pepe=prestamo">Realizar prestamo</a></li>
            <li><a class="sap" href="index.php?pepe=devolucion">Realizar devolucion</a></li>
            <li><a class="sap" href="index.php?pepe=listado">Consultar listado de prestamo</a></li>
            <li><a class="sap" href="index.php?pepe=cerrarSesion">Cerrar sesion</a></li>
        </ul>
    </nav>
    <div>
        <?php
        require_once 'controller/controller.php';
        $controller = new BibliotecaController();

        if (isset($_GET['pepe'])) {
            $plomo = $_GET['pepe'];
            $controller->menu($plomo);
        }
        ?>
    </div>
</body>

</html>
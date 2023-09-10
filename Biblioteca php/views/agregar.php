<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '<script> 
    alert("Tienes que iniciar sesion.");
    window.location.href = "../log/inicio.php";
    </script>';

    session_destroy();
    exit;
}

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <img src="../img/libro.jpg" class="p">
    <div class="login-containerA">
        <form action="../db/agregar_db.php" method="POST">
            <h2>Registro de Libros</h2>
            <br>
            <br>
            <div class="input-container">
                <input type="text" required name="titulo">
                <label>Nombre del libro</label>
            </div>
            <div class="input-container">
                <input type="text" required name="autor">
                <label>Autor</label>
            </div>
            <div class="input-container">
                <input type="text" required name="age_p">
                <label>Año de publicacion</label>
            </div>
            <button>Agregar</button>
        </form>
    </div>
    </div>
</body>

</html>
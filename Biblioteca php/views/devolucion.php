<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <img src="../img/libro.jpg" class="p">
    <div class="login-containerD">
        <form action="../db/devolucion_db.php" method="POST">
            <h2>Devolucion de libros</h2>
            <br>
            <br>
            <div class="input-container">
                <input type="text" required name="id_libros">
                <label>ID libro</label>
            </div>
            <div class="input-container">
                <input type="text" required maxlength="8" name="id_username">
                <label>Numero de cedula</label>
            </div>
            <div class="input-container">
                <input type="date" name="fecha_devolucion">
                <label>Fecha de devolucion</label>
            </div>
            <button>Confirmar</button>
        </form>
    </div>
    </div>
</body>

</html>
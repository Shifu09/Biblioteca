<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <img src="../img/sun.jpg">
    <div class="login-container">
        <form action="../db/inicio_db.php" method="POST">
            <h2>Login</h2>
            <br>
            <br>
            <div class="input-container">
                <input type="text" id="username" required name="username">
                <label>Nombre de usuario</label>
            </div>
            <div class="input-container">
                <input type="password" id="password" required name="password">
                <label>Contraseña</label>
                <h5>¿No tienes cuenta? <a href="registro.php">Crear una</a></h5>
            </div>
            <button>Iniciar sesión</button>
        </form>
    </div>
    </div>
</body>

</html>
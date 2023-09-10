<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <img src="../img/sun.jpg">
    <div class="login-container">
        <form action="../db/registro_db.php" method="POST">
            <h2>Registro</h2>
            <br>
            <br>
            <div class="input-container">
                <input type="text" id="username" placeholder="Nombre de usuario" required name="username">
                <label>Nombre de usuario</label>
            </div>
            <div class="input-container">
                <input type="text" id="username" placeholder="Numero de cedula" required name="id" size="10" minlength="7" maxlength="8">
                <label>Numero de cedula</label>
            </div>
            <div class="input-container">
                <input type="email" id="password" placeholder="Correo eletronico" required name="email">
                <label>Correo eletronico</label>
            </div>
            <div class="input-container">
                <input type="text" id="password" placeholder="Numero telefonico" required size="12" name="telefono" maxlength="11">
                <label>Numero telefonico</label>
            </div>
            <div class="input-container">
                <input type="password" id="password" placeholder="Contraseña" require name="password">
                <label>Contraseña</label>
            </div>
            <button>Registrame</button>
        </form>
    </div>
</body>

</html>
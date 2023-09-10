<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <div class="login-container">
        <form action="../db/activar_db.php" method="POST">
            <h2>Administrador</h2>
            <br>
            <br>
            <div class="input-container">
                <input type="text" required name="id_user">
                <label>Numero de cedula</label>
            </div>
            <button>Reactivar</button>
        </form>
    </div>
</body>

</html>
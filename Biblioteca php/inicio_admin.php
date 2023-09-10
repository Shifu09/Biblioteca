<script>
    alert("Necesitas iniciar de sesión como admin");
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.querySelector("form");

        form.addEventListener("submit", function(event) {
            event.preventDefault();

            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            if (username === "admin" && password === "2505") {
                alert("Inicio de sesión exitoso");
                window.location.href = 'views/agregar.php';
            } else {
                alert("Contraseña incorrecta. Por favor, intente de nuevo.");
            }
        });
    });
</script>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <img src="img/sun.jpg">
    <div class="login-container">
        <form>
            <h2>Administrador</h2>
            <br>
            <br>
            <div class="input-container">
                <input type="text" id="username" required>
                <label>Nombre de usuario</label>
            </div>
            <div class="input-container">
                <input type="password" id="password" required>
                <label>Contraseña</label>
            </div>
            <button type="submit">Iniciar como admin</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>
<?php
include("../conex.php");

$id_user = $_POST["id"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$telefono = $_POST['telefono'];


$sql = "INSERT INTO usuarios(id, username, email, password, telefono)
        VALUES ('$id_user', '$username', '$email', '$password','$telefono')";

// VERIFICAR QUE NO EXISTAN DATOS REPETIDOS EN LA BD
$verificar_user = mysqli_query($conex, "SELECT * FROM usuarios WHERE username ='$username'");

if (mysqli_num_rows($verificar_user) > 0) {
    echo '<script> 
    alert("Nombre de Usuario ya existente");
    window.location.href = "../registro.php";
    </script>';
    exit();
}

$verificar_email = mysqli_query($conex, "SELECT * FROM usuarios WHERE email ='$email'");

if (mysqli_num_rows($verificar_email) > 0) {
    echo '<script> 
    alert("Correo ya existente");
    window.location.href = "../registro.php";
    </script>';
    exit();
}

$play = mysqli_query($conex, $sql);

if ($play) {
    echo '<script> 
        alert("Registro exitoso");
        window.location.href = "../log/inicio.php";
        </script>';
}

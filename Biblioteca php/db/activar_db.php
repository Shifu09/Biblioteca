<?php

include("../conex.php");
$id_username = $_POST['id_user'];

$verificar_disponibilidad_user = mysqli_query($conex, "SELECT * FROM usuarios WHERE id = '$id_username'");

if (mysqli_num_rows($verificar_disponibilidad_user) <> 1) {
    echo '<script> 
    alert("Cedula del usuario incorrecto.");
    window.location.href = "../views/activar.php";
    </script>';
    exit();
} else {
    mysqli_query($conex, "UPDATE usuarios SET suspender = 0 WHERE id = '$id_username'");
    echo '<script> 
    alert("Usuario reactivado.");
    window.location.href = "../views/activar.php";
    </script>';
}

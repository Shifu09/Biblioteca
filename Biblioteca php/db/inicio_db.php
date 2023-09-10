<?php
session_start();
include("../conex.php");


$username = $_POST['username'];
$password = $_POST['password'];

$sql =  mysqli_query($conex, "SELECT suspender FROM usuarios WHERE username = '$username' AND password = '$password'");
$suspendido = mysqli_fetch_assoc($sql);

if ($suspendido['suspender'] == 1) {
    echo '<script> 
    alert("! ESTAS SUSPENDIDO DE MANERA TEMPORAL ¡\nContactar directamente con los administradores de la biblioteca");
    window.location.href = "../log/inicio.php";
    </script>';
    exit();
}

$verificar_login = mysqli_query($conex, "SELECT * FROM usuarios WHERE username='$username' and password='$password'");

if (mysqli_num_rows($verificar_login) > 0) {
    $_SESSION['usuario'] = $username;
    header("Location: ../index.php");
    exit();
} else {
    echo '<script> 
    alert("Datos inválidos. Intente de nuevo");
    window.location.href = "../log/inicio.php";
    </script>';
}

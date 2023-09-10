<?php
include("../conex.php");

$id_username = $_POST['id_username'];
$id_libro = $_POST['id_libros'];
$fecha_devolucion = date('Y-m-d');


$verificar_user = mysqli_query($conex, "SELECT * FROM usuarios WHERE id ='$id_username'");

if (mysqli_num_rows($verificar_user) <> 1) {
    echo '<script> 
    alert("Cedula del usuario incorrecto.");
    window.location.href = "../index.php";
    </script>';
    exit();
}

$verificar_id = mysqli_query($conex, "SELECT * FROM libros WHERE id = '$id_libro'");

if (mysqli_num_rows($verificar_id) <> 1) {
    echo '<script> 
    alert("Id de libro incorrecto.");
    window.location.href = "../index.php";
    </script>';
    exit();
}

$verificar_datos = mysqli_query($conex, "SELECT * FROM prestamo WHERE id_user ='$id_username' AND id_libro = '$id_libro' AND fecha_devolucion= 0000-00-00");

if (mysqli_num_rows($verificar_datos) !== 1) {
    echo '<script> 
    alert("Datos incorrectos. No se encontró un préstamo válido.");
    window.location.href = "../index.php";
    </script>';
    exit();
}

//SUSPENDER USUARIO
$sql = "SELECT fecha_prestamo FROM prestamo WHERE id_libro = '$id_libro' AND id_user = '$id_username'";
$result = mysqli_query($conex, $sql);
$row = mysqli_fetch_assoc($result);
$fecha_prestamo = $row['fecha_prestamo'];
$fecha_limite = date('Y-m-d', strtotime($fecha_prestamo . '+30 days'));

if (date('Y-m-d') > $fecha_limite) {
    $sql = mysqli_query($conex, "UPDATE usuarios SET suspender = 1 WHERE id = '$id_username'");
    mysqli_query($conex, "UPDATE prestamo SET fecha_devolucion = '$fecha_devolucion' WHERE id_libro = '$id_libro'");

    mysqli_query($conex, "UPDATE libros SET disponible = 1 WHERE id = '$id_libro'");
    mysqli_query($conex, "UPDATE usuarios SET disponible = 1 WHERE id = '$id_username'");

    echo '<script> 
    alert("Devolución registrada");
    window.location.href = " ../log/inicio.php";
    alert("ESTAS SUSPENDIDO");
    </script>';
} else {
    mysqli_query($conex, "UPDATE prestamo SET fecha_devolucion = '$fecha_devolucion' WHERE id_libro = '$id_libro'");

    mysqli_query($conex, "UPDATE libros SET disponible = 1 WHERE id = '$id_libro'");
    mysqli_query($conex, "UPDATE usuarios SET disponible = 1 WHERE id = '$id_username'");

    echo '<script> 
    alert("Devolución registrada correctamente");
    window.location.href = "../index.php";
    </script>';
}

<?php
include("../conex.php");

$id_libro = $_POST['id_libros'];
$id_usuario = $_POST['cedula'];
$fecha_prestamo = date('Y-m-d');

$verificar_disponibilidad_user = mysqli_query($conex, "SELECT * FROM usuarios WHERE id = '$id_usuario'");

if (mysqli_num_rows($verificar_disponibilidad_user) <> 1) {
    echo '<script> 
    alert("Cedula del usuario incorrecto.");
    window.location.href = "../index.php";
    </script>';
    exit();
}

$verificar_user = mysqli_query($conex, "SELECT * FROM usuarios WHERE id ='$id_usuario' AND disponible = 1");

if (mysqli_num_rows($verificar_user) < 1) {
    echo '<script> 
    alert("Ya tienes un libro adquirido. Devuelve uno para adquirir otro");
    window.location.href= "../views/prestamo.php";
    </script>';
    exit();
}
$verificar_disponibilidad = mysqli_query($conex, "SELECT * FROM libros WHERE id = '$id_libro' AND disponible = 1");
if (mysqli_num_rows($verificar_disponibilidad) > 0) {

    $prestamo = mysqli_query($conex, "INSERT INTO prestamo (id_libro, id_user, fecha_prestamo)
            VALUES ('$id_libro', '$id_usuario', '$fecha_prestamo')");

    if ($prestamo) {
        mysqli_query($conex, "UPDATE usuarios SET disponible = 0 WHERE id ='$id_usuario'");
        mysqli_query($conex, "UPDATE libros SET disponible = 0 WHERE id = '$id_libro'");

        echo '<script> 
        alert("Préstamo registrado correctamente");
        alert("TIENES 1 MES PARA DEVOLVER EL LIBRO");
        window.location.href = "../index.php";
        </script>';
    }
} else {
    echo '<script> 
    alert("El libro no está disponible para préstamo");
    window.location.href = "../index.php";
    </script>';
}

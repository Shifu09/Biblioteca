<?php
include("../conex.php");

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$age_p = $_POST['age_p'];

$sql = "INSERT INTO libros(titulo, autor, age_p)
        VALUES ('$titulo', '$autor', '$age_p')";

$play = mysqli_query($conex, $sql);
if ($play) {
    echo '<script> 
    alert("Registro exitoso");
    window.location.href = "../index.php";
    </script>';
}

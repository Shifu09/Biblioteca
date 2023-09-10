<?php
include("../conex.php");


$sql = "SELECT * FROM prestamo"; // Reemplaza "nombre_de_la_tabla" por el nombre real de tu tabla
$resultado = mysqli_query($conex, $sql);

// Crear el contenido del archivo .txt o .doc
$contenido = "ID\tId usuario\tId libro\tFecha del prestamo\tFecha de la devolucion\r\n"; // 

while ($fila = mysqli_fetch_assoc($resultado)) {
    $contenido .= "{$fila['id']}\t {$fila['id_user']}\t        {$fila['id_libro']}\t        {$fila['fecha_prestamo']}\t          {$fila['fecha_devolucion']}\r\n";
}

// Generar el nombre del archivo con la fecha actual
$fecha_actual = date('Y-m-d');
$nombre_archivo = "listado_de_prestamo_registros_{$fecha_actual}.txt";

// Configurar las cabeceras para forzar la descarga del archivo
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"$nombre_archivo\"");


echo $contenido;

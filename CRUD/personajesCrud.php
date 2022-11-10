<?php

$conexion = mysqli_connect ("localhost", "root", "", "php2000peliculassigloxx");

if (isset(($_POST['save']))) {
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $rol = $_POST['Rol_principal'];
    $imagen = $_FILES['Imagen'];
    $texto = $_POST['Texto'];

    $query = "INSERT INTO personajes (Nombre, Apellido, Rol_principal, Imagen, Texto) VALUES ('$nombre', '$apellido', '$rol', '$imagen', '$texto')";
    $resultado = mysqli_query($conexion, $query);

    if (isset($conexion)) {
        echo "Conectado a la base de datos";
    }

    if (!$resultado) {
        echo " pero no esta guardando los datos";
    } else {
        header("Location: personajes.php");
    }
}
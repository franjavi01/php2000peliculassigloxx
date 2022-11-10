<?php

$conexion = mysqli_connect ("localhost", "root", "", "php2000peliculassigloxx");

if (isset(($_GET['id']))) {
$id = $_GET['id'];
$query = "DELETE FROM personajes WHERE id = $id";
$resultado = mysqli_query($conexion, $query);

if (isset($conexion)) {
    echo "Conectado a la base de datos";
}

if (!$resultado) {
    echo " pero no esta eliminando el dato";
} else {
    header("Location: personajes.php");
}

}
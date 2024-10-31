<?php
include('../conexion.php');
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM noticias WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Noticia eliminada con éxito.</div>";
    } else {
        echo "<div class='alert alert-danger'>Error al eliminar la noticia: " . $conn->error . "</div>";
    }
}

header("Location: ver_noticias.php");
exit;
?>

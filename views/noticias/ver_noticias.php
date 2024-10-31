<?php
include('../conexion.php');

$sql = "SELECT n.id, n.titulo, n.fecha_publicacion, u.nombre as autor, c.nombre as categoria 
        FROM noticias n 
        JOIN usuarios u ON n.usuario_id = u.id 
        JOIN categorias c ON n.categoria_id = c.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Título</th><th>Autor</th><th>Categoría</th><th>Fecha</th><th>Acciones</th></tr>";
    while ($noticia = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$noticia['titulo']}</td>
                <td>{$noticia['autor']}</td>
                <td>{$noticia['categoria']}</td>
                <td>{$noticia['fecha_publicacion']}</td>
                <td>
                    <a href='editar_noticia.php?id={$noticia['id']}'>Editar</a> |
                    <a href='eliminar_noticia.php?id={$noticia['id']}'>Eliminar</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No hay noticias para mostrar.";
}
?>

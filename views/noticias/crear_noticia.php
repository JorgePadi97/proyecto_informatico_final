<?php
include('../conexion.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $categoria_id = $_POST['categoria_id'];
    $usuario_id = $_SESSION['id']; // Asumimos que el usuario está en la sesión

    $sql = "INSERT INTO noticias (titulo, contenido, categoria_id, usuario_id) VALUES ('$titulo', '$contenido', $categoria_id, $usuario_id)";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Noticia creada con éxito.</div>";
    } else {
        echo "<div class='alert alert-danger'>Error al crear la noticia: " . $conn->error . "</div>";
    }
}
?>

<form method="POST">
    <label>Título:</label>
    <input type="text" name="titulo" required>
    
    <label>Contenido:</label>
    <textarea name="contenido" required></textarea>
    
    <label>Categoría:</label>
    <select name="categoria_id">
        <?php
        $result = $conn->query("SELECT * FROM categorias");
        while ($categoria = $result->fetch_assoc()) {
            echo "<option value='{$categoria['id']}'>{$categoria['nombre']}</option>";
        }
        ?>
    </select>
    
    <button type="submit">Crear Noticia</button>
</form>

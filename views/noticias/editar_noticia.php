<?php
include('../conexion.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $categoria_id = $_POST['categoria_id'];

    $sql = "UPDATE noticias SET titulo='$titulo', contenido='$contenido', categoria_id=$categoria_id WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Noticia actualizada con éxito.</div>";
    } else {
        echo "<div class='alert alert-danger'>Error al actualizar la noticia: " . $conn->error . "</div>";
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM noticias WHERE id = $id";
    $result = $conn->query($sql);
    $noticia = $result->fetch_assoc();
}
?>

<form method="POST">
    <input type="hidden" name="id" value="<?php echo $noticia['id']; ?>">
    
    <label>Título:</label>
    <input type="text" name="titulo" value="<?php echo $noticia['titulo']; ?>" required>
    
    <label>Contenido:</label>
    <textarea name="contenido" required><?php echo $noticia['contenido']; ?></textarea>
    
    <label>Categoría:</label>
    <select name="categoria_id">
        <?php
        $result = $conn->query("SELECT * FROM categorias");
        while ($categoria = $result->fetch_assoc()) {
            $selected = $categoria['id'] == $noticia['categoria_id'] ? "selected" : "";
            echo "<option value='{$categoria['id']}' $selected>{$categoria['nombre']}</option>";
        }
        ?>
    </select>
    
    <button type="submit">Actualizar Noticia</button>
</form>

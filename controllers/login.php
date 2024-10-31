<?php
include('../conexion.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE nombre = '$username'";
    $result = $conn->query($sql);

    // Verifico que se obtenga un usuario
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verificación de la contraseña
        if (password_verify($password, $user['contraseña'])) {
            // Asignación de datos de usuario a la sesión
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $user['id'];
            $_SESSION['rol_id'] = $user['rol_id'];  // Guardamos el rol_id directamente

            // Redirigimos a index.php sin condicional, el rol se verificará en index.php
            header("Location: ../index.php");
            exit;
        } else {
            echo "<div class='alert alert-danger mt-3'>Contraseña incorrecta</div>";
        }
    } else {
        echo "<div class='alert alert-danger mt-3'>Usuario no encontrado</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto Final</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  
  <body class="bg-success text-white p-3" style="width: 90%; height: 100vh; margin: 0 auto;">
  
    <nav class="navbar navbar-expand-lg bg-dark rounded" >
      <div class="container-fluid mx-3 ">
        <a class="navbar-brand text-white" href="../index.php">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <form class="d-flex" role="search" style="align-items: center;">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">🔍</button>
          </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <a href="login.php" class="btn btn-success m-2">Login</a>
                <a href="registrar_usuario.php" class="btn btn-success m-2">Register</a>
            </div>
        </div>
      </div>
    </nav>
    
    <main>
        <div class="container d-flex justify-content-center">
            <div class="card mt-5 " style="width: 25rem;">
                <div class="mx-auto" style="width: 90%">
                  <h2 class="my-4">Iniciar Sesión</h2>
                  <form method="POST" action="../controllers/login.php">
                      <div class="mb-3">
                          <label for="username" class="form-label">Usuario</label>
                          <input type="text" class="form-control" id="username" name="username" required>
                      </div>
                      <div class="mb-3">
                          <label for="password" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" id="password" name="password" required>
                      </div>
                      <div class="d-flex justify-content-center p-2">
                          <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-success text-center text-lg-start" style="margin-top: 50px;">
        <div class="text-center p-3 bg-dark text-white rounded">
            © 2024 Nombre de Pagina
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

</html>
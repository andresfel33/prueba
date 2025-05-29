<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="js/ingresar.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
      <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <title>Login</title>
</head>
<body>
<div class="container mt-5" style="max-width: 400px;">
    <form id="FormularioLogin"  class="border p-4 rounded shadow bg-light">
        <h4 class="mb-4 text-center text-primary">Iniciar Sesión</h4>

        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ingresa tu usuario" required>
        </div>

        <div class="mb-3">
            <label for="passwd" class="form-label">Contraseña</label>
            <input type="password" name="passwd" id="passwd" class="form-control" placeholder="Ingresa tu contraseña" required>
        </div>

        <div class="text-center">
            <input type="submit" value="Ingresar" id="Ingresar" class="btn btn-success px-4 mx-auto">
        </div>
    </form>
</div>
</body>
</html>
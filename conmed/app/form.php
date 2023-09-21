<!DOCTYPE html>
<html lang="es-CO">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="estilo_form.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<style>
  a{
    color: white;
    text-decoration: none;
  }
</style>
<body>
	<main class="form-reg w-100 m-auto">
	<main class="form-reg w-100 m-auto">
		
    <div class="box">
      <form action="registrar.php" method="POST">
        <h1 class="text-center">Registrate</h1>
        <hr class="hr">
        <div>
          <label for="nombre" class="form-label">Nombre</label><br>
          <input type="text" class="form-control" id="nombre" name="nombre" autofocus required autocomplete="on">
        </div>
        <div>
          <label for="apellido" class="form-label">Apellidos</label>
          <input type="text" class="form-control" id="apellido" name="apellido" required autocomplete="on">
        </div>
        <div>
          <label for="documento" class="form-label">N° De Documento</label>
          <input type="number" class="form-control" id="documento" name="documento" required>
        </div>
        <div>
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div>
          <label for="telefono" class="form-label">Telefono</label>
          <input type="number" class="form-control" id="telefono" name="telefono">
        </div>
        <div>
          <label for="f_nacimiento" class="form-label">Fecha De Nacimiento</label>
          <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento">
        </div>
        <div>
          <label for="usuario" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="usuario" name="usuario">
        </div>
        <div>
          <label for="contrasena" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="contrasena" name="contrasena">
        </div>
        <hr>
        <div>
          <input type="submit" name="guardar" value="guardar" class="btn btn-lg btn-primary btn-1 boton"><br>
          <button class="btn btn-lg btn-primary"><a href="../../">Regresar</a></button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>
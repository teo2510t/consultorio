<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/jsycss/css/estilo_ingresar.css">
</head>
<body>
    <main>
        <div class="box">
            <form action="" method="post">
                <h1 class="text-center">Ingresar</h1>
                <hr>
                <?php
                ?>
                <div>
                    <label for="" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="t1"
                    autofocus require autocomplete="on">
                </div>
                <div>
                    <label for="" class="form-label">Documento</label>
                    <input type="number" class="form-control" id="contrasena" name="contrasena" require>
                </div>
                <hr>
                <div class="d-flex justify-content-center p-3 text-center">
                    <input name="" type="submit" value="Iniciar sesion" class="btn btn-lg btn-primary btn-block a-f"><a href="../app/vista">home</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
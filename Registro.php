<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Registro</title>
   <link rel="stylesheet" type="text/css" href="css/mi-estilo.css">
    <link rel="stylesheet" type="text/css" href="css/miestilo.css">
  <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
   
</head>

<body>
  <div class="container">
    <form action="add.php" method="post">
      <div class="section">
        <h1>Registro de Usuario</h1>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Usuario:</label>
        <br>
        <input type="text" class="form-control" name="username" placeholder="Elige tu nombre de usuario" required />
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre:</label>
        <br>
        <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre completo" required />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña:</label>
        <br>
        <input type="password" class="form-control" name="password" placeholder="Ingresa tu contraseña" required />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Confirmar:</label>
        <br>
        <input type="password" class="form-control" name="cfpassword" placeholder="Confirma tu contraseña" required />
      </div>
      <div class="form-button">
        <button type="submit" class="btn btn-success">Registrar ahora</button>
      </div>
    </form>
    <br>
    <div class="form-button">
      <a name="" id="" class="returnlogin" href="admin.php" role="button">¿Ya tienes una cuenta? Volver al login</a>
    </div>
  </div>
  </form>
  </div>
  <footer>
    <p>Diseñado y Maquetado por: Manuel Chavez Avila &copy; 2022</p>
    <p>Contactar a: <a href="mailto:alexiscapri019@gmail.com">Administrador del Sitio</a></p>
   </footer>
</body>

</html>
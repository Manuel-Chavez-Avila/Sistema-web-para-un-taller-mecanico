<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
     <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/miestilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <style>
         
    </style>
</head>
<body>
    <div class = "content">
        <h1>Ingresar</h1>
        <form action="login.php" method="POST">
            <label for="username">Usuario: </label>
            <br>
            <input type="text" name="username" placeholder="Ingresa tu usuario :" required>
            <br>
            <label for="pass">Contraseña: </label>
            <br>
            <input type="password" name="password" placeholder="Ingresa tu contraseña :" required>
            <br>
            <input type="submit" value="Ingresar">
        </form>
        <a href="Registro.php" class="regis">Registro</a>
    </div>
     <footer>
        <p>Diseñado y Maquetado por: Manuel Chavez Avila &copy; 2022</p>
        <p>Contactar a: <a href="mailto:alexiscapri019@gmail.com">Administrador del Sitio</a></p>
   </footer>
</body>
</html>
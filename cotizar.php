<!DOCTYPE html>
		<html lang="es">
		<head> 
		   <meta charset="UTF-8">
		   <title>cotizar</title>
		   <!--CSS LOCAL-->
		   <link rel="stylesheet" type="text/css" href="css/miestilo.css">
       <link rel="shortcut icon" href="imagen/herramienta.png">
		<body>
			<header>
				<h1>cotizaciones de el taller mecanico</h1>
				<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"  crossorigin="anonymous">
    <!-- CSS del Footer Personalizado -->
    <link rel="stylesheet" href="css/miestilo.css">
    <!-- CSS del Fondo de UIGradients -->
    <!-- Iconos de FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/cotizar.css">
				<nav class="navbar navbar-expand-lg navbar-black bg-dark">

  <a class="navbar-link" href="index.php">Taller</a>
  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggle-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench" aria-hidden="true"></i> 
          Servicios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          
          <!-- Option 2: Separate Popper and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <!-- Inicio del Menu 3N -->

          <div class="dropdown dropright">
             <a class="dropdown-item " href="Servicio de afinación.php">Servicio de afinación</a>
              
          </div>
          <!-- Fin del Menu 3N -->
        <!--/////////////7-->
          <!-- Inicio del Menu 3N -->
          <div class="dropdown dropright">
             <a class="dropdown-item" href="Mantenimiento de aire acondicionado automotriz.php">Mantenimiento de aire acondicionado automotriz</a>
             <div class="dropdown-menu" aria-labelledby="dropdown-layouts">
             </div>
          </div>
          <!-- Fin del Menu 3N -->
          <a class="dropdown-item" href="Servicio de frenos.php">Servicio de frenos</a>
          <a class="dropdown-item" href="Cambio de batería o acumulador.php">Cambio de batería o acumulador</a>
          <a class="dropdown-item" href="Limpieza de inyectores.php">Limpieza de inyectores</a>
          <a class="dropdown-item" href="Reparación eléctrica.php">Reparación eléctrica</a>
          <a class="dropdown-item" href="Reparación de suspensión.php">Reparación de suspensión</a>
          <a class="dropdown-item" href="Afinación y cambio de aceite.php">Afinación y cambio de aceite</a>
          <a class="dropdown-item" href="Lubricación.php">Lubricación</a>
          <a class="dropdown-item" href="Ajuste de frenos.php">Ajuste de frenos</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-product-hunt"></i>
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Avina</a>
          <a class="dropdown-item" href="#">Pravada</a>
        </div>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="Cotizar.php"><i class="fas fa-cogs"></i>Cotizar</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="galeria.php"><i class="fas fa-camera"></i>Galería</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="Blog.php"><i class="fas fa-blog"></i>Blog</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="contacto.php"><i class="fa fa-user" aria-hidden="true"></i>Contacto</a>
    	</li>
		<li class="nav-item">
        <a class="nav-link" href="CREA TU CITA.php"><i class="fa fa-users" aria-hidden="true"></i>CREA TU CITA</a>
      </li>

    </ul>
  </div>

</nav>
			  </header>
        <article>
			 
          <div class="row" id="cita">
            <div class="container">
              <div class="row">
                <div class="col-md-12 mx-auto">
                    <form method="POST">
                      <h2 class="text-uppercase mt-3 font-weight-bold text-white text-center">Cotizar</h2>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Nombre:</label>
                            <input type="text" name="nombre" class="form-control mt-2"  placeholder="Nombre(s)" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Apellidos:</label>
                            <input type="text" name="apellidos" class="form-control mt-2" placeholder="Apellidos" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Telefono:</label>
                            <input type="text" name="telefono" class="form-control mt-2" placeholder="Telefono" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Correo electronico:</label>
                            <input type="email" name="email" class="form-control mt-2" placeholder="Email" required>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="font-weight-bold text-white">Servicios a cotizar:</label>
                           <select name="servicio" id="servicio" class="form-control mt-2">
                              <option>Servicios:</option>
                              <option>Servicio de afinación...$150.00</option>
                              <option>Mantenimiento de aire acondicionado automotriz...$125.00</option>
                              <option>Servicio de frenos...$175.00</option>
                              <option>Cambio de batería o acumulador...$200.00</option>
                              <option>Limpieza de inyectores...$225.00</option>
                              <option>Reparación eléctrica...$140.00</option>
                              <option>Reparación de suspensión...$215.00</option>
                              <option>Afinación y cambio de aceite...$250.00</option>
                              <option>Lubricación...$100.00</option>
                              <option>Ajuste de frenos...$150.00</option>
                            </select>
                          </div>
                        </div>
                      </div>
                        <div class="col-lg-12">
                          <button class="btn btn-primary btn-block" type="submit" name="registrar" value="Enviar">Enviar</button>
                        </div>
                      </div>
                    </form>
                     
                </div>
              </div>
            </div>
          </div> 
      </div>
    </div>
    <!-- Fin de contenidos -->
  </body>
 
			</ul>
		</article>
		   <footer>
				<p>Diseñado y Maquetado por: Manuel Chavez Avila &copy; 2022</p>
		<p>Contactar a: <a href="mailto:alexiscapri019@gmail.com">Administrador del Sitio</a></p>
		   </footer>
		</body>
		</html>
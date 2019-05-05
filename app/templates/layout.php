<?php ob_start()?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>ViVew</title>

    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">ViVew</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php?con=inicio">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categorías
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php?con=videojuegos">Videojuegos</a>
                <a class="dropdown-item" href="#">Películas</a>
                <a class="dropdown-item" href="#">Series</a>
              </div>
            </li>
            
            
          </ul>
			
		<?php if(isset($_SESSION['login']) && ($_SESSION['login'] == 'admin')) {?>
		
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php?con=insertar">Registrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?con=usuarios">Usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?con=salir">Cerrar sesión</a>
            </li>
          </ul>
            
            
            <?php } else if(isset($_SESSION['login']) && ($_SESSION['login'] != 'admin')) { ?>
        	
          
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php?con=perfil">Tu perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ajustes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?con=salir">Cerrar sesión</a>
            </li>
            </ul>
          
         
          <?php } else { ?>
          
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php?con=loggear">Inicia sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?con=registro">Regístrate</a>
            </li>
          </ul>
          
          <?php }?>


        </div>
      </nav>
    </header>
    
    <main role="main">
    
    <?php echo $contenido ?>
    
    
    </main>
    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
   	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    
  </body>
</html>
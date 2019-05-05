<?php ob_start()?>

<div class="jumbotron jumbotron-fluid mt-2 text-center">
        <div class="container">
          <h1 class="display-4">Videojuegos</h1>
          <p class="lead">¡Bienvenido a la sección de videojuegos!</p>
        </div>
      </div>


      <div class="card mx-2">
        <div class="card-body mb-2">
          <div class="container">
            <div class="list-group">
              <a href="#" class="list-group-item">The Legend of Zelda</a>
              <a href="#" class="list-group-item">Pokémon</a>
              <a href="#" class="list-group-item">Kingdom Hearts</a>
              <a href="#" class="list-group-item">Final Fantasy</a>
              <a href="#" class="list-group-item">Metal Gear</a>
              <a href="#" class="list-group-item">Monster Hunter</a>
              <a href="#" class="list-group-item">Call of Duty</a>
            </div>
          </div>
        </div>
      </div>
  </div>



<?php $contenido = ob_get_clean()?>
<?php include 'layout.php' ?>
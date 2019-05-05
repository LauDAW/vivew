<?php ob_start()?>

      <div id="myCarousel" class="carousel slide mt-2" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="images/sekiro.jpg" alt="sekiro shadows die twice">
            <div class="container">
              <div class="carousel-caption">
                <h3>Sekiro: Shadows Die Twice</h3>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="images/glass.jpg" alt="pelicula slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Glass</h1>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="images/sexedu.jpg" alt="serie slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Sex Education</h1>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img src="images/mando.png" class="mx-auto" style="witdh:150px;height:150px;"/>
            <h2>Videojuegos</h2>
            <p class="d-none d-xl-block">Haz click en el botón para ir a las review hechas por los usuarios.</p>

            <p><a class="btn btn-secondary" href="index.php?con=videojuegos" role="button">Let's-a-go! &raquo;</a></p>
          </div>

          <div class="col-lg-4">
            <img src="images/pelicula.png" class="mx-auto" style="witdh:110px;height:150px;"/>
            <h2 class="">Películas</h2>
            <p class="d-none d-xl-block">Haz click en el botón para ir a las review hechas por los usuarios.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver más &raquo;</a></p>
          </div>

          <div class="col-lg-4">
            <img src="images/tv.png" class="mx-auto" style="witdh:120px;height:150px;"/>
            <h2>Series</h2>
            <p class="d-none d-xl-block">Haz click en el botón para ir a las review hechas por los usuarios.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver más &raquo;</a></p>
          </div>
        </div>


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7 mx-auto">
            <img class="featurette-image img-fluid mx-auto img-thumbnail" src="images/sekiro.jpg" alt="Mejor videojuego">
          </div>
        </div>

        <div class="row featurette">
          <div class="col-lg-7 mx-auto">
            <h3 class="featurette-heading">Videojuego mejor valorado</h3>
            <p class="lead">Este espacio para el videojuego mejor valorado por los usuarios.</p>
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 mx-auto">
            <img class="featurette-image img-fluid mx-auto img-thumbnail" src="images/sekiro.jpg" alt="Mejor pel�cula">
          </div>
        </div>

        <div class="row featurette">
          <div class="col-md-7 mx-auto">
            <h3 class="featurette-heading">Película mejor valorada</h3>
            <p class="lead">Este espacio para la película mejor valorada por los usuarios.</p>
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 mx-auto">
            <img class="featurette-image img-fluid mx-auto img-thumbnail" src="images/sekiro.jpg" alt="Mejor serie">
          </div>
        </div>

        <div class="row featurette">
          <div class="col-md-7 mx-auto">
            <h3 class="featurette-heading">Serie mejor valorada</h3>
            <p class="lead">Este espacio para la serie mejor valorada por los usuarios.</p>
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <a href="#"><button class="btn btn-light float-right" href="#">Volver arriba</button></a>
        <p>Curso DAW 2018 - 2019</p>
      </footer>
      
<?php $contenido = ob_get_clean()?>
<?php include 'layout.php' ?>
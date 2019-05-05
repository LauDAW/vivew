<?php ob_start()?>
<?php if ($_SESSION['login'] == 'admin') { ?>
<br/>
<h3>Ver creados</h3>

<div class="row">
		<div class="col-2">
    		<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-vj" role="tab" aria-controls="v-pills-vj" aria-selected="true">Videojuego</a>
              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Película</a>
              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Serie</a>
            </div>
		</div>
		
		<div class="col-8">
    		<div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-vj" role="tabpanel" aria-labelledby="v-pills-vj-tab">
              <?php if(count($params['videojuego'])) {?>
              	<div>
					<table class="table table-bordered table-striped">
					<thead>
                        <tr>
                        	<th>Nombre</th>
                    		<th>Director</th>
                    		<th>Año</th>
                    		<th>País</th>
                    		<th>Título original</th>
                    		<th>Sinopsis</th>
                        </tr>
                    </thead>
              		
              		<tbody>
                        <?php foreach ($params['videojuego'] as $videojuego) :?>
                            <tr>
                            	
                            	<?php 
                            	  echo "<td> " . $videojuego['nombre'] . "</td>";
                            	  echo "<td> " . $videojuego['director'] . "</td>";
                            	  echo "<td> " . $videojuego['año'] . "</td>";
                            	  echo "<td> " . $videojuego['pais'] . "</td>";
                            	  echo "<td> " . $videojuego['titulo_original'] . "</td>";
                            	  echo "<td> " . $videojuego['sinopsis'] . "</td>";
                                ?>
                            		
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
              		
              		</table>
                </div>
                <?php } else { ?>
                	<p>No hay nada en la tabla</p>
                <?php } ?>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              	<?php if(count($params['pelicula'])) {?>
                  <div>
                  <table class="table table-bordered table-striped">
					<thead>
                        <tr>
                        	<th>Nombre</th>
                    		<th>Director</th>
                    		<th>Duración</th>
                    		<th>Año</th>
                    		<th>País</th>
                    		<th>Título original</th>
                    		<th>Sinopsis</th>
                        </tr>
                    </thead>
              		
              		<tbody>
                        <?php foreach ($params['pelicula'] as $pelicula) :?>
                            <tr>
                            	
                            	<?php 
                            	  echo "<td> " . $pelicula['nombre'] . "</td>";
                            	  echo "<td> " . $pelicula['director'] . "</td>";
                            	  echo "<td> " . $pelicula['año'] . "</td>";
                            	  echo "<td> " . $pelicula['duracion'] . "</td>";
                            	  echo "<td> " . $pelicula['pais'] . "</td>";
                            	  echo "<td> " . $pelicula['titulo_original'] . "</td>";
                            	  echo "<td> " . $pelicula['sinopsis'] . "</td>";
                                ?>
                            		
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
              		
              		</table>
                  
                  	
                  </div>
              	<?php } else { ?>
                	<p>No hay nada en la tabla</p>
                <?php } ?>
              </div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              	<?php if(count($params['serie'])) {?>
                  <div>
                  <table class="table table-bordered table-striped">
					<thead>
                        <tr>
                        	<th>Nombre</th>
                    		<th>Director</th>
                    		<th>Año</th>
                    		<th>Temporadas</th>
                    		<th>Episodios</th>
                    		<th>País</th>
                    		<th>Título original</th>
                    		<th>Sinopsis</th>
                        </tr>
                    </thead>
              		
              		<tbody>
                        <?php foreach ($params['serie'] as $serie) :?>
                            <tr>
                            	
                            	<?php 
                            	echo "<td> " . $serie['nombre'] . "</td>";
                            	echo "<td> " . $serie['director'] . "</td>";
                            	echo "<td> " . $serie['año'] . "</td>";
                            	echo "<td> " . $serie['temporadas'] . "</td>";
                            	echo "<td> " . $serie['episodios'] . "</td>";
                            	echo "<td> " . $serie['pais'] . "</td>";
                            	echo "<td> " . $serie['titulo_original'] . "</td>";
                            	echo "<td> " . $serie['sinopsis'] . "</td>";
                                ?>
                            		
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
              		
              		</table>
                  
                  	
                  </div>
              	<?php } else { ?>
                	<p>No hay nada en la tabla</p>
                <?php } ?>
              </div>
          	</div>
          </div>
          
		<div class="col-2">
			<a href="index.php?con=insertar">Insertar nuevo</a>
		</div>
      </div>
      

</div>








<?php } else { 
    echo '<h1>No tienes permisos para estar aquí</h1>';
    echo '<a href="index.php?con=inicio"><button class="btn btn-info">Volver a inicio</button></a>';
} ?>


<?php $contenido = ob_get_clean()?>
<?php include 'layout.php' ?>
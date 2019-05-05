<?php ob_start()?>
<?php if ($_SESSION['login'] == 'admin') { ?>
<br/>
<h3>Insertar</h3>

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
              	<div>
              		<form name="formVideojuego" action="index.php?con=registrarVideojuego" method="POST" enctype="multipart/form-data">
              			<table>
              				<tr>
              					<th>Nombre</th>
              					<td><input type="text" name="nombre"></td>
              				</tr>
              				<tr>
              					<th>Director</th>
              					<td><input type="text" name="director"></td>
              				</tr>
              				<tr>
              					<th>Género/s</th>
              					<td>
              						<select name="generos[]" multiple>
              						
                                    <?php foreach ($params['genero'] as $genero) :?>
                                    	<?php 
                                    	
                                    	  echo "<option value='" . $genero['id'] . "'> " . $genero['nombre'] . "</option>";
                                    	  
                                        ?>
                                    <?php endforeach; ?>
                                    
              						</select>
              					</td>
              					
              				</tr>
              				<tr>
              					<th>Año</th>
              					<td><input type="number" name="año" min="1800" max="2019" placeholder="1800"></td>
              				</tr>
              				<tr>
              					<th>País</th>
              					<td><input type="text" name="pais"></td>
              				</tr>
              				<tr>
              					<th>Título original</th>
              					<td><input type="text" name="titulo_original"></td>
              				</tr>
              				<tr>
              					<th>Sinopsis</th>
              					<td><textarea name="sinopsis"></textarea></td>
              				</tr>
              				<tr>
              					<th>Imagen</th>
              					<td><input name="imagen" type="file"></td>
              				</tr>
              				<tr>
                    			<td></td>
                    			<td><input class="btn btn-success" type="submit" value="Registrar videojuego" name="registrarVideojuego" /></td>
                    		</tr>
              				
              			</table>
              		</form>
              	</div>
              </div>
              
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <div>
              		<form name="formPelicula" action="index.php?con=registrarPelicula" method="POST">
              			<table>
              				<tr>
              					<th>Nombre</th>
              					<td><input type="text" name="nombre"></td>
              				</tr>
              				<tr>
              					<th>Director</th>
              					<td><input type="text" name="director"></td>
              				</tr>
              				<tr>
              					<th>Género/s</th>
              					<td>
              						<select name="generos[]" multiple>
              						
                                    <?php foreach ($params['genero'] as $genero) :?>
                                    	<?php 
                                    	
                                    	  echo "<option value='" . $genero['id'] . "'> " . $genero['nombre'] . "</option>";
                                    	  
                                        ?>
                                    <?php endforeach; ?>
                                    
              						</select>
              					</td>
              					
              				</tr>
              				<tr>
              					<th>Duración</th>
              					<td><input type="text" name="duracion"></td>
              				</tr>
              				<tr>
              					<th>Año</th>
              					<td><input type="number" name="año" min="1800" max="2019" placeholder="1800"></td>
              				</tr>
              				<tr>
              					<th>País</th>
              					<td><input type="text" name="pais"></td>
              				</tr>
              				<tr>
              					<th>Título original</th>
              					<td><input type="text" name="titulo_original"></td>
              				</tr>
              				<tr>
              					<th>Sinopsis</th>
              					<td><textarea name="sinopsis"></textarea></td>
              				</tr>
              				<tr>
              					<th>Imagen</th>
              					<td><input type="file"></td>
              				</tr>
              				<tr>
                    			<td></td>
                    			<td><input class="btn btn-success" type="submit" value="Registrar película" name="registrarPelicula" /></td>
                    		</tr>
              				
              			</table>
              		</form>
              	</div>
              </div>
              
              
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              <div>
              		<form name="formSerie" action="index.php?con=registrarSerie" method="POST">
              			<table>
              				<tr>
              					<th>Nombre</th>
              					<td><input type="text" name="nombre"></td>
              				</tr>
              				<tr>
              					<th>Director</th>
              					<td><input type="text" name="director"></td>
              				</tr>
              				<tr>
              					<th>Género/s</th>
              					<td>
              						<select name="generos" multiple>
              						
                                    <?php foreach ($params['genero'] as $genero) :?>
                                    	<?php 
                                    	
                                    	  echo "<option value='" . $genero['id'] . "'> " . $genero['nombre'] . "</option>";
                                    	  
                                        ?>
                                    <?php endforeach; ?>
                                    
              						</select>
              					</td>
              					
              				</tr>
              				<tr>
              					<th>Año</th>
              					<td><input type="number" name="año" min="1800" max="2019" placeholder="1800"></td>
              				</tr>
              				<tr>
              					<th>Temporadas</th>
              					<td><input type="text" name="temporadas"></td>
              				</tr>
              				<tr>
              					<th>Episodios</th>
              					<td><input type="text" name="episodios"></td>
              				</tr>
              				<tr>
              					<th>País</th>
              					<td><input type="text" name="pais"></td>
              				</tr>
              				<tr>
              					<th>Título original</th>
              					<td><input type="text" name="titulo_original"></td>
              				</tr>
              				<tr>
              					<th>Sinopsis</th>
              					<td><textarea name="sinopsis"></textarea></td>
              				</tr>
              				<tr>
              					<th>Imagen</th>
              					<td><input type="file"></td>
              				</tr>
              				<tr>
                    			<td></td>
                    			<td><input class="btn btn-success" type="submit" value="Registrar serie" name="registrarSerie" /></td>
                    		</tr>
              				
              			</table>
              		</form>
              	</div>
              
              </div>
            </div>
		</div>
		
		<div class="col-2">
			<a href="index.php?con=creados">Ver creados</a>
		</div>
</div>




<?php } else { 
    echo '<h1>No tienes permisos para estar aquí</h1>';
    echo '<a href="index.php?con=inicio"><button class="btn btn-info">Volver a inicio</button></a>';
} ?>


<?php $contenido = ob_get_clean()?>
<?php include 'layout.php' ?>
<?php ob_start()?>

<?php if ($_SESSION['login'] == 'admin') { ?>

    <?php 
    echo "<pre>";
    get_defined_vars();
    echo "</pre>";
    if(count($params['usuario'])) { ?>
    
    <h3>Usuarios registrados en ViVew</h3>
    
    <div id="tabla_usuarios">
    
        <table class="table table-bordered table-striped">
         <thead>
          <tr>
           <th>Nombre</th>
           <th>Email</th>
          </tr>
         </thead>
         <tbody>
        <?php foreach ($params['usuario'] as $usuario) :?>
            <tr>
        		
        		<?php 
            		if($usuario['rol'] != 'admin') {
            		  echo "<td> " . $usuario['nombre'] . "</td>";
            		  echo "<td> " . $usuario['email'] . "</td>";
        		}?>
        			
        	</tr>
        <?php endforeach; ?>
        </tbody>
        
        </table>
    </div>
        <?php } else { ?>
        
        <p>No hay nada en la tabla</p>
        
        <?php } ?>
        
        <div id="eliminar">
        <form action="index.php?con=dlt" method="POST">
            <table>
                <tr>
                	<th>Nombre de usuario a eliminar</th>
                	<td><input type="text" name="nombre" value=""></td>
                </tr>
                <tr>
                	<td></td>
                	<td><input type="submit" value="Eliminar usuario" name="dlt"></td>
                </tr>
            </table>
	 	</form>
	 	</div>
<?php } else { 

    header('Status: 404 Not Found');
    echo '<h1>Aquí no hay nada que ver...</h1>';
    
 } ?>

<?php $contenido = ob_get_clean()?>
<?php include 'layout.php' ?>

<script>
	function preguntar() {
		alert("Eh");
	}
</script>

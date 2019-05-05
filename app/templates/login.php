<?php ob_start()?>

<div class="mt-2">

	<form name="formLogin" action="index.php?con=login" method="POST">
    	<table>
    		<tr>
    			<th>Nombre</th>
    			<td><input type="text" name="nombre" value="" /></td>
    		</tr>
    		<tr>
    			<th>Contraseña</th>
    			<td><input type="password" name="password" value="" /></td>
    		</tr>
    	</table>
    	<input class="btn btn-success" type="submit" value="Entrar" name="login" />
	</form>

</div>



<?php $contenido = ob_get_clean()?>
<?php include 'layout.php' ?>
<?php ob_start()?>

<div class="mt-2">

    <form name="formRegister" action="index.php?con=registrar" method="POST">
    	<table>
    		<tr>
    			<th>Usuario</th>
    			<td><input type="text" name="nombre" /></td>
    		</tr>
    		<tr>
    			<th>Password</th>
    			<td><input type="password" name="password" /></td>
    		</tr>
    		<tr>
    			<th>Email</th>
    			<td><input type="email" name="email" /></td>
    		</tr>
    		<tr>
    			<td></td>
    			<td><input class="btn btn-success" type="submit" value="Registrar" name="registrar" /></td>
    		</tr>
    	</table>
    </form>
    
</div>



<?php $contenido = ob_get_clean()?>
<?php include 'layout.php' ?>
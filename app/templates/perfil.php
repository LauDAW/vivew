<?php ob_start()?>
<?php if ($_SESSION['login'] != 'admin') { ?>
<br/>
<h3>Perfil de <?php echo $_SESSION['login']; ?></h3>

<table>
	<tr>
		<th></th>
		<td></td>
	</tr>

</table>


<?php } else { 
    echo '<h1>Apartado personal de usuarios no-admin</h1>';   
} ?>


<?php $contenido = ob_get_clean()?>
<?php include 'layout.php' ?>
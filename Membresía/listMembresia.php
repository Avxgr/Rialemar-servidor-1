<?php
//aqui se asigna el resultado de la funcion de obtener los registros del archivo Membresias
$listaMembresia=getListaMembresia();
	//Aqui se verifica que existan registros para desplegar los datos
	if($listaMembresia!=null)
	{
		//print_r($listaPartes);
?>	
	<h2><center>LISTA DE MEMBRESIAS MEMBRESIAS </center></h2>
	<table>
		<tr>
			<th>ID_Membresia</th>
			<th>ID_Cliente</th>
			<th>Fecha_Inicio</th>
			<th>Fecha_Fin</th>
			<?php if($_SESSION['tipo_usuario'] == 2){ ?>
			<th>Eliminar</th>
			<?php } ?>
		</tr>
	
	<?php //se lee cada registro de y cada campo de la lista de Membresias
		foreach($listaMembresia as $key=>$campo)
	{
		?>
			<tr>
				<td><?=$campo['ID_Membresia']?></td>
				<td><?=$campo['ID_Cliente']?></td>
				<td><?=$campo['Fecha_Inicio']?></td>
				<td><?=$campo['Fecha_Fin']?></td>
				<?php if($_SESSION['tipo_usuario'] == 2){ ?>
				<td><a href="<?=ROOTURL?>?accion=deleteMembresia&ID_Membresia=<?=$campo['ID_Membresia']?>">Eliminar</a></td>
				<?php } ?>
			</tr>
	<?php } ?>
	</table>
	<?php } ?>			
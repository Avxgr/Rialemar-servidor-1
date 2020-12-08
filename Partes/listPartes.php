<?php
//aqui se asigna el resultado de la funcion de obtener los registros del archivo Partes
$listaPartes=getListaPartes();
	//Aqui se verifica que existan registros para desplegar los datos
	if($listaPartes!=null)
	{
		//print_r($listaPartes);
?>	
	<h2><center>LISTA DE PARTES</center></h2>
	<table>
		<tr>
			<th>ID_Parte</th>
			<th>Nombre_Parte</th>
			<th>Modelo_Parte</th>
			<th>Marca_Parte</th>
			<th>Precio_Parte</th>
			<th>Porcentaje_Descuento_Membresia</th>
			<th>Imagen</th>
			<?php if($_SESSION['tipo_usuario'] == 3){ ?>
			<th>Modificar</th>
			<th>Eliminar</th>
			<th>Agregar Imagen</th>
			<?php } ?>
		</tr>
	
	<?php //se lee cada registro de y cada campo de la lista de Partes
		foreach($listaPartes as $key=>$campo)
	{
		?>
			<tr>
				<td><?=$campo['ID_Parte']?></td>
				<td><?=$campo['Nombre_Parte']?></td>
				<td><?=$campo['Modelo_Parte']?></td>
				<td><?=$campo['Marca_Parte']?></td>
				<td><?=$campo['Precio_Parte']?></td>
				<td><?=$campo['Porcentaje_Descuento_Membresia']?></td>
				<td><center><img class="foto" src="<?=ROOTURL.$campo['Imagen']?>"/></center></td>
				<?php if($_SESSION['tipo_usuario'] == 3){ ?>
				<td><a href="<?=ROOTURL?>?accion=editPartes&ID_Parte=<?=$campo['ID_Parte']?>">Modificar</a></td>
				<td><a href="<?=ROOTURL?>?accion=deletePartes&ID_Parte=<?=$campo['ID_Parte']?>">Eliminar</a></td>
				<td><a href="<?=ROOTURL?>?accion=imgPartes&ID_Parte=<?=$campo['ID_Parte']?>">Agregar Imagen</a></td>
				<?php } ?>
			</tr>
	<?php } ?>
	</table>
	<?php } ?>
		
			
<?php
//aqui se asigna el resultado de la funcion de obtener los registros del archivo Rentas
$listaRentas=getListaRentas();
	//Aqui se verifica que existan registros para desplegar los datos
	if($listaRentas!=null)
	{
		//print_r($listaRentas);
?>	
	<h2><center>LISTA DE RENTAS</center></h2>
	<table>
		<tr>
			<th>ID_Renta</th>
			<th>ID_Cliente</th>
			<th>ID_Carro</th>
			<th>Fecha_Renta</th>
			<th>Duracion</th>
			<th>Monto</th>
			<th>Estado</th>
			<?php if($_SESSION['tipo_usuario'] == 2){ ?>
			<th>Aceptar</th>
			<th>Denegar</th>
			<?php } ?>
		</tr>
	
	<?php //se lee cada registro de y cada campo de la lista de Rentas
		foreach($listaRentas as $key=>$array)
	{
		?>
			<tr>
				<td><?=$array['ID_Renta']?></td>
				<td><?=$array['ID_Cliente']?></td>
				<td><?=$array['ID_Carro']?></td>
				<td><?=$array['Fecha_Renta']?></td>
				<td><?=$array['Duracion']?></td>
				<td><?=$array['Monto']?></td>
				<td><?=$array['Estado']?></td><!--links a las funciones de aceptar, denegar y modificar registro-->
				<?php if($_SESSION['tipo_usuario'] == 2){ ?>
				<?php if($array['Estado'] == "Espera"){ ?>
				<td><a href="<?=ROOTURL?>?accion=addVenta&ID_Renta=<?=$array['ID_Renta']?>">Aceptar</a></td>
				<td><a href="<?=ROOTURL?>?accion=deleteRenta&ID_Renta=<?=$array['ID_Renta']?>">Denegar</a></td>
				<?php }else{ ?>
				<td></td>
				<td></td>
				<?php } ?>
				<?php } ?>
			</tr>
	<?php } ?>
	</table>
	<?php } ?>
		
			
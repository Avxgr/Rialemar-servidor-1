<?php
//aqui se asigna el resultado de la funcion de obtener los registros del archivo Alumnos
$listaVentas=getListaVentas();
	//Aqui se verifica que existan registros para desplegar los datos
	if($listaVentas!=null)
	{
		//print_r($listaVentas);
?>	
	<h2><center>LISTA DE VENTAS</center></h2>
	<table>
		<tr>
			<th>ID_Venta</th>
			<th>ID_Cliente</th>
			<th>ID_Empleado</th>
			<th>ID_Producto</th>
			<th>Producto</th>
			<th>Fecha_Venta</th>
			<th>Monto</th>
			<th>Movimiento</th>
			<?php if($_SESSION['tipo_usuario'] == 2){ ?>
			<th>Eliminar</th>
			<?php } ?>
		</tr>
	
	<?php //se lee cada registro de y cada campo de la lista de Alumnos
		foreach($listaVentas as $key=>$array)
	{
		?>
			<tr>
				<td><?=$array['ID_Venta']?></td>
				<td><?=$array['ID_Cliente']?></td>
				<td><?=$array['ID_Empleado']?></td>
				<td><?=$array['ID_Producto']?></td>
				<td><?=$array['Producto']?></td>
				<td><?=$array['Fecha_Venta']?></td>
				<td><?=$array['Monto']?></td>
				<td><?=$array['Movimiento']?></td>
				<!--links a las funciones de modificar y eliminar registro-->
				<?php if($_SESSION['tipo_usuario'] == 2){ ?>
				<td><a href="<?=ROOTURL?>?accion=deleteVenta&ID_Venta=<?=$array['ID_Venta']?>">Eliminar</a></td>
				<?php } ?>
			</tr>
	<?php } ?>
	</table>
	<?php } ?>
		
			
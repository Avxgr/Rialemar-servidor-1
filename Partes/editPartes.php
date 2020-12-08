<?php
//Variable que toma los valores de la funcion getDatosPartes(), la cual a su vez 
//toma los valores del campo con un ID especifico
$datosPartes=getDatosPartes($_GET['ID_Parte']);
//si los datos no son nulos procede con un arreglo
	if($datosPartes!=null)
	{
		//por cada valor de datosPartes se representara como un arreglo dividido en $campos
		foreach($datosPartes as $key=>$campo) { 
?>
		<!--este es un formulario html para colectar datos que seran modificados en la bd -->
		<div id="datosPartes">
		<!-- Esta linea direcciona al archivo updatePartes.php enviando los datos con el metodo POST-->
				<form name="frmPartes" action="Partes/updatePartes.php" method="POST" class="formulario">
				
					<input type="hidden" name="accion" value="editPartes">
				
					<input type="hidden" name="txtID_Parte" value="<?=$campo['ID_Parte']?>">

					<h2>Modificar datos de Parte</h2>
					
					<label>ID_Parte: <?=$campo['ID_Parte']?><br></label>

					<label>Nombre_Parte: <span>*</span>
						<input type="text" name="txtNombre_Parte" value="<?=$campo['Nombre_Parte']?>" placeholder="Nombre_Parte" required>
					</label>

					<label>Modelo_Parte: <span>*</span>
						<input type="text" name="txtModelo_Parte" value="<?=$campo['Modelo_Parte']?>" placeholder="Modelo_Parte" required>
					</label>

					<label>Marca_Parte: <span>*</span>
						<input type="text" name="txtMarca_Parte" value="<?=$campo['Marca_Parte']?>" placeholder="Marca_Parte" required>
					</label>
					
					<label>Precio_Parte: <span>*</span>
						<input type="text" name="txtPrecio_Parte" value="<?=$campo['Precio_Parte']?>" placeholder="Precio_Parte" required>
					</label>
					
					<label>Porcentaje de descuento para miembros: <span>*</span>
						<input type="text" name="txtPorcentaje_Descuento_Membresia" value="<?=$campo['Porcentaje_Descuento_Membresia']?>" placeholder="txtPorcentaje_Descuento_Membresia" required>
					</label>

					<input type="submit" name="btnRegistrar" value="Registrar">
				</form>
		</div>
	<div style="clear: both;">&nbsp;</div>
<?php } ?>
		<?php } ?>
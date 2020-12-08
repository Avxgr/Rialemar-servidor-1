<?php 
require_once 'funciones.php';

$ID_Parte= (isset($_GET['ID_Parte'])) ? $_GET['ID_Parte'] : null;
	
$DatosPartes=getDatosPartes($ID_Parte); //Se obtienen los datos del balón para subir la foto

	if($DatosPartes!=null)
	{	
		foreach($DatosPartes as $campo) {
			$ID_Parte = $campo['ID_Parte'];
			$Imagen = ROOTURL.$campo['Imagen'];	
			$Modelo_Parte = $campo['Modelo_Parte'];	
			$Marca_Parte = $campo['Marca_Parte'];
			$Precio_Parte =$campo['Precio_Parte'];
		}
	}
 ?>	
	<div id="datosPartes">
			
			<form name="frmPartes" action="Partes/partes_SubirFoto.php" method="POST" class="formulario" enctype="multipart/form-data">
				<input type="hidden" id="IDPartesFoto" name="IDPartesFoto" value="<?=$ID_Parte?>"/>
				<h2>Subir imagen del Bal&oacute;n</h2>
				<center><img  src="<?=ROOTURL.$campo['Imagen']?>"/></center>
				<label>ID_Parte: <span>*</span>
					<input type="text" id="ID_Parte" name="txtID_Parte" value="<?=$ID_Parte?>" disabled />
				</label>
				
				<label>Marca_Carro: <span>*</span>
					<input type="text" name="txtMarca_Parte" placeholder="Marca_Parte" value="<?=$Marca_Parte?>" disabled />
				</label>

				<label>Precio_Carro: <span>*</span>
					<input type="text" name="txtPrecio_Parte" placeholder="Precio_Parte" value="<?=$Precio_Parte?>" disabled />
				</label>	
				
				<input type="file" id="uploadImage" name="uploadImage" />
				<input type="submit" name="btnRegistrar" value="subirImagen">
			</form>
	</div>
	<div style="clear: both;">&nbsp;</div>
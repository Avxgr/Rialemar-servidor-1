<div id="datosPartes" >
<!-- Este formulario envia los datos por metodo POST de cada uno de sus cajas de texto a el archivo "addPartes.php"-->
		<form name="frmPartes" action="Partes/addPartes.php" method="POST" class="formulario">
		
		<input type="hidden" name="accion" value="addPartes">
			<center> 
				<h1>Registrar Parte de carro</h1>
			
		<br><br>
				<label>Nombre: <span>*</span>
					<input type="text" name="txtNombre_Parte" placeholder="Nombre_Parte" required>
				</label>

				<label>Modelo: <span>*</span>
					<input type="text" name="txtModelo_Parte" placeholder="Modelo_Parte" required>
				</label>

				<label>Marca: <span>*</span>
					<input type="text" name="txtMarca_Parte" placeholder="Marca_Parte" required>
				</label>
				
				<label>Precio: <span>*</span>
					<input type="text" name="txtPrecio_Parte" placeholder="Precio_Parte" required>
				</label>
				
				<label>Porcentaje de descuento para miembros: <span>*</span>
					<input type="text" name="txtPorcentaje_Descuento_Membresia" placeholder="txtPorcentaje_Descuento_Membresia" required>
				</label>
				
				<input type="submit" name="btnRegistrar" value="Registrar">
    
           </center> 
			</form>
	</div>
	<div style="clear: both;">&nbsp;</div>
	


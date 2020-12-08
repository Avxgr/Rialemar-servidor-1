<?php
//Estas dos lineas de codigo son instrucciones que realizan conexion con la BD
require_once('../configuracion.php');
include("../Clases/MySqli.php");
//Estas variables reciven el valor de cada una de las cajas de texto del formulario "editPartes"
$ID_Parte = $_POST["txtID_Parte"];
$Nombre_Parte = $_POST["txtNombre_Parte"];
$Modelo_Parte = $_POST["txtModelo_Parte"];
$Marca_Parte = $_POST["txtMarca_Parte"];
$Precio_Parte = $_POST["txtPrecio_Parte"];
$Descuento_Membresia = $_POST["txtPorcentaje_Descuento_Membresia"];

//print_r($_REQUEST);
//ECHO $accion = $_POST["accion"];

require_once(HEADERADMIN);
		//Aqui se realiza la sustitucion de cada uno de los datos del formulario, es decir, las variables, por 
		//cada uno de los campos de la BD donde indique el ID especificado a modificar
		$query = "UPDATE partes SET ID_Parte = '$ID_Parte', Nombre_Parte = '$Nombre_Parte', Modelo_Parte = '$Modelo_Parte', Marca_Parte ='$Marca_Parte', Precio_Parte ='$Precio_Parte', Porcentaje_Descuento_Membresia='$Descuento_Membresia' WHERE ID_Parte = $ID_Parte";
		
		if (!$result = mysqli_query($con, $query)) {
			//en estas lineas echo se imprime un mensaje en caso de encontrar un error con la conexion de la BD al intentar modificarlos
		        echo '<div id="mensaje">
		        			<center>
							<h2 class="title">Error al intentar guardar los cambios de la parte RIALEMAR</h2>'.
							mysqli_error($con)
							//este boton reenvia a la misma lista de los registros
							.'<br><input type=button value="Ir a la lista de Partes RIALEMAR" onclick=self.location="'.ROOTURL.'?accion=listPartes">
							</center>
						</div>';
		}else{
			//esta impresion indica que la modificacion ha sido exitosa! y tambien reenvia a la misma pagina de registros actualizados
    	echo '<div id="mensaje"><center>
		
    			<h2>¡Datos Actualizados!</h2>
    			<br>
    			<input type=button value="Ir a la lista de Partes RIALEMAR" onclick=self.location="'.ROOTURL.'?accion=listPartes" class="btn"> 
    			</center>
    		</div>';
    	}

require_once(FOOTERADMIN);
?>
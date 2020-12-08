<?php
//Conexion con la BD
require_once('../configuracion.php');
include("../Clases/MySqli.php");
//Estas variables toman los valores post del formulario datosPartes, por cada uno de sus campos
$Nombre_Parte = $_POST["txtNombre_Parte"];
$Modelo_Parte = $_POST["txtModelo_Parte"];
$Marca_Parte = $_POST["txtMarca_Parte"];
$Precio_Parte = $_POST["txtPrecio_Parte"];
$Descuento_Membresia = $_POST["txtPorcentaje_Descuento_Membresia"];

//print_r($_REQUEST);
//ECHO $accion = $_POST["accion"];

require_once(HEADERADMIN);
		//inserta las variables en los campos respectivos de la tabla "partes" en la Base de Datos "RIALEMAR"
		$query = "INSERT INTO partes (Nombre_Parte, Modelo_Parte, Marca_Parte, Precio_Parte, Porcentaje_Descuento_Membresia) VALUES ('$Nombre_Parte','$Modelo_Parte','$Marca_Parte','$Precio_Parte','$Descuento_Membresia')";
		//mensaje que muestra que la conxion con la Base de Datos al intentar registrar una parte de carro es fallida
		if (!$result = mysqli_query($con, $query)) {
		        echo '<div id="mensaje">
		        			<center>
							<h2 class="title">Error al intentar Registrar parte de carro</h2>'.
							mysqli_error($con)
							.'<br><input type=button value="Ir a la lista de Partes" onclick=self.location="'.ROOTURL.'?accion=listPartes">
							</center>
						</div>';
		}else{
			//mensaje que muestra que el registro y actualizacion han sido un éxito!, despues redirecciona a la misma pagina pero actualizada!
    	echo '<div id="mensaje"><center>
    			<h2>Parte de carro de RIALEMAR Registrado</h2>
    			<br>
				
    			<input type=button value="Ir a la lista de Partes" onclick=self.location="'.ROOTURL.'?accion=listPartes" class="btn"> 
    			</center>
    		</div>';
    	}

require_once(FOOTERADMIN);
?>
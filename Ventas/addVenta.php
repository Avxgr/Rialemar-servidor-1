<?php
//Conexion con la BD
require_once('configuracion.php');
include("Clases/MySqli.php");
if(isset($_GET['ID_Compra'])){
	$datosParaVenta= getDatosCompra($_GET['ID_Compra']);
	if($datosParaVenta != null){
		foreach($datosParaVenta as $key => $campo){
			$ID_Cliente = $campo["ID_Cliente"];
			$ID_Producto = $campo["ID_Producto"];
			$Producto = $campo["Producto"];
			$Fecha_Venta = date("Y-m-d");
			$Monto = $campo["Monto"];
			$Movimiento = "Compra";
		}
	}
}
else if(isset($_GET['ID_Renta'])){
	$datosParaVenta = getDatosRenta($_GET['ID_Renta']);
	if($datosParaVenta){
		foreach($datosParaVenta as $key => $campo){
			$ID_Cliente = $campo["ID_Cliente"];
			$ID_Producto = $campo["ID_Carro"];
			$Producto = "Carro";
			$Fecha_Venta = date("Y-m-d");
			$Monto = $campo["Monto"];
			$Movimiento = "Renta";
		}
	}
}
$ID_Empleado = $_SESSION["user_session"];
require_once(HEADERADMIN);
$query = "INSERT INTO ventas (ID_Cliente, ID_Empleado, ID_Producto, Producto, Fecha_Venta, Monto, Movimiento) VALUES ('$ID_Cliente', '$ID_Empleado', '$ID_Producto', '$Producto', '$Fecha_Venta', '$Monto', '$Movimiento')";
if (!$result = mysqli_query($con, $query)) {
	echo '<div id="mensaje">
		<center>
		<h2 class="title">Error al intentar Registrar la venta</h2>'.
		mysqli_error($con)
		.'<br><input type=button value="Ir a la lista de Ventas" onclick=self.location="'.ROOTURL.'?accion=listVentas">
		</center>
	</div>';
}else{
	$estado = "Aceptado";
	if(isset($_GET['ID_Compra'])){
		$ID_Compra = $_GET['ID_Compra'];
		$query = "UPDATE compras SET Estado ='$estado' WHERE ID_Compra='$ID_Compra'";
	}
	else if(isset($_GET['ID_Renta'])){
		$ID_Renta = $_GET['ID_Renta'];
		$query = "UPDATE rentas SET Estado ='$estado' WHERE ID_Renta='$ID_Renta'";
	}
	if(!$result = mysqli_query($con, $query)){
		echo '<div id="mensaje">
			<center>
			<h2 class="title">Error al intentar actualizar la renta</h2>'.
			mysqli_error($con)
			.'<br><input type=button value="Ir a la lista de Ventas" onclick=self.location="'.ROOTURL.'?accion=listVentas">
			</center>
		</div>';
	}
	else{
		echo '<div id="mensaje"><center>
		<h2>Venta de RIALEMAR Registrada</h2>
		<br><input type=button value="Ir a la lista de Ventas" onclick=self.location="'.ROOTURL.'?accion=listVentas" 
		class="btn"></center></div>';
	}
}
require_once(FOOTERADMIN);
?>
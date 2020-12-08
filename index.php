<?php
require_once('configuracion.php');
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : null;
$accion = (isset($_GET['accion'])) ? $_GET['accion'] : $accion;
if(isset($_SESSION['user_session'])){
	include_once(HEADERADMIN);
	switch($accion){
		case 'listClientes':
			include_once("Clientes/listClientes.php");
		break;
		
		case 'listEmpleados':
			include_once("Empleados/listEmpleados.php");
		break;
		
		case 'addEmpleado':
			include_once("Empleados/datosEmpleado.php");
		break;
		
		case 'deleteEmpleado':
			include_once("Empleados/deleteEmpleado.php");
		break;
		
		case 'editEmpleado':
			include_once("Empleados/editEmpleado.php");
		break;
		
		
		case 'listVentas':
			include_once("Ventas/listVentas.php");
		break;
		
		case 'datosVenta':
			include_once("Ventas/datosVenta.php");
		break;
		
		case 'addVenta':
			include_once("Ventas/addVenta.php");
		break;
		
		case 'deleteVenta':
			include_once("Ventas/deleteVenta.php");
		break;
		
		case 'editVenta':
			include_once("Ventas/editVenta.php");
		break;
		
		
		case 'listCompras':
			include_once("Compras/listCompras.php");
		break;
		
		case 'deleteCompra':
			include_once("Compras/deleteCompra.php");
		break;
		
		
		case 'listRentas':
			include_once("Rentas/listRentas.php");
		break;
		
		case 'deleteRenta':
			include_once("Rentas/deleteRenta.php");
		break;
		
		
		case 'listCarros':
			include_once("Carros/listCarros.php");
		break;
		
		case 'imgCarro':
			include_once("carros/datosImagenCarro.php");
		break;
		
		case 'addCarro':
			include_once("Carros/datosCarro.php");
		break;
		
		case 'deleteCarro':
			include_once("Carros/deleteCarro.php");
		break;
		
		case 'editCarro':
			include_once("Carros/editCarro.php");
		break;
		
		case 'listPartes':
			include_once("Partes/listPartes.php");
		break;
		
		case 'imgPartes':
			include_once("Partes/datosImagenPartes.php");
		break;
		
		case 'addPartes':
			include_once("Partes/datosPartes.php");
		break;
		
		case 'deletePartes':
			include_once("Partes/deletePartes.php");
		break;
		
		case 'editPartes':
			include_once("Partes/editPartes.php");
		break;
		
		case 'listCDescuentos':
			include_once("CDescuentos/listCDescuentos.php");
		break;
		
		case 'addCDescuentos':
			include_once("CDescuentos/datosCDescuentos.php");
		break;
		
		case 'deleteCDescuentos':
			include_once("CDescuentos/deleteCDescuentos.php");
		break;
		
		case 'editCDescuentos':
			include_once("CDescuentos/editCDescuentos.php");
		break;
		
		case 'listMembresia':
			include_once("Membresía/listMembresia.php");
		break;
		
		case 'deleteMembresia':
			include_once("Membresía/deleteMembresia.php");
		break;
		
		case 'logout':
			include_once("Login/logout.php");
		break;
		
		default:
			include_once("home.php");
		break;
	}
	
	include_once(FOOTERADMIN);
}else
include_once("Login/formlogin.php");
?>
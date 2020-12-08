<?php
//Conexion con la BD
require_once('configuracion.php');
include("Clases/MySqli.php");
//Variables que toman el ID seleccionado a eliminar y toman la respuesta si o no de la alerta para confirmar la eliminacion del registro
$ID_Renta = $_GET["ID_Renta"];
$respuesta = (isset($_GET['respuesta'])) ? $_GET['accion'] : null;

//print_r($_REQUEST);
//ECHO $accion = $_POST["accion"];

require_once(HEADERADMIN);
//dependiendo de la respuesta el condicional toma una decision
if(!$respuesta){
?>	
<div id="mensaje">
    <center>
	<!--dependiendo de la respuesta el condicional toma una decision y los envia al archivo deleteCliente&ID_Cliente o a la lista de registros-->
		<h2 class="title">Est&aacute;s seguro de eliminar el Registro de venta RIALEMAR?</h2>
			<br><input type=button value="SI" onclick=self.location="<?=ROOTURL?>?accion=deleteRenta&ID_Renta=<?=$ID_Renta?>&respuesta=si">
			<input type=button value="NO" onclick=self.location="<?=ROOTURL?>?accion=listRentas">
	</center>
</div>
<?php } ?>
<?php
	if($respuesta){
//Aqui se elimina todo dato de la tabla "rentas" en donde el ID_Cliente sea igual a la variable que ya contiene al ID seleccionado 
		$query = "DELETE FROM rentas WHERE ID_Renta = $ID_Renta";
		//mensaje de fallo o error con la conexion de BD
		if (!$result = mysqli_query($con, $query)) {
		        echo '<div id="mensaje">
		        			<center>
							<h2 class="title">Error al intentar eliminar el Registro de Renta RIALEMAR</h2>'.
							mysqli_error($con)
							.'<br><input type=button value="Ir a la lista de Rentas" onclick=self.location="'.ROOTURL.'?accion=listRentas">
							</center>
						</div>';
		}else{
			//Mensaje de concluido, eliminacion completada!
    	echo '<div id="mensaje"><center>
    			<h2>Registro de renta RIALEMAR eliminado</h2>
    			<br>
    			<input type=button value="Ir a la lista de Rentas" onclick=self.location="'.ROOTURL.'?accion=listRentas" class="btn"> 
    			</center>
    		</div>';
    	}
    }
require_once(FOOTERADMIN);
?>
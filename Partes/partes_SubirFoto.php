<?php
include "../configuracion.php";

require_once(HEADERADMIN);

//print_r($_POST);
if (isset($_POST['btnRegistrar'])) {
    $uploadfile = $_FILES["uploadImage"]["tmp_name"];//variable donde se guarda el archivo tipo imagen
    $folderRuta = "../Images/";
	$tipoImagen = explode("/",$_FILES["uploadImage"]["type"]);//variable donde se guarda el tipo de imagen
	$ID_Parte = $_REQUEST['IDPartesFoto'];//variable donde se guarda el ID del balón
	$nombreImagen = $ID_Parte.".".$tipoImagen[1]; //se renombra la imagen con el ID del balón para evitar que se reemplacen imagenes con el mismo nombre
    //var_dump($_REQUEST);
    if (! is_writable($folderRuta) || ! is_dir($folderRuta)) { //Si ocurre algún error se muestra el mensaje para regresar a la lista
        echo "error";
		 echo '<div id="mensaje">
					<center>
					<h2 class="title">Error al intentar Registrar la Parte</h2>'.
					mysqli_error($con)
					.'<br><input type=button value="Ir a la lista la Parte" onclick=self.location="'.ROOTURL.'?accion=listPartes">
					</center>
				</div>';
        //exit();
    }
	
	$query = "SELECT ID_Parte, Imagen FROM partes WHERE ID_Parte = '$ID_Parte'"; //se realiza la consulta para verificar si hay una imagen borrarla y guardar la nueva imagen
	
	if (!$result = mysqli_query($con, $query))
        exit(mysqli_error($con));
    
	if(mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			if(file_exists(DOCROOT."partes/fotos/".$row['Imagen']) && $row['Imagen']<>""){
				unlink(DOCROOT."partes/fotos/".$row['Imagen'])or die("Couldn't delete file");//unlink es la instrucción para borrar archivos
			}
		}
	}	
	
    if (move_uploaded_file($_FILES["uploadImage"]["tmp_name"], $folderRuta . $nombreImagen)) {//se guarda la imagen seleciona
        echo '<img src="' . ROOTURL."partes/" . $folderRuta . "" . $nombreImagen . '">';//se muestra la imagen guardada
		
		$query = "UPDATE partes SET Imagen='$nombreImagen' WHERE ID_Parte = '$ID_Parte'";//se guarda el nombre de la imagen
		if (!$result = mysqli_query($con, $query)) {
			exit(mysqli_error($con));
		}
		
        //exit();
    }
	
	echo '<div id="mensaje"><center>
    			<h2>Imagen Guardada!!!</h2>
    			<br>
    			<input type=button value="Ir a la lista de Partes" onclick=self.location="'.ROOTURL.'?accion=listPartes" class="btn"> 
    			</center>
    		</div>';
    	
}
require_once(FOOTERADMIN);
?>
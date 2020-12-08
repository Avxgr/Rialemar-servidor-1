<?php
	require_once '../configuracion.php';
	$db_host = DBHOST;
	$db_name = DB;
	$db_user = DBUSER;
	$db_pass = DBPASSWD;
	if(isset($_POST['btn-login'])){
		$user = strtoupper(trim($_POST['user']));
		$password = trim($_POST['password']);
			try{		                                  
				//Aquí iría el puerto donde se encuentra el servidor
				 //local (port=puerto);
				//|
				$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
				$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
				$stmt = $db_con->prepare("SELECT * FROM empleados WHERE User='".$user."'");
				$stmt->execute();
				//print_r($stmt);
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				$count = $stmt->rowCount();
				//print_r($row);
				if($row['Password'] == $password){		
					$boleana=true;
					echo $boleana; // log in
					$_SESSION['user_session'] = $row['ID_Empleado'];
					$_SESSION['tipo_usuario'] = (int)$row['TipoUsuario'];
 				}else{
					echo "Usuario no registrado o contrase&ntilde;a incorrecta"; 
				}
			}
			catch(PDOException $e){
			echo $e->getMessage();
			}
	}
?>
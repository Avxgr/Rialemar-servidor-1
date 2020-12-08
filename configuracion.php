<?php
 //Aqui se definen variables globales que van a ser usadas en cualquier parte del proyecto

	if($_SERVER['SERVER_NAME'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] == 'localhost'){
		
		//Esta variable global se guarda la ruta del proyecto para que pueda ser visto en el navegador
		define('ROOTURL', 'http://'.$_SERVER['SERVER_NAME'].'/Rialemar-servidor/');
		//En esta variable global se guarda la ruta del proyecto donde estan guardados los archivos
		define('DOCROOT', 'C:/xampp/htdocs/Rialemar-servidor/');  //xamp/htdocs
		//Esta variable global guarda el nombre de la pagina
		define('SITENAME', 'RIALEMAR.com');
		//Esta variable guarda el nombre del autor 
		define('AUTHOR', 'vaquera lopez alejandro');
		//Esta variable global guarda la ruta de los archivos de estilo
		define('CSS', ROOTURL.'CSS/');
		//Esta variable global guarda la ruta de las imagenes generales del proyecto
		define('IMAGES',ROOTURL.'Images/');
		//Esta variable global guarda la ruta de los archivos javascript
		define('JS',ROOTURL.'JS/');
		//Esta variable muestra los errores de php en el navegador
		define('DEBUG', true);
		//Esta variable guarda la ruta del archivo header
		define('HEADERADMIN', DOCROOT.'header.php');
		//Esta variable global guarda la ruta del archivo footer
		define('FOOTERADMIN', DOCROOT.'footer.php');
		
		//Estas variables globales guardan los datos para la conexion con la BD
		define('DBHOST','localhost');
		define('DBUSER','root');
		define('DBPASSWD','');
		define('DB','rialemar');
		
	}
	//Esta instruccion verifica que exista e incluye la carpeta "clases" a la carpeta del proyecto
	ini_set("include_path",DOCROOT.'Clases');
	//Esta instruccion despliega los errores en el navegador
	ini_set("display_errors","On");
	//Esta instruccion ayuda a agregar o anexar la conexion de la bd donde se requiera en cualquier parte del proyecto
	include("MySqli.php");
	//Esta instruccion ayuda a agregar las funcionalidades del proyecto donde se requiera
	require_once "funciones.php";
	
	session_start();
?>
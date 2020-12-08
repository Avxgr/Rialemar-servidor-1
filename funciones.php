<?php
//Esta funcion obtiene la lista de todos los registros guardados en el archivo Alumnos.sql
function getListaVentas()
{			//aqui se agrega la conexion a la bd
		include("MySqli.php");
		//aqui se agrega la sentencia de consulta para obtener la lista de los registros
		$query = "SELECT * FROM ventas ORDER BY ID_Venta ASC";
		//Se verifica la conexion de la bd y se regresa el resultado de la sentencia
		if(!$result = mysqli_query($con, $query))
		{
			exit(mysqli_error($con));
		}
		//con este arreglo se guardan  los datos de cada registro 
		$lista = array();
		//aqui se verifica que existan registros en el archivo consultado(Alumnos)
		if(mysqli_num_rows($result)>0)
		{		//Aqui se lee cada registro con el ciclo
			while($row = mysqli_fetch_assoc($result))
			{	//aqui se va asignando cada dato(campo) en el arreglo
				$lista[] = array(
							'ID_Venta'=> $row['ID_Venta'],
							'ID_Cliente'=> $row['ID_Cliente'],
							'ID_Empleado'=> $row['ID_Empleado'],
							'ID_Producto'=> $row['ID_Producto'],
							'Producto'=> $row['Producto'],
							'Monto'=> $row['Monto'],
							'Fecha_Venta'=> $row['Fecha_Venta'],
							'Movimiento'=> $row['Movimiento']
							);
			}
		}
		//regresa la lista con los registros del archivo Alumnos
		return $lista;
}

function getDatosVenta($ID_Venta){
	include("MySqli.php");
	$query = "SELECT ID_Venta, ID_Cliente, ID_Empleado, ID_Carro, Monto, Fecha_Venta, Movimiento FROM ventas WHERE ID_Venta=$ID_Venta";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $lista = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $lista[] = array(
				'ID_Venta' => $row['ID_Venta'],
				'ID_Cliente' => $row['ID_Cliente'],
				'ID_Empleado' => $row['ID_Empleado'],	       
				'ID_Carro' => $row['ID_Carro'],
				'Monto' => $row['Monto'],
				'Fecha_Venta' => $row['Fecha_Venta'],
				'Movimiento' => $row['Movimiento']
				);
        }
    }
	return $lista;
}

//Esta funcion obtiene la lista de todos los registros guardados en el archivo empleados.sql
function getListaEmpleados()
{			//aqui se agrega la conexion a la bd
		include("MySqli.php");
		//aqui se agrega la sentencia de consulta para obtener la lista de los registros
		$query = "SELECT * FROM empleados ORDER BY ID_Empleado ASC";
		//Se verifica la conexion de la bd y se regresa el resultado de la sentencia
		if(!$result = mysqli_query($con, $query))
		{
			exit(mysqli_error($con));
		}
		//con este arreglo se guardan los datos de cada registro 
		$lista = array();
		//aqui se verifica que existan registros en el archivo consultado(Alumnos)
		if(mysqli_num_rows($result)>0){		//Aqui se lee cada registro con el ciclo
			while($row = mysqli_fetch_assoc($result)){	//aqui se va asignando cada dato(campo) en el arreglo
				$lista[] = array(
					'ID_Empleado'=> $row['ID_Empleado'],
					'Nombre'=> $row['Nombre'],
					'APaterno'=> $row['APaterno'],
					'AMaterno'=> $row['AMaterno'],
					'Edad'=> $row['Edad'],
					'Telefono'=> $row['Telefono'],
					'Correo'=> $row['Correo'],
					'Fecha_Inicio'=> $row['Fecha_Inicio'],
					'Domicilio'=> $row['Domicilio'],
					'User'=> $row['User'],
					'Password'=> $row['Password'],
					'TipoUsuario'=> $row['TipoUsuario']
				);
			}
		}
		//regresa la lista con los registros del archivo Empleados
		return $lista;
}

function getDatosEmpleado($ID_Empleado){
	include("MySqli.php");
	$query = "SELECT * FROM empleados WHERE ID_Empleado=$ID_Empleado";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $lista = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $lista[] = array(
				'ID_Empleado' => $row['ID_Empleado'],
				'Nombre' => $row['Nombre'],
				'APaterno' => $row['APaterno'],
				'AMaterno' => $row['AMaterno'],
				'Edad' => $row['Edad'],
				'Telefono' => $row['Telefono'],
				'Correo' => $row['Correo'],
				'Fecha_Inicio' => $row['Fecha_Inicio'],
				'Domicilio' => $row['Domicilio'],
				'User' => $row['User'],
				'Password' => $row['Password'],
				'TipoUsuario' => $row['TipoUsuario'],
				);
        }
    }
	return $lista;
}





//Esta funcion obtiene la lista de todos los registros guardados en el archivo clientes.sql
function getListaClientes()
{			//aqui se agrega la conexion a la bd
		include("MySqli.php");
		//aqui se agrega la sentencia de consulta para obtener la lista de los registros
		$query = "SELECT ID_Cliente, Nombre, APaterno, AMaterno, Edad, Telefono, Correo FROM clientes ORDER BY ID_Cliente ASC";
		//Se verifica la conexion de la bd y se regresa el resultado de la sentencia
		if(!$result = mysqli_query($con, $query))
		{
			exit(mysqli_error($con));
		}
		//con este arreglo se guardan los datos de cada registro 
		$lista = array();
		//aqui se verifica que existan registros en el archivo consultado(Clientes)
		if(mysqli_num_rows($result)>0)
		{		//Aqui se lee cada registro con el ciclo
			while($row = mysqli_fetch_assoc($result))
			{	//aqui se va asignando cada dato(campo) en el arreglo
				$lista[] = array(
				'ID_Cliente'=> $row['ID_Cliente'],
				'Nombre'=> $row['Nombre'],
				'APaterno'=> $row['APaterno'],
				'AMaterno'=> $row['AMaterno'],
				'Edad'=> $row['Edad'],
				'Telefono'=> $row['Telefono'],
				'Correo'=> $row['Correo'],
				);
			}
		}
		//regresa la lista con los registros del archivo Clientes
		return $lista;
}

function getDatosCliente($ID_Cliente){
	include("MySqli.php");
	$query = "SELECT ID_Cliente, Nombre, APaterno,AMaterno,Edad,Telefono,Correo FROM clientes WHERE ID_Cliente=$ID_Cliente";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $lista = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $lista[] = array(
				'ID_Cliente' => $row['ID_Cliente'],
				'Nombre' => $row['Nombre'],
				'APaterno' => $row['APaterno'],
				'AMaterno' => $row['AMaterno'],
				'Edad' => $row['Edad'],
				'Telefono' => $row['Telefono'],
				'Correo' => $row['Correo'],
				);
        }
    }
	return $lista;
}

//Esta funcion obtiene la lista de todos los registros guardados en el archivo carros.sql
function getListaCarros()
{			//aqui se agrega la conexion a la bd
		include("MySqli.php");
		
		$folderRuta = "Images/";
		//aqui se agrega la sentencia de consulta para obtener la lista de los registros
		$query = "SELECT ID_Carro, Marca_Carro, Modelo_Carro, Color_Carro, Tipo_Transmision, Tipo_Traccion, Fecha_Salida, Precio_Carro, Porcentaje_Descuento_Membresia, Imagen FROM carros ORDER BY ID_Carro ASC";
		//Se verifica la conexion de la bd y se regresa el resultado de la sentencia
		if(!$result = mysqli_query($con, $query))
		{
			exit(mysqli_error($con));
		}
		//con este arreglo se guardan los datos de cada registro 
		$lista = array();
		//aqui se verifica que existan registros en el archivo consultado(Alumnos)
		if(mysqli_num_rows($result)>0)
		{		//Aqui se lee cada registro con el ciclo
			while($row = mysqli_fetch_assoc($result))
			{	
			if($row['Imagen']=="")
        		$Imagen = "0.png";
        	else
        		$Imagen = $row['Imagen'];
			//aqui se va asignando cada dato(campo) en el arreglo
				$lista[] = array(
				'ID_Carro'=> $row['ID_Carro'],
				'Marca_Carro'=> $row['Marca_Carro'],
				'Modelo_Carro'=> $row['Modelo_Carro'],
				'Color_Carro'=> $row['Color_Carro'],
				'Tipo_Transmision'=> $row['Tipo_Transmision'],
				'Tipo_Traccion'=> $row['Tipo_Traccion'],
				'Fecha_Salida'=> $row['Fecha_Salida'],
				'Precio_Carro'=> $row['Precio_Carro'],
				'Porcentaje_Descuento_Membresia'=> $row['Porcentaje_Descuento_Membresia'],
				'Imagen' => $folderRuta.$Imagen
				);
			}
		}
		//regresa la lista con los registros del archivo Carros
		return $lista;
}

function getDatosCarro($ID_Carro){
	include("MySqli.php");
	$folderRuta = "Images/";
	$query = "SELECT * FROM carros WHERE ID_Carro=$ID_Carro";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $lista = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
			
			if($row['Imagen']=="")
        		$Imagen = "0.png";
        	else
        		$Imagen = $row['Imagen'];

			
			
            $lista[] = array(
				'ID_Carro' => $row['ID_Carro'],
				'Marca_Carro' => $row['Marca_Carro'],
				'Modelo_Carro' => $row['Modelo_Carro'],
				'Color_Carro' => $row['Color_Carro'],
				'Tipo_Transmision' => $row['Tipo_Transmision'],
				'Tipo_Traccion' => $row['Tipo_Traccion'],
				'Fecha_Salida' => $row['Fecha_Salida'],
				'Precio_Carro' => $row['Precio_Carro'],
				'Porcentaje_Descuento_Membresia' => $row['Porcentaje_Descuento_Membresia'],
				'Imagen' => $folderRuta.$Imagen
				);
        }
    }
	return $lista;
}

//Esta funcion obtiene la lista de todos los registros guardados en el archivo compras.sql
function getListaCompras()
{			//aqui se agrega la conexion a la bd
		include("MySqli.php");
		//aqui se agrega la sentencia de consulta para obtener la lista de los registros
		$query = "SELECT * FROM compras ORDER BY ID_Compra ASC";
		//Se verifica la conexion de la bd y se regresa el resultado de la sentencia
		if(!$result = mysqli_query($con, $query))
		{
			exit(mysqli_error($con));
		}
		//con este arreglo se guardan los datos de cada registro 
		$lista = array();
		//aqui se verifica que existan registros en el archivo consultado(Alumnos)
		if(mysqli_num_rows($result)>0)
		{		//Aqui se lee cada registro con el ciclo
			while($row = mysqli_fetch_assoc($result))
			{	//aqui se va asignando cada dato(campo) en el arreglo
				$lista[] = array('ID_Compra'=> $row['ID_Compra'],
				'ID_Cliente'=> $row['ID_Cliente'],
				'ID_Producto'=> $row['ID_Producto'],
				'Producto'=> $row['Producto'],
				'Fecha_Compra'=> $row['Fecha_Compra'],
				'Monto'=> $row['Monto'],
				'Estado'=> $row['Estado']
				);
			}
		}
		//regresa la lista con los registros del archivo Compras
		return $lista;
}

function getDatosCompra($ID_Compra){
	include("MySqli.php");
	$query = "SELECT * FROM compras WHERE ID_Compra=$ID_Compra";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $lista = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $lista[] = array('ID_Compra'=> $row['ID_Compra'],
				'ID_Cliente'=> $row['ID_Cliente'],
				'ID_Producto'=> $row['ID_Producto'],
				'Producto'=> $row['Producto'],
				'Fecha_Compra'=> $row['Fecha_Compra'],
				'Monto'=> $row['Monto'],
				'Estado'=> $row['Estado']
				);
        }
    }
	return $lista;
}

//Esta funcion obtiene la lista de todos los registros guardados en el archivo compras.sql
function getListaRentas()
{			//aqui se agrega la conexion a la bd
		include("MySqli.php");
		//aqui se agrega la sentencia de consulta para obtener la lista de los registros
		$query = "SELECT * FROM rentas ORDER BY ID_Renta ASC";
		//Se verifica la conexion de la bd y se regresa el resultado de la sentencia
		if(!$result = mysqli_query($con, $query))
		{
			exit(mysqli_error($con));
		}
		//con este arreglo se guardan los datos de cada registro 
		$lista = array();
		//aqui se verifica que existan registros en el archivo consultado(Alumnos)
		if(mysqli_num_rows($result)>0)
		{		//Aqui se lee cada registro con el ciclo
			while($row = mysqli_fetch_assoc($result))
			{	//aqui se va asignando cada dato(campo) en el arreglo
				$lista[] = array(
				'ID_Renta'=> $row['ID_Renta'],
				'ID_Cliente'=> $row['ID_Cliente'],
				'ID_Carro'=> $row['ID_Carro'],
				'Fecha_Renta'=> $row['Fecha_Renta'],
				'Duracion'=> $row['Duracion'],
				'Monto'=> $row['Monto'],
				'Estado'=> $row['Estado']
				);
			}
		}
		//regresa la lista con los registros del archivo Compras
		return $lista;
}

function getDatosRenta($ID_Renta){
	include("MySqli.php");
	$query = "SELECT * FROM rentas WHERE ID_Renta=$ID_Renta";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $lista = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $lista[] = array(
				'ID_Renta'=> $row['ID_Renta'],
				'ID_Cliente'=> $row['ID_Cliente'],
				'ID_Carro'=> $row['ID_Carro'],
				'Fecha_Renta'=> $row['Fecha_Renta'],
				'Duracion'=> $row['Duracion'],
				'Monto'=> $row['Monto'],
				'Estado'=> $row['Estado']
			);
        }
    }
	return $lista;
}

function getDatosEmpleadoLogin($ID_Empleado){
	include("MySqli.php");
	$nombre = "";
	$query = "SELECT Nombre, APaterno, AMaterno FROM empleados WHERE ID_Empleado=$ID_Empleado";
    if (!$result = mysqli_query($con, $query)){
        exit(mysqli_error($con));
    }
    $lista = array();
    if(mysqli_num_rows($result) > 0) 
	{
        while ($row = mysqli_fetch_assoc($result)) 
		{
            $nombre = $row['Nombre'].$row['APaterno'].$row['AMaterno'];
        }
    }
	return $nombre;
}

//Esta funcion obtiene la lista de todos los registros guardados en el archivo partes.sql
function getListaPartes()
{			//aqui se agrega la conexion a la bd
		include("MySqli.php");
		
		$folderRuta = "Images/";
		//aqui se agrega la sentencia de consulta para obtener la lista de los registros
		$query = "SELECT * FROM partes ORDER BY ID_Parte ASC";
		//Se verifica la conexion de la bd y se regresa el resultado de la sentencia
		if(!$result = mysqli_query($con, $query))
		{
			exit(mysqli_error($con));
		}
		//con este arreglo se guardan los datos de cada registro 
		$lista = array();
		//aqui se verifica que existan registros en el archivo consultado(Alumnos)
		if(mysqli_num_rows($result)>0)
		{		//Aqui se lee cada registro con el ciclo
			while($row = mysqli_fetch_assoc($result))
			{	
			if($row['Imagen']=="")
        		$Imagen = "0.png";
        	else
        		$Imagen = $row['Imagen'];
			//aqui se va asignando cada dato(campo) en el arreglo
				$lista[] = array(
				'ID_Parte'=> $row['ID_Parte'],
				'Nombre_Parte'=> $row['Nombre_Parte'],
				'Modelo_Parte'=> $row['Modelo_Parte'],
				'Marca_Parte'=> $row['Marca_Parte'],
				'Precio_Parte'=> $row['Precio_Parte'],
				'Porcentaje_Descuento_Membresia'=> $row['Porcentaje_Descuento_Membresia'],
				'Imagen' => $folderRuta.$Imagen
				);
			}
		}
		//regresa la lista con los registros del archivo Partes
		return $lista;
}

function getDatosPartes($ID_Parte){
	include("MySqli.php");
	$folderRuta = "Images/";
	$query = "SELECT * FROM partes WHERE ID_Parte=$ID_Parte";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $lista = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
			
			if($row['Imagen']=="")
        		$Imagen = "0.png";
        	else
        		$Imagen = $row['Imagen'];
            $lista[] = array(
				'ID_Parte'=> $row['ID_Parte'],
				'Nombre_Parte'=> $row['Nombre_Parte'],
				'Modelo_Parte'=> $row['Modelo_Parte'],
				'Marca_Parte'=> $row['Marca_Parte'],
				'Precio_Parte'=> $row['Precio_Parte'],
				'Porcentaje_Descuento_Membresia'=> $row['Porcentaje_Descuento_Membresia'],
				'Imagen' => $folderRuta.$Imagen
				);
        }
    }
	return $lista;
}

function getDatosUsuarioLogin($ID_Cliente){
	include("MySqli.php");
	$nombre = "";
	$query = "SELECT Nombre, APaterno, AMaterno FROM clientes WHERE ID_Cliente=$ID_Cliente";
    if (!$result = mysqli_query($con, $query)){
        exit(mysqli_error($con));
    }
    $lista = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $nombre = $row['Nombre'].$row['APaterno'].$row['AMaterno'];
        }
    }
	return $nombre;
}

function getListaCDescuentos()
{			//aqui se agrega la conexion a la bd
		include("MySqli.php");
		//aqui se agrega la sentencia de consulta para obtener la lista de los registros
		$query = "SELECT ID_Codigo, Codigo, Porcentaje_Descuento, Estado, Categoria FROM codigos_descuentos ORDER BY ID_Codigo ASC";
		//Se verifica la conexion de la bd y se regresa el resultado de la sentencia
		if(!$result = mysqli_query($con, $query))
		{
			exit(mysqli_error($con));
		}
		//con este arreglo se guardan  los datos de cada registro 
		$lista = array();
		//aqui se verifica que existan registros en el archivo consultado(Descuentos)
		if(mysqli_num_rows($result)>0)
		{		//Aqui se lee cada registro con el ciclo
			while($row = mysqli_fetch_assoc($result))
			{	//aqui se va asignando cada dato(campo) en el arreglo
				$lista[] = array(
							'ID_Codigo'=> $row['ID_Codigo'],
							'Codigo'=> $row['Codigo'],
							'Porcentaje_Descuento'=> $row['Porcentaje_Descuento'],
							'Estado'=> $row['Estado'],
							'Categoria'=> $row['Categoria'],
							);
			}
		}
		//regresa la lista con los registros del archivo Descuentos
		return $lista;
}


function getDatosCDescuentos($ID_Codigo){
	include("MySqli.php");
	$query = "SELECT ID_Codigo, Codigo, Porcentaje_Descuento, Estado, Categoria FROM codigos_descuentos WHERE ID_Codigo=$ID_Codigo";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $lista = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $lista[] = array(
				'ID_Codigo' => $row['ID_Codigo'],
				'Codigo' => $row['Codigo'],
				'Porcentaje_Descuento' => $row['Porcentaje_Descuento'],	       
				'Estado' => $row['Estado'],
				'Categoria' => $row['Categoria'],
				);
        }
    }
	return $lista;
}

function getListaMembresia(){			
	//aqui se agrega la conexion a la bd
	include("MySqli.php");
	//aqui se agrega la sentencia de consulta para obtener la lista de los registros
	$query = "SELECT ID_Membresia, ID_Cliente, Fecha_Inicio, Fecha_Fin FROM membresia ORDER BY ID_Membresia ASC";
	//Se verifica la conexion de la bd y se regresa el resultado de la sentencia
	if(!$result = mysqli_query($con, $query))
	{
		exit(mysqli_error($con));
	}
	//con este arreglo se guardan  los datos de cada registro 
	$lista = array();
	//aqui se verifica que existan registros en el archivo consultado(Membresias)
	if(mysqli_num_rows($result)>0)
	{		//Aqui se lee cada registro con el ciclo
		while($row = mysqli_fetch_assoc($result))
		{	//aqui se va asignando cada dato(campo) en el arreglo
			$lista[] = array(
						'ID_Membresia'=> $row['ID_Membresia'],
						'ID_Cliente'=> $row['ID_Cliente'],
						'Fecha_Inicio'=> $row['Fecha_Inicio'],
						'Fecha_Fin'=> $row['Fecha_Fin'],
						);
		}
	}
	//regresa la lista con los registros del archivo Membresias
	return $lista;
}
?>
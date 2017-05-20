<?php 
include("conexion.php");
		
		if(
		isset($_POST['nombre']) && !empty($_POST['nombre'])&&
		isset($_POST['apellido']) && !empty($_POST['apellido'])&&
		isset($_POST['direccion']) && !empty($_POST['direccion'])&&
		isset($_POST['telefono']) && !empty($_POST['telefono'])&&
		isset($_POST['edad']) && !empty($_POST['edad'])&&
		isset($_POST['id_rol']) && !empty($_POST['id_rol']))
	{
			$con=mysql_connect($host,$user,$pw) or die("Problemas al conectar");
			mysql_select_db($db,$con) or die("Problemas al cerrar conexion");

				mysql_query("insert into Trabajadores(nombre,apellido,direccion,telefono,edad,id_rol)values('$_POST[nombre]','$_POST[apellido]','$_POST[direccion]','$_POST[telefono]','$_POST[edad]','$_POST[id_rol]')",$con);

				echo " 	<script type=\"text/javascript\">alert('Datos Insertados'); window.location='regtrabajador.php';</script>";	
	}
	else{
			echo " 	<script type=\"text/javascript\">alert('Llena todos los campos'); window.location='regtrabajador.php';</script>";	
	}

	 ?>	
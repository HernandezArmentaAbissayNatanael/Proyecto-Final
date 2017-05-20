<?php 
include("conexion.php");
		if(isset($_POST['nombre']) && !empty($_POST['nombre'])&&
		isset($_POST['direccion']) && !empty($_POST['direccion'])&&
		isset($_POST['telefono']) && !empty($_POST['telefono']))
	{
			$con=mysql_connect($host,$user,$pw) or die("Problemas al conectar");
			mysql_select_db($db,$con) or die("Problemas al cerrar conexion");

				mysql_query("insert into cliente (nombre,direccion,telefono)values('$_POST[nombre]','$_POST[direccion]','$_POST[telefono]')",$con);
				echo " 	<script type=\"text/javascript\">alert('Datos Insertados'); window.location='regcliente.php';</script>";	
	}
	else{
						echo " 	<script type=\"text/javascript\">alert('Llena todos los Datos'); window.location='regcliente.php';</script>";	

	}
	

	 ?>	
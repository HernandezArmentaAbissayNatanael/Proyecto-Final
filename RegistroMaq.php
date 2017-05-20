<?php 
include("conexion.php");
		
		if(isset($_POST['nombre']) && !empty($_POST['nombre'])&&
		isset($_POST['cantidad']) && !empty($_POST['cantidad'])&&
		isset($_POST['tipo']) && !empty($_POST['tipo']))
	{
			$con=mysql_connect($host,$user,$pw) or die("Problemas al conectar");
			mysql_select_db($db,$con) or die("Problemas al cerrar conexion");

				mysql_query("insert into maquinaria (nombre,cantidad,id_tipo)values('$_POST[nombre]','$_POST[cantidad]','$_POST[tipo]')",$con);
				echo " 	<script type=\"text/javascript\">alert('Datos Insertados'); window.location='regmaquinaria.php';</script>";
	}
	else{
						echo " 	<script type=\"text/javascript\">alert('Llenar todos los campos'); window.location='regmaquinaria.php';</script>";

	}
	 ?>		

<!DOCTYPE HTML>
<html>
	<head>
		<title>GR Ingenier&iacute;a y Construcci&oacute;n</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
         <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="shortcut icon" type="image/x-icon" href="images/icono.png">
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>INGENIERIA</strong> y CONSTRUCCION</a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>
							       <section>
                                       <center>
                                       	<h3>Consultar trabajador</h3>
											<!--Inicia codigo de connsulta-->
											<div  style=" margin:2% 3% 3% 3%; text-align: center;">

											<table class="table table-bordered"  border="5px" style=" border-collapse: separate; border-spacing: 2px; background-image: url(img/fondo.jpg); bottom left repeat-x; color:black;">
												<thead>
													<th style="background-image: url(img/images.jpg); text-align: center;">Nombre</th>
													<th style="background-image: url(img/images.jpg); text-align: center;">Apellido</th>
													<th style="background-image: url(img/images.jpg); text-align: center;">Direccion</th>
													<th style="background-image: url(img/images.jpg); text-align: center;">Telefono</th>
													<th style="background-image: url(img/images.jpg); text-align: center;">Edad
													</th>
													<th style="background-image: url(img/images.jpg); text-align: center;">Rol
													</th>
												</thead>
											
											<?php 
												include ('conexion.php');
												$con= mysql_connect($host,$user,$pw) or die("Problemas al conectar");
												mysql_select_db($db,$con) or die("Problemas al conectar bd");

												$result=mysql_query("select Trabajadores.nombre as NomTrabajador,Trabajadores.apellido,Trabajadores.direccion,
													Trabajadores.telefono,Trabajadores.edad,rol2.nombre as Rol
													from Trabajadores inner join rol2 
													on rol2.id_rol=Trabajadores.id_rol");
												//$result = mysql_query() or die("Error en: $result: " . mysql_error());
												while($registro=mysql_fetch_array($result)){
													echo "
														<tr style='font-size:15px;'>
															<td>".$registro['NomTrabajador']."</td>
															<td>".$registro['apellido']."</td>
															<td>".$registro['direccion']."</td>
															<td>".$registro['telefono']."</td>
															<td>".$registro['edad']."</td>
															<td>".$registro['Rol']."</td>
														</tr>
													";
												}
											?>
											
											 </table>

										 </div>	
											<!--Termina codigo de consulta-->		
												
                                       </center>
                            </section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Buscar" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.html">INICIO</a></li>
										<li><a href="noticias.html">NOTICIAS</a></li>
										<li><a href="somos.html">QUIENES SOMOS</a></li>
										<li>
											<span class="opener">REGISTROS</span>
											<ul>
												<li><a href="regcliente.php">Registrar Cliente</a></li>
												<li><a href="regmaquinaria.php">Registrar Maquinaria </a></li>
												<li><a href="regtrabajador.php">Registrar Trabajador</a></li>
												
											</ul>
										</li>
                                        <li><a href="consultar.php">CONSULTAS</a></li>
										
								
								    </ul>
								</nav>
							<!-- Section -->
								<section>
									<header class="major">
										<h2>Proyecto Actual</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/proac.png" alt="" /></a>
											<p>Construcci&oacute;n de un m&oacute;dulo en sistema tradicional en estructura U&#45;2C,  con cimentaci&oacute;n de concreto armado,en planta baja, conformado por escaleras,2 aulas adosadas.<br>En planta alta conformado por dos aulas adosadas, patio c&iacute;vico , asta bandera,cocina y comedor.</p>
										</article>
									</div>
									
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Contactanos</h2>
									</header>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">gr-ingenieriaycontruccion@hotmail.com</a></li>
										<li class="fa-phone">(462) 623-6079</li>
										<li class="fa-home">Cerrada Reynosa 402<br />
										Irapuato, Guanajuato</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Todos los Derechos Reservados, Ingenier&iacute;a y Construcci&oacute;n.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
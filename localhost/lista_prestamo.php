﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include("funciones.php");
include("conexion.php");
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Big Business 2.0 by FCT</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.1.js"></script>
<script type="text/javascript">
	$(function() {
		$('#menu > ul').dropotron({
			mode: 'fade',
			globalOffsetY: 11,
			offsetY: -15
		});
	});	
</script>

</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Laboratorio Informatica</a></h1>
		</div>
		<div id="slogan">
			<h2></h2>
		</div>
	</div>
	<div id="menu">
		<?php menu_horizontal(); ?>
		<br class="clearfix" />
	</div>
	<div id="page">
		<div id="content">
		<form action="lista_prestamo.php" method="post">
		  <?php
		
		$query = mysql_query("SELECT * FROM Prestamo where Estado = 'ocupado'");
		$n = mysql_num_rows($query);
		
		if($n > 0)
		{
		echo '<table id="listar_prestamo">
		<tr><td>Articulo</td><td>Encargado</td><td>Solicitante</td><td>Fecha Prestamo</td><td>Estado</td></tr>';
		while ($info = mysql_fetch_array($query))
		{
			echo "<tr><td>$info[Articulo]</td><td>$info[Usuario_Nombre]</td><td>$info[NomSol]</td><td>$info[FechaPre]</td><td>$info[Estado]</td></tr>";
		}
		}
		echo '</table>';
		
		?>
		  </form>
		<div class="box">
		  
		  </div>
			
			<br class="clearfix" />
		</div>
		<br class="clearfix" />
	</div>
	<div id="page-bottom">
		<br class="clearfix" />
	</div>
</div>
<div id="footer">
	Copyright (c) 2012 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.
</div>
</body>
</html>
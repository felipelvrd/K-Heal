<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>k_heal</title>
    <link rel="stylesheet" type="text/css" href="css/KHeal.css">
    <link rel="stylesheet" type="text/css" href="css/PumbleTrap.css">
    
	<script src="javascript/jquery-2.1.1.min.js"></script>
    <script src="javascript/KHeal.js"></script>
    <link rel="stylesheet" type="text/css" href="css/cssBuscador.css">
    <script type="text/javascript" src="javascript/jsBuscador.js"></script>
    <?php 
	include ("paginas/navegacion/header.html");
   	if(empty($_GET["p"]));
   		//include ("paginas/principal/index.php"); 
   	else
   		include ("paginas/".$_GET["p"]."/header.html"); 
   	?>
    
</head>
<body>
<div id="BarraSuperior" class="nav" > 
  <?php include("paginas/navegacion/index.php"); ?>    
</div>

<div id="divFramePrincipal"> 

   <?php 
   if(empty($_GET["p"]))
   	include ("paginas/principal/index.php"); 
   else
   	include ("paginas/".$_GET["p"]."/index.php"); 
   ?>
						
</div>

</body>
</html>

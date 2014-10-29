<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>k_heal</title>
    <link rel="stylesheet" type="text/css" href="css/KHeal.css">
	<script src="javascript/jquery-2.1.1.min.js"></script>
	<script src="javascript/sha256.jquery.debug.js"></script>
    <script src="javascript/KHeal.js"></script>
    <link rel="stylesheet" type="text/css" href="css/cssBuscador.css">
    <script type="text/javascript" src="javascript/jsBuscador.js"></script>
	<link rel="stylesheet" type="text/css" href="css/cajaFlotante.css">
    <script src="javascript/registro.js"></script>
	<script src="javascript/login.js"></script>

</head>
<body>
<div id="BarraSuperior" class="nav" > 
    <?php include("paginas/navegacion.php"); ?>    
</div>

<div id="divFramePrincipal"> 

   <?php 
   if(empty($_GET["p"]))
   	include ("paginas/principal.php"); 
   else
   	include ("paginas/".$_GET["p"].".php"); 
   ?>
						
</div>

</body>
</html>

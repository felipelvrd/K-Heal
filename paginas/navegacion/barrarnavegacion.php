<?php
$funcion = $_POST['funcion'];

	//destruir session
	if($funcion==1){
		session_start();
		$_SESSION = array();
		session_destroy();
	}
	session_start();
	if(isset($_SESSION['idUsuario'])){
		echo '<li><a href="#" onClick="Salir();">Salir</a></li>';
		if($_SESSION['Rol'] == "A")
			echo '<li><a href="?p=Administracion">Administración</a></li>';
		echo $_SESSION['idUsuario'];
		echo '<li><a id="aNotificaciones" href="#"  onClick="Notificaciones();">Notificaciones</a></li>';
		echo '<li><a href="#"  onClick="Navegar("buscador.html");">Inicio</a></li>';
	}
	else{
		echo '<li><a href="#"  onClick="Registrar();"> Registrarse</a></li>';
		echo '<li><a href="#"  onClick="Ingresar();">Ingresar</a></li>';
		echo '<li><a href="#"  onClick="Navegar("buscador.html");">Inicio</a></li>';
	}
?>
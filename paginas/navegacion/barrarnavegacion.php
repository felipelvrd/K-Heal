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
		echo '<li><a id="aNotificaciones" href="#" class="Notif" onClick="Notificaciones();">Notificaciones</a></li>';
		if($_SESSION['Rol'] == "A")
			echo '<li><a href="?p=Mant_Enfermedad">Administración</a></li>';
		echo '<li><a href="#"  onClick="Navegar("buscador.html");">Inicio</a></li>';
	}
	else{
		echo '<li><a href="#"  class="Regis" onClick="Registrar();"> Registrarse</a></li>';
		echo '<li><a href="#"  class="login" onClick="Ingresar();">Ingresar</a></li>';
		echo '<li><a href="#"  onClick="$(location).attr('."'href'".', '."'?p=principal'".');">Inicio</a></li>';
	}
?>
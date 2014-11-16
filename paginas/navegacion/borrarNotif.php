<?php
include_once("../../php/phpClassConexion.php");
@$Id = $_POST['Id'];

$conexion= new DBManager();//Instancia de la Conexion a BD
	if($conexion->Conectar()==true){
		$salida="";
		//Si la consulta produjo resultados
		if($resultado=mysqli_query($conexion->conect,"Update khlnotificaciones set Estado = 'L' where Id = $Id;")){
		}
		else{
			exit;
		}
		$conexion->CerrarConexion();
		echo utf8_encode($salida);
	}

?>
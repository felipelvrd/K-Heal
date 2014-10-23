<?php

include_once("phpClassConexion.php");

$IdUsuario = $_SESSION['idUsuario'];
$IdEnfermedad = $_POST['idEnfermedad'];
$Descripcion = $_POST['descripcion'];
$Fecha = date();

$conexion= new DBManager();//Instancia de la Conexion a BD

if($conexion->Conectar()==true){
	try{	
		//Registro el tratamiento
		if($resultado=mysqli_query($conexion->conect,"INSERT INTO khltratamientos (IdUsuario, IdEnfermedad, Descripcion, Fecha) VALUES ('$IdUsuario', '$IdEnfermedad', '$Descripcion', '$Fecha');")){
			echo "Tratamiento registrado satisfactoriamente";
		}
		else{
			throw new Exception("Ocurrio un error al intentar registrar al tratamiento".mysqli_connect_error());
			exit;
		}
	}catch(Exception $ex){
		echo $ex->getMessage();
	}
	$conexion->CerrarConexion();
}
?>
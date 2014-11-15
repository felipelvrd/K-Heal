<?php

include_once("../../../php/phpClassConexion.php");
session_start();
$TipoEvaluacion = $_POST['TipoEvaluacion'];
$idTratamiento = $_POST['idTratamiento'];
$idUsuario =27;// $_SESSION['idUsuario'];

$conexion= new DBManager();//Instancia de la Conexion a BD

if($conexion->Conectar()==true){
	try{
		//Verifico si el correo ya esta registrado
		if($resultado=mysqli_query($conexion->conect,"Select id from khlevaluacionestratamientos where idTratamiento = $idTratamiento and idUsuario=$idUsuario;"))
			if($resultado->num_rows!=0)
				throw new Exception("El usuario ya esta voto.");
			
		//Registro el usuario
//		echo "INSERT INTO khlevaluacionestratamientos (idUsuario, idTratamiento, TipoEvaluacion) VALUES ($idUsuario,$idTratamiento,'$TipoEvaluacion')";
		if($resultado=mysqli_query($conexion->conect,"INSERT INTO khlevaluacionestratamientos (idUsuario, idTratamiento, TipoEvaluacion) VALUES ($idUsuario,$idTratamiento,'$TipoEvaluacion');")){
			echo "Evaluacion registrada satisfactoriamente";
		}
		else{
			throw new Exception("Ocurrio un error al intentar registrar la evaluacion".mysqli_connect_error());
			exit;
		}
	}catch(Exception $ex){
		echo $ex->getMessage();
	}
	$conexion->CerrarConexion();
}
?>
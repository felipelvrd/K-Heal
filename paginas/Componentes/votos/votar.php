<?php

include_once("../../../php/phpClassConexion.php");
session_start();
$TipoEvaluacion = $_POST['TipoEvaluacion'];
$idTratamiento = $_POST['idTratamiento'];
@$idUsuario = $_SESSION['idUsuario'];

$conexion= new DBManager();//Instancia de la Conexion a BD

if($conexion->Conectar()==true){
	$msg;
	try{
		if(!isset($_SESSION['idUsuario'])){
			throw new Exception("Necesita acceder para poder votar");
		}
		//Verifico si el correo ya esta registrado
		if($resultado=mysqli_query($conexion->conect,"Select id from khlevaluacionestratamientos where idTratamiento = $idTratamiento and idUsuario=$idUsuario;"))
			if($resultado->num_rows!=0)
				if($resultado=mysqli_query($conexion->conect,"Update khlevaluacionestratamientos set TipoEvaluacion = '$TipoEvaluacion' where idUsuario = $idUsuario and idTratamiento=idTratamiento;")){
			$msg=array("msg" => "Evaluacion modificada satisfactoriamente", "tipo"=>3);
			print json_encode($msg);
			return;
		}
			
		//Registro el usuario
//		echo "INSERT INTO khlevaluacionestratamientos (idUsuario, idTratamiento, TipoEvaluacion) VALUES ($idUsuario,$idTratamiento,'$TipoEvaluacion')";
		if($resultado=mysqli_query($conexion->conect,"INSERT INTO khlevaluacionestratamientos (idUsuario, idTratamiento, TipoEvaluacion) VALUES ($idUsuario,$idTratamiento,'$TipoEvaluacion');")){
			$msg=array("msg" => "Evaluacion registrada satisfactoriamente", "tipo"=>2);
			print json_encode($msg);
		}
		else{
			throw new Exception("Ocurrio un error al intentar registrar la evaluacion".mysqli_connect_error());
			exit;
		}
	}catch(Exception $ex){
		$msg=array ("msg" => $ex->getMessage(), "tipo"=>1);
		print json_encode($msg);
	}
	$conexion->CerrarConexion();
}
?>
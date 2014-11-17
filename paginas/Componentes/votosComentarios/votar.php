<?php

include_once("../../../php/phpClassConexion.php");
session_start();
$TipoEvaluacion = $_POST['TipoEvaluacion'];
$IdComentario = $_POST['IdComentario'];
@$idUsuario = $_SESSION['idUsuario'];

$conexion= new DBManager();//Instancia de la Conexion a BD

if($conexion->Conectar()==true){
	try{
		if(!isset($_SESSION['idUsuario'])){
			throw new Exception("Necesita estar logueado para poder votar");
		}
		//Verifico si el correo ya esta registrado
		if($resultado=mysqli_query($conexion->conect,"Select id from khlevaluacionescomentarios where IdComentario = $IdComentario and idUsuario=$idUsuario;"))
			if($resultado->num_rows!=0)
				if($resultado=mysqli_query($conexion->conect,"Update khlevaluacionescomentarios set TipoEvaluacion = '$TipoEvaluacion' where idUsuario = $idUsuario and IdComentario=IdComentario;")){
			$msg = array("msg"=>"Evaluacion modificada satisfactoriamente", "tipo" => 3);
			print json_encode($msg);
			return;
		}
			
			if($resultado=mysqli_query($conexion->conect,"INSERT INTO khlevaluacionescomentarios (idUsuario, IdComentario, TipoEvaluacion) VALUES ($idUsuario,$IdComentario,'$TipoEvaluacion');")){
			$msg=array("msg"=>"Evaluacion registrada satisfactoriamente", "tipo" => 2);
			print json_encode($msg);
		}
		else{
			throw new Exception("Ocurrio un error al intentar registrar la evaluacion".mysqli_connect_error());
			exit;
		}
	}catch(Exception $ex){
		$msg = array ("msg"=> $ex->getMessage(), "tipo"=>1);
		print json_encode($msg);
	}
	$conexion->CerrarConexion();
}
?>
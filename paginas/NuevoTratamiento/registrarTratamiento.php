<?php

include_once("../../php/phpClassConexion.php");
session_start();
$IdUsuario = $_SESSION['idUsuario'];
$IdEnfermedad = $_POST['IdEnfermedad'];
$Nombre = $_POST['Nombre'];
$Descripcion= $_POST['Descripcion'];
$Indicaciones = $_POST['Indicaciones'];
$Efectos_Segundarios= $_POST['Efectos_Segundarios'];
$Referencias= $_POST['Referencias'];
@$Fecha =date('Y-m-d H:i:s');

echo $IdEnfermedad;
$conexion= new DBManager();//Instancia de la Conexion a BD

if($conexion->Conectar()==true){
	try{
		if($resultado=mysqli_query($conexion->conect,"INSERT INTO khltratamientos (IdUsuario, IdEnfermedad, Nombre, Descripcion, Indicaciones,Efectos_Segundarios,Referencias,Fecha) VALUES ($IdUsuario, $IdEnfermedad, '$Nombre', '$Descripcion', '$Indicaciones','$Efectos_Segundarios', '$Referencias', '$Fecha');")){
			echo "Tratamiento registrado satisfactoriamente";
		}
		else{
			throw new Exception("Ocurrio un error al intentar registrar el tratamiento".mysqli_connect_error());
			exit;
		}
	}catch(Exception $ex){
		echo $ex->getMessage();
	}
	$conexion->CerrarConexion();
}
?>
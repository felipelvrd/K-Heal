<?php

include_once("../../php/phpClassConexion.php");
$Id = $_POST['Id'];
$Nombre = $_POST['Nombre'];
$Descripcion= $_POST['Descripcion'];
$Indicaciones = $_POST['Indicaciones'];
$Efectos_Segundarios= $_POST['Efectos_Segundarios'];
$Referencias= $_POST['Referencias'];
@$Fecha =date('Y-m-d H:i:s');

$conexion= new DBManager();//Instancia de la Conexion a BD

if($conexion->Conectar()==true){
	try{
		if($resultado=mysqli_query($conexion->conect,"UPDATE khltratamientos set Nombre='$Nombre', Descripcion='$Descripcion', Indicaciones='$Indicaciones',Efectos_Segundarios='$Efectos_Segundarios',Referencias='$Referencias',Fecha='$Fecha' where Id = $Id;")){
			echo "Tratamiento modificado satisfactoriamente";
		}
		else{
			throw new Exception("Ocurrio un error al intentar modificar el tratamiento".mysqli_connect_error());
			exit;
		}
	}catch(Exception $ex){
		echo $ex->getMessage();
	}
	$conexion->CerrarConexion();
}
?>
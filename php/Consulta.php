<?php

header('Content-Type: application/json; charset=UTF8');
include_once("phpClassConexion.php");

function ObtenerDatos()
{
	if (isset($_GET["Busqueda"])) {

		$Busqueda = $_GET["Busqueda"];
		$conexion = new DBManager();
		
		if($conexion->Conectar()==true)
		{	
		
			 $Busqueda=$_GET["Busqueda"];
			 $LikeString='%'.$Busqueda.'%';	
			 $result = array();		
			 
			$resultado=mysqli_query($conexion->conect,"SELECT Id,Nombre,Descripcion FROM khlenfermedades WHERE ETIQUETAS LIKE '$LikeString'");

			if($resultado->num_rows!=0){
				while($row=$resultado->fetch_assoc()){
					array_push($result,$row["Id"]);
					array_push($result,$row["Nombre"]);
					array_push($result,$row["Descripcion"]);
				}
			}

			$conexion->CerrarConexion();
			echo json_encode($result);
		
		}
    
	}
	else
		echo 'Parametros Incorrectos';

}


ObtenerDatos();
?>
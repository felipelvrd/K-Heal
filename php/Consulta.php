<?php

header('Content-Type: application/json; charset=UTF8');
include_once("phpClassConexion.php");

function ObtenerDatos()
{
	if (isset($_GET["Busqueda"])) {

		echo $_GET["Busqueda"];

		$conexion = new DBManager();//Instancia de la Conexion a BD
		$conexion->Conectar();

		$result = array();
			
		//$stmt = $conexion->conect->prepare("SELECT NOMBRE_EMPRESA,NOMBRE_CLIENTE,DESCRIPCION FROM tb_empresa WHERE ETIQUETAS LIKE ?");
		$resultado=mysqli_query($conexion->conect,"SELECT NOMBRE_EMPRESA,NOMBRE_CLIENTE,DESCRIPCION FROM tb_empresa WHERE ETIQUETAS LIKE '".$_GET["Busqueda"] ."';");
		$salida="";
		if($resultado->num_rows!=0){
			while($row=$resultado->fetch_assoc()){
				array_push($result,$row["NOMBRE_EMPRESA"]);
				array_push($result,$row["NOMBRE_CLIENTE"]);
				array_push($result,$row["DESCRIPCION"]);
			}
		}
		echo json_encode($result);
/*
			$stmt->bind_param('s',$LikeString);
			$stmt->execute();
			$stmt->bind_result($result_NOMBRE_EMPRESA,$result_NOMBRE_CLIENTE,$result_DESCRIPCION);
			while ($stmt->fetch()) 
			{
				//$result["NombreEmpresa{$i}"] = $result_NombreEmpresa;
				//$result["Descripcion{$i}"] = $result_Descripcion;
				array_push($result,$result_NOMBRE_EMPRESA);
				array_push($result,$result_NOMBRE_CLIENTE);
				array_push($result,$result_DESCRIPCION);
				$i++;
			}
			//$result = array('NombreEmpresa' => $result_NombreEmpresa);
			
			echo json_encode($result);
			$stmt->close();*/
	    
	}
	else
		echo 'Error';
	//$conexion->CerrarConexion();
}

ObtenerDatos();
?>
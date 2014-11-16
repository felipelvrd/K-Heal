<?php

include_once("../../php/phpClassConexion.php");
session_start();
@$IdUsuario = $_SESSION['idUsuario'];
$accion = $_POST['accion'];

if($accion==0){
$conexion= new DBManager();//Instancia de la Conexion a BD
	if($conexion->Conectar()==true){
		$salida="";
		//Si la consulta produjo resultados
		if($resultado=mysqli_query($conexion->conect,"SELECT * FROM khlnotificaciones where IdUsuario = $IdUsuario and Estado = 'P'  ORDER BY Fecha DESC")){
			//Si el resultado tiene mas de 0 columnas
			if($resultado->num_rows!=0){
				//Si todavia hay filas del resultado por procesar
				while($row=$resultado->fetch_assoc()){
					$salida.= "<li><a href='#' onClick='borrarNoti(".$row['Id'].");' >".$row['Descripcion']."</li></a>";						
				}
			}
			else{
				echo "No hay notificaciones";
			}
		}
		else{
			echo "Error al obtener las notificaciones. ".mysqli_connect_error();
			exit;
		}
		$conexion->CerrarConexion();
		echo utf8_encode($salida);
	}
}

if($accion==1){
$conexion= new DBManager();//Instancia de la Conexion a BD
	if($conexion->Conectar()==true){
		//Si la consulta produjo resultados
		if($resultado=mysqli_query($conexion->conect,"SELECT * FROM khlnotificaciones where IdUsuario = $IdUsuario and Estado = 'P'  ORDER BY Fecha DESC")){
			//Si el resultado tiene mas de 0 columnas
			echo $resultado->num_rows;
		}
		else{
			exit;
		}
		$conexion->CerrarConexion();
	}
}

?>
<?php

include_once("phpClassConexion.php");

$Id = isset($_POST['id']) ? $_POST['id'] : -1;
$Nombre = isset($_POST['nombre']) ? $_POST['nombre'] : -1;
$TipoEnfermedad = isset($_POST['tipoenfermedad']) ? $_POST['tipoenfermedad'] : -1;
$Descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : -1;
$Diagnostico = isset($_POST['descripcion']) ? $_POST['descripcion'] : -1;
$Prevencion = isset($_POST['prevencion']) ? $_POST['prevencion'] : -1;
$Familia = isset($_POST['familia']) ? $_POST['familia'] : -1;
$Estado = isset($_POST['estado']) ? $_POST['estado'] : -1;
$Sintomas = isset($_POST['sintomas']) ? $_POST['sintomas'] : -1;
$Etiquetas = isset($_POST['etiquetas']) ? $_POST['etiquetas'] : -1;
$Accion = $_POST['accion']; // 0 = Registrar, 1 = Editar, 2 = Listar, 3 = Consultar,;4 = Eliminar,;

$conexion= new DBManager();//Instancia de la Conexion a BD

if($Accion==0){
	if($conexion->Conectar()==true){
		try{	
			//Registro la enfermedad
			if($resultado=mysqli_query($conexion->conect,"INSERT INTO khlenfermedades (Nombre,TipoEnfermedad,Descripcion,Diagnostico,Prevencion,Familia,Estado,Sintomas,Etiquetas) 
															VALUES ('$Nombre','$TipoEnfermedad','$Descripcion','$Diagnostico','$Prevencion','$Familia','$Estado','$Sintomas','$Etiquetas');")){
				echo "Enfermedad registrada satisfactoriamente";
			}
			else{
				throw new Exception("Ocurrio un error al intentar registrar la enfermedad".mysqli_connect_error());
				exit;
			}
		}catch(Exception $ex){
			echo $ex->getMessage();
		}
		$conexion->CerrarConexion();
	}
}

else if($Accion==1){
	if($conexion->Conectar()==true){
		try{	
			//Edito el tratamiento
			if($resultado=mysqli_query($conexion->conect,"UPDATE  khlenfermedades set Nombre='$Nombre', TipoEnfermedad='$TipoEnfermedad', Descripcion='$Descripcion', Diagnostico='$Diagnostico', Prevencion='$Prevencion', Familia='$Familia', Estado='$Estado', Sintomas='$Sintomas', Etiquetas='$Etiquetas' where Id = $Id")){
				echo "Tratamiento se modifico satisfactoriamente";
			}
			else{
				throw new Exception("Ocurrio un error al intentar modificar la enfermedad".mysqli_connect_error());
				exit;
			}
		}catch(Exception $ex){
			echo $ex->getMessage();
		}
		$conexion->CerrarConexion();
	}
}

else if($Accion==2){
	if($conexion->Conectar()==true){
		try{	
			if($resultado=mysqli_query($conexion->conect,"Select * from khlenfermedades where Nombre like = $Nombre")){
				//Si el resultado tiene mas de 0 columnas
        		if($resultado->num_rows!=0){
            	//Si todavia hay filas del resultado por procesar
            		while($row=$resultado->fetch_assoc()){
                		$salida.="<li>
                        	    <a href='#'>".$row['Nombre']."</a>
                         	</li>";
            	}
        }
        else{
            $salida="<li>No hay enfermedades<li>";
        }
			}
			else{
				throw new Exception("Ocurrio un error al listar las enfermedades".mysqli_connect_error());
				exit;
			}
		}catch(Exception $ex){
			echo $ex->getMessage();
		}
		$conexion->CerrarConexion();
	}
}


else if($Accion==3){
	if($conexion->Conectar()==true){
		try{	
			if($resultado=mysqli_query($conexion->conect,"Select * from khlenfermedades where id  = $Id")){
				//Si el resultado tiene mas de 0 columnas
				$result_Enfermedad = array();
				
        		if($resultado->num_rows!=0){
            	//Si todavia hay filas del resultado por procesar
            		while($row=$resultado->fetch_assoc()){
                		array_push($result_Enfermedad,$row["Descripcion"]);
					}
	              echo json_encode($result_Enfermedad); 
                }
        else{
            $salida="<li>No hay enfermedades<li>";
        }
			}
			else{
				throw new Exception("Ocurrio un error al listar las enfermedades".mysqli_connect_error());
				exit;
			}
		}catch(Exception $ex){
			echo $ex->getMessage();
		}
		$conexion->CerrarConexion();
	}
}


else if($Accion==4){
	if($conexion->Conectar()==true){
		try{	
			//Elimino el tratamiento
			if($resultado=mysqli_query($conexion->conect,"Delete from khlenfermedades where Id = $Id")){
				echo "La enfermedad se elimino satisfactoriamente";
			}
			else{
				throw new Exception("Ocurrio un error al intentar eliminar la enfermedad".mysqli_connect_error());
				exit;
			}
		}catch(Exception $ex){
			echo $ex->getMessage();
		}
		$conexion->CerrarConexion();
	}
}
?>
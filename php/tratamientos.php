<?php

include_once("phpClassConexion.php");

header('Content-Type: application/json; charset = latin1_swedish_ci');



$Id = isset($_POST['id'])?$_POST['id']:-1;
$IdUsuario = isset($_SESSION['idUsuario'])?$_SESSION['idUsuario']:-1;
$IdEnfermedad = isset($_POST['idEnfermedad'])? $_POST['idEnfermedad']:-1;
$Descripcion = isset($_POST['descripcion'])? $_POST["descripcion"]:-1;
$Accion = $_POST['accion']; // 0 = Registrar, 1 = Editar, 2 = Listar , 3 = Consultar 4 = Eliminar,;
//$Fecha = date();

$conexion= new DBManager();//Instancia de la Conexion a BD

if($Accion==0){
	if($conexion->Conectar()==true){
		try{	
			//Registro el tratamiento
			if($resultado=mysqli_query($conexion->conect,"INSERT INTO khltratamientos (IdUsuario, IdEnfermedad, Descripcion, Fecha) 
															VALUES ($IdUsuario, $IdEnfermedad, '$Descripcion', '$Fecha');")){
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
}

else if($Accion==1){
	if($conexion->Conectar()==true){
		try{	
			//Edito el tratamiento
			if($resultado=mysqli_query($conexion->conect,"UPDATE  khltratamientos set Descripcion='$Descripcion' where Id = $Id")){
				echo "Tratamiento se modifico satisfactoriamente";
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
}

else if($Accion==2){
	if($conexion->Conectar()==true){
		try{	
			//Listo los tratamientos
			if($resultado=mysqli_query($conexion->conect,"Select * from khltratamientos where idEnfermedad = $IdEnfermedad")){
				//Si el resultado tiene mas de 0 columnas
				
				include_once("clTratamiento.php");
				$arrayTratamientos = array();
				
        		if($resultado->num_rows!=0){
            	//Si todavia hay filas del resultado por procesar
            		while($row=$resultado->fetch_assoc()){
                		$Tratamiento=new Tratamiento();
						$Tratamiento->id = $row["Id"];
						$Tratamiento->descripcion = $row["Descripcion"];
						$Tratamiento->nombre=$row["Nombre"];
						$Tratamiento->idUsu =$row["IdUsuario"];
						$Tratamiento->idEnf = $row["IdEnfermedad"];
						array_push($arrayTratamientos,$Tratamiento);
            	}
				 
				 echo json_encode($arrayTratamientos);
        }
        else{
            $salida="<li>No hay tratamientos<li>";
        }
			}
			else{
				throw new Exception("Ocurrio un error al intentar listar los tratamientos".mysqli_connect_error());
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
			//Listo los tratamientos
			if($resultado=mysqli_query($conexion->conect,"Select * from khltratamientos where Id = $Id;")){
				//Si el resultado tiene mas de 0 columnas
				
				include_once("clTratamiento.php");
                $Tratamiento=new Tratamiento();
				
        		if($resultado->num_rows!=0){
            	//Si todavia hay filas del resultado por procesar
            		while($row=$resultado->fetch_assoc()){
					
					$Tratamiento->id = $row["Id"];
					$Tratamiento->descripcion = $row["Descripcion"];
					$Tratamiento->nombre=$row["Nombre"];
					$Tratamiento->indicaciones=$row["Indicaciones"];
					$Tratamiento->efectos_segundarios=$row["Efectos_Segundarios"];
					$Tratamiento->refencias=$row["Referencias"];
					$Tratamiento->idUsu =$row["IdUsuario"];
					$Tratamiento->idEnf = $row["IdEnfermedad"];
            	}
				 
				 echo json_encode($Tratamiento);
        }
        else{
            $salida="<li>No hay tratamientos<li>";
        }
			}
			else{
				throw new Exception("Ocurrio un error al intentar listar los tratamientos".mysqli_connect_error());
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
			if($resultado=mysqli_query($conexion->conect,"Delete from khltratamientos where Id = $Id")){
				echo "Tratamiento se elimino satisfactoriamente";
			}
			else{
				throw new Exception("Ocurrio un error al intentar eliminar el tratamiento".mysqli_connect_error());
				exit;
			}
		}catch(Exception $ex){
			echo $ex->getMessage();
		}
		$conexion->CerrarConexion();
	}
}
?>
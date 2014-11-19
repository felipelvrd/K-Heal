<?php
include_once("phpClassConexion.php");

header('Content-Type: application/json;');

session_start();

try
{
	if(!isset($_SESSION['idUsuario']))
	{
	 throw new Exception("Debes haber entrado con usuario y contraseña para poder sugerir");
	}
}
catch(Exception $ex)
{
  	$msg=array("msg" => $ex->getMessage(), "tipo"=>1);
    echo json_encode($msg);
	exit;	
}

if(isset($_POST['sugerencia']))
{
	$Sugerencia = $_POST['sugerencia'];
	if($_POST['sugerencia']=="")
	{
		$msg=array("msg" => "El campo para sugerir no puede ir vacio", "tipo"=>3);
		echo json_encode($msg);
		exit;
	}
}

$Usuario=$_SESSION['idUsuario'];

$Accion=$_POST['accion'];


$conexion= new DBManager();//Instancia de la Conexion a BD

if($Accion==0){
	if($conexion->Conectar()==true){
		try{	
			//Registro de la sugerencia
			if($resultado=mysqli_query($conexion->conect,"INSERT INTO khlsugerencias (Id_Usuario, Descripcion) 
															VALUES ($Usuario,'$Sugerencia');")){
				
				$msg=array("msg" => "Sugerencia enviada sastifactoriamente", "tipo"=>2);
				echo json_encode($msg);
			}
			else{
				throw new Exception("Ocurrio un error al intentar registrar la sugerencia".mysqli_connect_error());
				exit;
			}
		}catch(Exception $ex){
			$msg=array("msg" => $ex->getMessage(), "tipo"=>3);
			echo json_encode($msg);
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
		try
		{	
			include_once("../paginas/Mant_Enfermedad/cldataTable.php");															
		    $dtPeticion = new dtPeticion();	
			$dtPeticion->length = $_POST["length"];
			$dtPeticion->star = $_POST["start"];	
			$dtPeticion->busqueda = $_POST["search"];
			$dtPeticion->busqueda = $dtPeticion->busqueda["value"]==""? "%":$dtPeticion->busqueda["value"]; 											
			

			$dtRespuesta = new dtRespuesta();

																		
			if($resultado=mysqli_query($conexion->conect,"Select *
                                                          from khlsugerencias"))
			 {
				if($resultado->num_rows!=0)
				{ 
                 	while($row=$resultado->fetch_assoc())
					{
					   $tdDato=new tdDato;
					   $tdDato->ID=$row["Id_Usuario"];
                       $tdDato->Descripcion=$row["Descripcion"];
					   array_push($dtRespuesta->data,$tdDato);
            	    }
					
					echo json_encode($dtRespuesta);
                 }
			    else
			    {
				 $salida="<li>No hay enfermedades<li>";
			    }
			}
			
			else{
				throw new Exception("Ocurrio un error al listar las sugerencias".mysqli_connect_error());
				exit;
			}
		}catch(Exception $ex){
			echo $ex->getMessage();
		}
		$conexion->CerrarConexion();
	}
}

?>
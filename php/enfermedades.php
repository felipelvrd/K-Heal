<?php


include_once("phpClassConexion.php");

header('Content-Type: application/json; charset = latin1_swedish_ci');

$Id = isset($_POST['id']) ? $_POST['id'] : -1;
$Nombre = isset($_POST['nombre']) ? $_POST['nombre'] : -1;
$TipoEnfermedad = isset($_POST['tipoenfermedad']) ? $_POST['tipoenfermedad'] : -1;
$Descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : -1;
$Diagnostico = isset($_POST['diagnostico']) ? $_POST['diagnostico'] : -1;
$Prevencion = isset($_POST['prevencion']) ? $_POST['prevencion'] : -1;
$Referencias = isset($_POST['referencias']) ? $_POST['referencias'] : -1;
$Estado = isset($_POST['estado']) ? $_POST['estado'] : -1;
$Imagen=isset($_POST['imagen']) ? $_POST['imagen'] : -1;
$Sintomas = isset($_POST['sintomas']) ? $_POST['sintomas'] : -1;
$Etiquetas = isset($_POST['etiquetas']) ? $_POST['etiquetas'] : -1;
$Enfermedades_Relacionadas = isset($_POST['enfermedades_relacionadas']) ? $_POST['enfermedades_relacionadas'] : -1;
$Accion = $_POST['accion']; // 0 = Registrar, 1 = Editar, 2 = Listar, 3 = Consultar,;4 = Eliminar,;

$conexion= new DBManager();//Instancia de la Conexion a BD

if($Accion==0){
	if($conexion->Conectar()==true){
		try{	
			//Registro la enfermedad
			if($resultado=mysqli_query($conexion->conect,"INSERT INTO khlenfermedades (Nombre,TipoEnfermedad,Descripcion,Diagnostico,Prevencion,Enfermedades_Relacionadas, Referencias,Estado,Sintomas,Etiquetas) 
															VALUES ('$Nombre','$TipoEnfermedad','$Descripcion','$Diagnostico','$Prevencion','$Enfermedades_Relacionadas','$Referencias','$Estado','$Sintomas','$Etiquetas');")){
				
				if($resultado==false)
				echo "Verifique que el nombre no exita previamente";
				
				/*$resultado = mysqli_query($conexion->conect,"SELECT Id FROM khlenfermedades where Nombre=$Nombre");
				$Id=$resultado->fetch_assoc();
				$ds  = DIRECTORY_SEPARATOR;  
				rename("C:\xampp\htdocs\PROYECTO INTERFACES\recursos\Enfermedades\nuevo.jpge","C:\xampp\htdocs\PROYECTO INTERFACES\recursos\Enfermedades".$ds.$Id.".jpge");*/
				echo json_encode("Enfermedad se agrego satisfactoriamente");
			}
			else{
				throw new Exception("Ocurrio un error al intentar registrar la enfermedad".mysql_error());
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
		
			//Edito la enfermedad
			if($resultado=mysqli_query($conexion->conect,"UPDATE  khlenfermedades set Nombre='$Nombre', TipoEnfermedad='$TipoEnfermedad', Descripcion='$Descripcion',Diagnostico='$Diagnostico',Prevencion='$Prevencion', Enfermedades_Relacionadas='$Enfermedades_Relacionadas',Referencias='$Referencias',Estado='$Estado',Sintomas='$Sintomas', Etiquetas='$Etiquetas'  where Id = $Id")){
				
				if($resultado==false)
				echo "Ocurrio un error en la consulta ".mysql_error();
				
				echo json_encode('Enfermedad se modifico satisfactoriamente');
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
		try
		{	
			include_once("../paginas/Mant_Enfermedad/cldataTable.php");															
		    $dtPeticion = new dtPeticion();	
			$dtPeticion->length = $_POST["length"];
			$dtPeticion->star = $_POST["start"];	
			$dtPeticion->busqueda = $_POST["search"];
			$dtPeticion->busqueda = $dtPeticion->busqueda["value"]==""? "%":$dtPeticion->busqueda["value"]; 											
			
			$LIMIT_STRING = $dtPeticion->star  . "," . ($dtPeticion->star + $dtPeticion->length);


			$dtRespuesta = new dtRespuesta();

																		
			if($resultado=mysqli_query($conexion->conect,"Select *
                                                          from khlenfermedades
														  where Nombre like '%".$dtPeticion->busqueda."%' 
														  LIMIT ".$LIMIT_STRING))
			 {
		     	$resultTotalRegistros= mysqli_query($conexion->conect,"Select COUNT(*) AS Total
													             from khlenfermedades");
				
				$TotalRegistros=$resultTotalRegistros->fetch_assoc();
				$dtRespuesta->recordsTotal=$TotalRegistros["Total"];
				
				if($resultado->num_rows!=0)
				{ 
				    if($dtPeticion->busqueda!="%")
					$dtRespuesta->recordsFiltered = $resultado->num_rows;
					else
					$dtRespuesta->recordsFiltered = $dtRespuesta->recordsTotal;
					

            		while($row=$resultado->fetch_assoc())
					{
					   $tdDato=new tdDato;
					   $tdDato->ID=$row["Id"];
                       $tdDato->Descripcion=$row["Descripcion"];
					   $tdDato->Diagnostico=$row["Diagnostico"];
					   $tdDato->Enfermedades_Relacionadas=$row["Enfermedades_Relacionadas"];
					   $tdDato->Estado=$row["Estado"];
					   $tdDato->Etiquetas=$row["Etiquetas"];
					   $tdDato->Sintomas=$row["Sintomas"];
					   $tdDato->Nombre=$row["Nombre"];
					   $tdDato->Prevencion=$row["Prevencion"];
					   $tdDato->Imagen=$row["Imagen"];
					   $tdDato->TipoEnfermedad=$row["TipoEnfermedad"];
					   $tdDato->Referencias=$row["Referencias"];
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

				include_once("clEnfermedad.php");
				$Enfermedad = new Enfermedad();
				
        		if($resultado->num_rows!=0){
            	//Si todavia hay filas del resultado por procesar
            		while($row=$resultado->fetch_assoc()){
                		$Enfermedad->descripcion = $row["Descripcion"];
						$Enfermedad->diagnostico = $row["Diagnostico"];
						$Enfermedad->nombre = $row["Nombre"];
						$Enfermedad->sintomas = $row["Sintomas"];
						$Enfermedad->prevencion = $row["Prevencion"];
					}

	              echo json_encode($Enfermedad); 
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
				echo json_encode("La enfermedad se elimino satisfactoriamente");
			}
			else{
				throw new Exception("Ocurrio un error al intentar eliminar la enfermedad".mysqli_error());
				exit;
			}
		}catch(Exception $ex){
			echo $ex->getMessage();
		}
		$conexion->CerrarConexion();
	}
}
?>
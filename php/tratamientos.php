<?php

include_once("phpClassConexion.php");

$Id = $_POST['id'];
$IdUsuario = $_SESSION['idUsuario'];
$IdEnfermedad = $_POST['idEnfermedad'];
$Descripcion = $_POST['descripcion'];
$Accion = $_POST['accion']; // 0 = Registrar, 1 = Editar, 2=Listar, 3 = Eliminar,;
$Fecha = date();

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
        		if($resultado->num_rows!=0){
            	//Si todavia hay filas del resultado por procesar
            		while($row=$resultado->fetch_assoc()){
                		$salida.="<li>
                        	    <a href='#'>".$row['Descripcion']."</a>
                         	</li>";
            	}
        }
        else{
            $salida="<li>No hay tratamientos<li>";
        }
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


else if($Accion==3){
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
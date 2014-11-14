<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Prueba</title>
</head>
 


<?php

include_once("php/phpClassConexion.php");


$conexion= new DBManager();//Instancia de la Conexion a BD

	if($conexion->Conectar()==true){
		try{	
			//Registro el tratamiento
			if($resultado=mysqli_query($conexion->conect,"INSERT INTO khlsugerencias (nombre, descripcion) 
															VALUES ('letra ñ', 'tílde');")){
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


/*$salida="";
if($conexion->Conectar()==true){
		try{	
			//Listo los tratamientos
			if($resultado=mysqli_query($conexion->conect,"Select * from khlsugerencias ")){
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
echo $salida;
*/
?>
<body>
</body>
</html>
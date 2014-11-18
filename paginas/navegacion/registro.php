<?php

include_once("../../php/phpClassConexion.php");

$email = $_POST['email'];
$nombre = $_POST['nombre'];
$contrasena = NTLMHash($_POST['contrasena']);

$conexion= new DBManager();//Instancia de la Conexion a BD

if($conexion->Conectar()==true){
	try{
		//Verifico si el correo ya esta registrado
		if($resultado=mysqli_query($conexion->conect,"Select id from khlusuarios where correo = '$email';"))
			if($resultado->num_rows!=0)
				throw new Exception("El correo ya esta en uso.");
			
		//Registro el usuario
		if($resultado=mysqli_query($conexion->conect,"INSERT INTO khlusuarios (Nombre, Correo, Contrasena, Rol, Estado) VALUES ('$nombre', '$email', '$contrasena', 'U', 'A');")){
			$msg = array("msg" => "Usuario registrado satisfactoriamente", "tipo"=>2);
			print json_encode($msg);
		}
		else{
			throw new Exception("Ocurrio un error al intentar registrar al usuario".mysqli_connect_error());
			exit;
		}
	}catch(Exception $ex){
		$msg= array ("msg"=>$ex->getMessage(), "tipo" => 1);
		print json_encode($msg);
	}
	$conexion->CerrarConexion();
}

/*
 * Funcion para generar un hash que se utilizara en la contraseña
 */
function NTLMHash($Input) {
  $Input=iconv('UTF-8','UTF-16LE',$Input);
  $MD4Hash=bin2hex(mhash(MHASH_MD4,$Input));
  $NTLMHash=strtoupper($MD4Hash);
  return($NTLMHash);
}

?>
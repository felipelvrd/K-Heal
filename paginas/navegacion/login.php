<?php

header('Content-Type: text/html; charset=utf-8');

include_once("../../php/phpClassConexion.php");

$email = $_POST['email'];
$contrasena = NTLMHash($_POST['contrasena']);

$conexion= new DBManager();//Instancia de la Conexion a BD

if($conexion->Conectar()==true){
	try{
		//Busco al usuario
		if($resultado=mysqli_query($conexion->conect,"Select id,nombre,correo,Rol,estado from khlusuarios where correo = '$email' and contrasena = '$contrasena';"))
			//si regresa resultados
			if($resultado->num_rows!=0){
				$row=$resultado->fetch_assoc();
				//verifico si es usuario activo
				if($row['estado']=='A'){
					session_start();
					$_SESSION['idUsuario']=$row['id'];
					$_SESSION['Rol']=$row['Rol'];
					echo "Login exitoso";
				}
				else{
					throw new Exception("El usuario esta baneado");
				}
			}
			else
				throw new Exception("El correo electrónico o la contraseña ingresada es incorrecta.");
		else{
			throw new Exception("Ocurrio un error al intentar registrar al usuario".mysqli_connect_error());
			exit;
		}
	}catch(Exception $ex){
		echo utf8_decode ($ex->getMessage());
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
<?php

include_once("phpClassConexion.php");

$email = $_POST['email'];
$nombre = $_POST['nombre'];
$contrasena = NTLMHash($_POST['contrasena']);

$conexion= new DBManager();//Instancia de la Conexion a BD

if($conexion->Conectar()==true){
    if($resultado=mysqli_query($conexion->conect,"INSERT INTO khlusuarios (Nombre, Correo, Contrasena, Rol, Estado) VALUES ('$nombre', '$email', '$contrasena', 'U', 'A');")){
        echo "Usuario registrado satisfactoriamente";
    }
    else{
        echo "Ocurrio un error al intentar registrar al usuario".mysqli_connect_error();
        exit;
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
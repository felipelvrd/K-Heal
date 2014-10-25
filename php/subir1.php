<?php

//if(mkdir("../recursos/Usuarios/test", 0700));//Esta se crea cuando se hace un usuario

header('Content-Type: application/json');

$ds          = DIRECTORY_SEPARATOR;  

$storeFolder = 'Usuarios';   
$Nombre_Usuario='Nombre_Usuario';

//print_r($_FILES);
//echo $_POST["data"]; // validar que venga data
 
$Datos = $_POST["data"];
 
//print_r($_FILES);

if (!empty($_FILES)) {
      
	  
	// Validar el MimeType
    if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") ||
	                                                 ($_FILES["file"]["type"] == "image/pjpeg")||
													 ($_FILES["file"]["type"] == "image/png")))
	
	{ 
	    
	    $Tipo = split('[/]',$_FILES["file"]["type"]);
	  	$Datos = $Datos .'.'. $Tipo[1];
		
	}
	else
	{
		echo " tipo incorrecto";
		exit;
	}  
	    
    $tempFile = $_FILES['file']['tmp_name'];           
      
    $targetPath = dirname('C:\xampp\htdocs\PROYECTO INTERFACES DE USUARIO\recursos\Usuarios').$ds. $storeFolder.$ds.  $Nombre_Usuario.$ds; 
     

    $targetFile =  $targetPath. $Datos;
 
    if(@move_uploaded_file($tempFile,$targetFile))
	{
		header("HTTP/1.0 200");
		//echo '{"Imagen subida satisfactoriamente"}';
	}
	else
	{
		 header("HTTP/1.0 500");
		 echo '"Error en el servidor -> No se pudo mover el archivo"';  		
	}
		
}
else
{
   header("HTTP/1.0 400");
   echo '"Error -> No se enviaron archivos"';	
}


?>   


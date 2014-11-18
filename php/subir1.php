<?php

header('Content-Type: application/json');
$Datos = $_POST["data"];
$Accion =$_POST["accion"];
//$ID=$_POST["Id"];

$ds          = DIRECTORY_SEPARATOR;  


if($Accion == "Usuarios")
{
$storeFolder = 'Usuarios'; 
//if(mkdir("../recursos/Usuarios/".$ID, 0700));//Esta se crea cuando se hace un usuario  

}

if($Accion == "Enfermedades")
{
$storeFolder = 'Enfermedades';   
}


//print_r($_FILES);
//echo $_POST["data"]; // validar que venga data
 
 
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
      
    $targetPath = 'C:\xampp\htdocs\PROYECTO INTERFACES\recursos'.$ds.$storeFolder.$ds;

    $targetFile =  $targetPath. $Datos;
	
	//echo $targetFile;
	
	
 
    if(move_uploaded_file($tempFile,$targetFile))
	{
		header("HTTP/1.0 200");
		echo json_encode($targetFile);
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


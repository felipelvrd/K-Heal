<?php
//header('Content-Type: application/json');
$ds          = DIRECTORY_SEPARATOR;  //1

$storeFolder = 'Previsualizacion';   //2


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
      
    $targetPath = dirname('C:\xampp\htdocs\YUBLITZ\PROYECTO PARA LA PRACTICA\Practica\Proyecto\YUBLITZ\MANTENIMIENTO\Previsualizacion').$ds. $storeFolder.$ds; 
     

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


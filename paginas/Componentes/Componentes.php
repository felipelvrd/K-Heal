<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Documento sin título</title>
</head>

<body>

<div id="cmp_ResultadoBusqueda" class="clContenedor ResultadoBusqueda group" >

   <div class="clRow">
   
     <div class="clColum-esc-5 clColum-mov-4 ">
          
          <div class="clRow">
             <?php if(isset($_POST["n"])){echo '<h4 style="margin:0px">'.$_POST["n"].'</h4>';} ?>   
             <!--<h4 style="margin:0px;">Cancer</h4>-->
             
          </div>
          
          <div class="clRow" style="max-height:100px; overflow:auto;">  
            <?php if(isset($_POST["d"])){
				
				$str = substr($_POST["d"],0,300);
				$str =$str.'...';
				echo '<p>'.$str.'</p>';} 
			?>                 
          </div>
         <a href="index.php?p=Consultar_Enfermedad&enf_id=<?php if(isset($_POST["id"])){echo $_POST["id"];}?>" style="float:right; margin-right:5px;">Ver mas</a>
     </div>
     
     <div class="clColum-esc-1 clColum-mov-2">
      
      <div style="margin:5% auto; min-height:50px; width:90%;">
       <img class="clIMG-responsive" src="recursos/Logo2.png" style="max-height:50px; width:100%">
      </div>

     </div>

   </div>

</div>

<div id="cmp_Tratamiento" class="clContenedor group" >
		    <div >	   
			 <div>				  
				  <div >
					 <h2 style="margin:0px"><?php echo $_POST["n"] ?></h2>  
				  </div>			  
				  <div style="max-height:100px; overflow:auto;">  
						<p><?php echo $_POST["d"] ?></p>
				  </div>	  
			 </div>
			 
			 <div>
				   <a href="index.php?p=Consultar_Tratamiento&id_trat=<?php echo $_POST["id"] ?>" style="float:right; margin-right:5px;">Ver mas</a>
                   <?php @session_start();if( isset($_SESSION['idUsuario']) && ($_POST["idUsu"]==$_SESSION['idUsuario'] || $_SESSION['Rol']=='A')){?>
          			<a href="index.php?p=NuevoTratamiento&id_trat=<?php echo $_POST["id"] ?>&enf_id=<?php echo $_POST["idEnf"];?>" style="float:right; margin-right:5px;">Editar</a>
                    <?php } ?>
                    
				 <br></br>
				 <div"><?php include "votos/index.php";?></div>
			 </div>
		   </div>
		</div>
  
</body>
</html>

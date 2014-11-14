<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--Este link se agrega solo si estamos diseñando el componente -->
<?php if(isset($_POST["n"])==false){echo '<link href="../css/PumbleTrap.css" rel="stylesheet" type="text/css">';} ?>

<title>Documento sin título</title>
</head>

<body>

<div id="cmp_ResultadoBusqueda" class="clContenedor" style="border: 1px solid #000">

   <div class="clRow">
   
     <div class="clColum-esc-5 clColum-mov-4">
          
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
         <a href="../index?" style="float:right; margin-right:5px;">Ver mas</a>
     </div>
     
     <div class="clColum-esc-1 clColum-mov-2">
      
      <div style="margin:5% auto; border: 1px solid #660; min-height:50px; width:90%;">
       <?php if(isset($_POST["n"])){echo '<img class="clIMG-responsive" src="recursos/Logo2.png" style="max-height:50px; width:100%" >';} ?>
      </div>

     </div>

   </div>

</div>


</body>
</html>

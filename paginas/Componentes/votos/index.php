<?php
	include_once("nVotosP.php");
	@session_start();
	if(!isset($_SESSION['nVoto']))
		$_SESSION['nVoto']=0;
	else
		$_SESSION['nVoto']++;
	$nVoto=$_SESSION['nVoto'];
?>




<div id='dvVotos' class="clRow">
  
  <div class="clRow" style="margin-left:40%; margin-right:0px;">

      <div id='dvMecure' title="Me cure" class="clColum-mov-2 clColum-esc-2"> 
        <a href="#" onClick="votar('P', <?php echo $_POST['id'];?>,<?php echo $nVoto; ?>);return false;">
        <p> <img class="clIMG-responsive" src="paginas/Componentes/votos/mecure.png"  alt=""/> </p>
        </a>
        <p><span id='spVotosMecure<?php echo $nVoto?>'><?php obtenerVotos($_POST['id'],'P'); ?></span></p>
      </div>
    
      <div id='dvNocure' title="No me cure" class="clColum-mov-2 clColum-esc-2"> 
        <a href="#" onClick="votar('N',<?php echo $_POST['id']; ?>,<?php echo $nVoto; ?>);">
        <p><img class="clIMG-responsive" src="paginas/Componentes/votos/nocure.png" alt=""/></p>
        <p><span id='spVotosNocure<?php echo $nVoto?>'><?php obtenerVotos($_POST['id'],'N'); ?></span></p>
      </div>
  
  </div>
  
</div>
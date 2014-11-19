<?php
	include_once("nVotosP.php");
	@session_start();
	if(!isset($_SESSION['nVoto']))
		$_SESSION['nVoto']=0;
	else
		$_SESSION['nVoto']++;
	$nVoto=$_SESSION['nVoto'];
?>



<<<<<<< .mine
<div id='dvVotos' class="clRow">
  <div id='dvMecure' title="Me cure" class="clColum-mov-3"> <a href="#" onClick="votar('P', <?php echo $_POST['id'];?>,<?php echo $nVoto; ?>);">
    <p> <img class="clIMG-responsive" src="paginas/Componentes/votos/mecure.png" width="50" height="50" alt=""/> </p>
=======
<div id='dvVotos'>
  <div id='dvMecure'> <a href="#" onClick="votar('P', <?php echo $_POST['id'];?>,<?php echo $nVoto; ?>);return false;">
    <p> <img src="paginas/Componentes/votos/mecure.png" width="50" height="50" alt=""/> </p>
    <p> Me cure </p>
>>>>>>> .r151
    </a>
    <p><span id='spVotosMecure<?php echo $nVoto?>'><?php obtenerVotos($_POST['id'],'P'); ?></span></p>
  </div>
<<<<<<< .mine
  <div id='dvNocure' title="No me cure" class="clColum-mov-3"> <a href="#" onClick="votar('N',<?php echo $_POST['id']; ?>,<?php echo $nVoto; ?>);">
    <p><img class="clIMG-responsive" src="paginas/Componentes/votos/nocure.png" width="50" height="50" alt=""/></p>
=======
  <div id='dvNocure'> <a href="#" onClick="votar('N',<?php echo $_POST['id']; ?>,<?php echo $nVoto; ?>); return false;">
    <p><img src="paginas/Componentes/votos/nocure.png" width="50" height="50" alt=""/></p>
    <p>No Mecure</p>
>>>>>>> .r151
    </a>
    <p><span id='spVotosNocure<?php echo $nVoto?>'><?php obtenerVotos($_POST['id'],'N'); ?></span></p>
  </div>
</div>
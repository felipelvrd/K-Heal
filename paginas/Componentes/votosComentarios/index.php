<?php
	@session_start();
	if(!isset($_SESSION['nVotoC']))
		$_SESSION['nVotoC']=0;
	else
		$_SESSION['nVotoC']++;
	$nVotoC=$_SESSION['nVotoC'];
?>



<div id='dvVotos'>
  <div id='dvMecure'> <a href="#" onClick="votarC('P', <?php echo $idComent;?>,<?php echo $nVotoC; ?>);return false;">
    <p> <img src="paginas/Componentes/votos/mecure.png" width="50" height="50" alt=""/> </p>
    <p></p>
    </a>
    <p><span id='spVotosCsi<?php echo $nVotoC?>'>0</span></p>
  </div>
  <div id='dvNocure'> <a href="#" onClick="votarC('N',<?php echo $idComent; ?>,<?php echo $nVotoC; ?>);return false;">
    <p><img src="paginas/Componentes/votos/nocure.png" width="50" height="50" alt=""/></p>
    <p></p>
    </a>
    <p><span id='spVotosCNo<?php echo $nVotoC?>'></span></p>
  </div>
  <span id='tmp<?php echo $nVotoC; ?>'></span>
</div>

<script type="text/javascript">
	 nVotosC('N',<?php echo $idComent; ?>,<?php echo $nVotoC; ?>);
	 pVotosC('P',<?php echo $idComent; ?>,<?php echo $nVotoC; ?>);
</script>
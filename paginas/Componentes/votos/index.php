
<div id='dvVotos'>
  <div id='dvMecure'> <a href="#" onClick="votar('P', <?php echo $_POST['id']; ?>);">
    <p> <img src="paginas/Componentes/votos/mecure.svg" width="50" height="50" alt=""/> </p>
    <p> Me cure </p>
    </a>
    <p><span id='spVotosMecure'>0</span></p>
  </div>
  <div id='dvNocure'> <a href="#" onClick="votar('N',<?php echo $_POST['id']; ?>);">
    <p><img src="paginas/Componentes/votos/nocure.svg" width="50" height="50" alt=""/></p>
    <p>No Mecure</p>
    </a>
    <p><span id='spVotosNocure'>0</span></p>
  </div>
  <span id='tmp'></span>
</div>

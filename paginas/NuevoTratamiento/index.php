<div class = 'dvNTratamiento clCaja' >
<div class="clRow clTexto-cen">
<h1 id='hTitulo'>Nuevo Tratamiento</h1>
</div>
<h2>Nombre</h2>
<p><input type="text" id='txNombre' required/> </p>
<h2>Descripción</h2>
<p><textarea class="richtext" id="taDescripcion"></textarea> </p>
<h2>Forma de Aplicarlo</h2>
<p><textarea class="richtext"  id="taFormaAplicarlo"></textarea> </p>
<h2>Efectos Secundarios</h2>
<p><textarea class="richtext"  id="taEfectosSecundarios"></textarea> </p>
<h2>Referencias</h2>
<p><textarea class="richtext" id="taReferencias"></textarea> </p>
<p><button id='btRegistarTratamiento' type="button" >Registrar <br>Tratamiento</button> </p>
<div id="dvMsg"></div>
</div>

<script type="text/javascript">
	$('.richtext').jqte();
</script>
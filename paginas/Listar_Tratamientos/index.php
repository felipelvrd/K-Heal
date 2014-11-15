
<script>

$(document).ready(function(e) {  
	Listar_Tratamientos("<?php echo $_GET["enf_id"]?>");
});

</script>


<div id="splash">
Cargando
</div>    
    
    <div class="clContenedor" id="main">
		<div class="clRow" >
			<div class="clColum-esc-2 clColum-mov-6">
			</div>
			<div class="clColum-esc-2 clColum-mov-6">
				<h2>Enfermedad Consultada</h2>
			</div>
			<div class="clColum-esc-1 clColum-mov-6">
			</div>
		</div>
		<div class="clRow" >
			<div class="clColum-esc-2 clColum-mov-6" >
			</div>
			<div class="clColum-esc-2 clColum-mov-6">
				<div id="divFichaEnfermConsTrata">&nbsp;Datos en ficha tecnica de la Enfermedad</div>
			</div>
			<div class="clColum-esc-1 clColum-mov-6">
			</div>
		</div>
		<div class="clRow">
			<div class="clColum-esc-2 clColum-mov-6" >
			</div>
			<div class="clColum-esc-2 clColum-mov-6">
				<h2>Lista de Tratamientos</h2>
				<div id="divListaTrata" class="clListTratamientos">                 
                 <!-- Aca se genera el codigo dinamicamente -->
				</div>
			</div>
			<div class="clColum-esc-1 clColum-mov-6">
			</div>
		</div>
	</div>
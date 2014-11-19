
<script>

$(document).ready(function(e) {  
	Listar_Tratamientos("<?php echo $_GET["enf_id"]?>","<?php echo $_GET["n"]?>");
});

</script>


<div id="splash">
Cargando
</div>    
    
    <div class="clContenedor" id="main">
		
		<div class="clRow">
        
            <div class="clRow " style="text-align:center">
            <h2 id="h2_Enfermedad_Consultada">Enfermedad Consultada</h2>
            <div>

			<div class="clColum-esc-1 clColum-mov-6" ></div>
            
			<div class="clColum-esc-4 clColum-mov-6">

				<h2 style="text-align:center;" >Lista de Tratamientos</h2>
				<div id="divListaTrata" >                 
                 <!-- Aca se genera el codigo dinamicamente -->
				</div>	
                <p><a href="#" onClick="nTratamiento($_GET('enf_id'));return false;">Nuevo tratamiento</a></p>

			</div>
            
			<div class="clColum-esc-1 clColum-mov-6"></div>
            
         </div>  

	</div>
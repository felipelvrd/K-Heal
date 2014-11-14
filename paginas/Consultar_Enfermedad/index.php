
<script>

$(document).ready(function(e) {  
	CargarDatos_Enfermedad("<?php echo $_GET["enf_id"]?>");
});



</script>


<div id="splash">
Cargando
</div>

<div id="main" class="clContenedor">
     
        <div class="clRow clTexto-cen"  >
			<h1 id="Nombre_Enfermedad">Nombre de la enfemedad</h1>
		</div>
        
		<div class="clRow clTexto-cen"  >
			<div id="divFichaEnfermCons"><img  src="recursos/Logo2.png" width="426" height="118" alt="alt 500X300"></div>
		</div>
        
		<div class="clRow"  >
			<div class="clColum-esc-2 clColum-mov-6"  >
				<div class="clRow">
						<div id="divMenuEnferCons" class="clMenuLateral">
                        	<label>MENU</label>
							<ul>                              
							  <li><a href="#divDescriEnferCons" >Descripcion</a></li>
							  <li><a href="#divSintomas "> Sintomas</a></li>
							  <li><a href="#divDiagnostico ">Prevencion</a></li>
							  <li><a href="#divReferencias">Referencias</a></li>  
                              <li><a id="link_Tratamientos" href="#">Tratamientos propuestos por usuarios</a></li> 
							</ul>
						</div>
				</div>
			</div>
            
			<div class="clColum-esc-3 clColum-mov-6"  >
			<div>
				<h2>Descripcion </h2>
				<div id="divDescriEnferCons" class="descrEnfer">
				</div>
			</div>

			<div>
				<h2>Sintomas</h2>
				<div id="divSintomas" class="descrEnfer">
				Datos
				</div>
			</div>

			<div>
				<h2>Diagnostico</h2>
				<div id="divDiagnostico" class="descrEnfer">
				Datos
				</div>
			</div>

			<div>
				<h2>Prevencion </h2>
				<div id="DivPrevencion" class="descrEnfer">
				Datos
				</div>
			</div>

			<div>
				<h2>Referencias</h2>
				<div id="DivReferencias" class="descrEnfer">
				Datos
				</div>
			</div>

			</div>
		
		</div>
</div>

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
<!--			<img class="clIMG-responsive"  src="recursos/Logo2.png" width="426" height="118" alt="alt 500X300">
-->		</div>
        
		<div class="clRow clTexto-cen ">
        
            <h2 id="Nombre_Enfermedad">Nombre de la enfemedad</h2>

			<div class="clColum-esc-2 clColum-mov-6">
				<div class="clRow">    
                  <div class="clColum-esc-1"></div>
                     <div class="clColum-esc-4">
						<div id="divMenuEnferCons" class="clMenuLateral group-enfermedad" >
                        	<h2>Menu</h2>
							<ul>                              
							  <li><a href="#Descr" >Descripcion</a></li>
							  <li><a href="#Sinto"> Sintomas</a></li>
							  <li><a href="#Diagn">Diagnostico</a></li>
							  <li><a href="#Preve">Prevencion</a></li>
							  <li><a href="#Refer">Referencias</a></li>
							  <li><a href="#EnfRe">Enfermedades Relacionadas</a></li> 
                              <li><a  id="link_Tratamientos" href="#Trata">Tratamientos</a></li>  
						</div>
                     <div class="clColum-esc-1"></div>
                       </div>
				</div>
			</div>
            
            
			<div class="clColum-esc-3 clColum-mov-6" style="margin-top:5px">
			<div id="Descr" class="group-enfermedad">
				<h2>Descripcion </h2>
				<p id="divDescriEnferCons" class="descrEnfer">
                Datos
				</p>
			</div>

			<div id="Sinto"  class="group-enfermedad">
				<h2>Sintomas</h2>
				<p id="divSintomas" class="descrEnfer">
				Datos
				</p>
			</div>

			<div id="Diagn"  class="group-enfermedad">
				<h2>Diagnostico</h2>
				<p id="divDiagnostico" class="descrEnfer">
				Datos
				</p>
			</div>

			<div id="Preve"  class="group-enfermedad">
				<h2>Prevencion </h2>
				<p id="divPrevencion" class="descrEnfer">
				Datos
				</p>
			</div>

             <div id="EnfRe"  class="group-enfermedad">
				<h2>Enfermedades Relacionadas</h2>
				<p id="divEnferm_Relacionadas" class="descrEnfer">
				   Sin enfermedades relacionadas
				</p>
			</div>
              
			<div id="Refer"  class="group-enfermedad">
				<h2>Referencias</h2>
				<p id="divReferencias" class="descrEnfer">
				   Sin referencias 
				</p>
			</div>


			</div>
		
		</div>

</div>

<script>

$(document).ready(function(e) {  
	CargarDatos_Enfermedad("<?php echo $_GET["enf_id"]?>");
});


</script>


<div id="splash">
Cargando
</div>

<div id="main" class="clContenedor">
     
        <div class="clRow"  >
			<h1>Nombre de la enfemedad</h1>
		</div>
        
		<div class="clRow"  >
			<div id="divFichaEnfermCons"><p>Ejemplo de ficha tecnica de la ENFERMEDAD</p><img  src="../recursos/ficTec.jpg" width="426" height="118" alt="alt 500X300"></div>
		</div>
        
		<div class="clRow"  >
			<div class="clColum-esc-2 clColum-mov-6"  >
				<div class="clRow">
						<div id="divMenuEnferCons" class="clMenuLateral">
                        	<label>MENU</label>
							<ul>                              
							  <li><a href="#divCuerpoEnferCons" >Inicio</a></li>
							  <li><a href="#divCuerpoEnferCons ">Historia</a></li>
							  <li><a href="#divHistoria "> Sintomas</a></li>
							  <li><a href="#divSintomas "> Enfermedades relacionadas</a></li>  
							  <li><a href="#DivEnferRelaci "> Enlaces Externos</a></li>  
							  <li><a href="#DivEnlaces"> Otros</a></li> 
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
				<h2>Historia </h2>
				<div id="divHistoria" class="descrEnfer">
				Datos
				</div>
			</div>

			<div>
				<h2>Sintomas </h2>
				<div id="divSintomas" class="descrEnfer">
				Datos
				</div>
			</div>

			<div>
				<h2>Enfermedades Relacionadas </h2>
				<div id="DivEnferRelaci" class="descrEnfer">
				Datos
				</div>
			</div>

			<div>
				<h2>Enlaces Externos </h2>
				<div id="DivEnlaces" class="descrEnfer">
				Datos
				</div>
			</div>
			<div>
				<h2>Otros </h2>
				<div id="DivOtros" class="descrEnfer">
				Datos
				</div>
			</div>
			
			<div>
				<h2>Comentar </h2>				
				<textarea name="textarea" class="jqte-test"></textarea>	
                <input id="btnGuardarComentario" type="button" value="Guardar"/>
                <script>
					$('.jqte-test').jqte();
				</script>
			</div>
            
			</div>
		
		</div>
</div>

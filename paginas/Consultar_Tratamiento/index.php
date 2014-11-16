
<script>

$(document).ready(function(e) {  
	CargarDatos_Tratamiento("<?php echo $_GET["id_trat"]?>");
});

</script>


<div id="splash">
Cargando
</div>    
    

<div class="clContenedor" id="main">
	<div class="clRow clTexto-cen"  >
		<h1>Nombre del Tratamiento</h1>
	</div>
	<div class="clRow clTexto-cen"  >
		<div id="divFichaTrataCons">&nbsp;Datos en ficha tecnica del tratamiento</div>
	</div>
	<div class="clRow"  >
			<div class="clColum-esc-2 clColum-mov-6"  >
				<div class="clRow">
					<div id="divMenuEnferCons" class="clMenuLateral" >
						<ul>
						  <li><a href="#divCuerpoConsTrat" >Inicio</a></li>
						  <li><a href="#divTipo">Tipo</a></li>
						  <li><a href="#divAplicacion"> Forma de Aplicarlo</a></li>
						  <li><a href="#DivEfecConsTrat"> Efectos Adversos</a></li>  
						  <li><a href="#DivEnlacesConsTrat"> Enlaces Externos</a></li>  
						  <li><a href="#DivOtrosConsTrat"> Otros</a></li> 
						</ul>
					</div>
				</div>
			</div>
			<div class="clColum-esc-3 clColum-mov-6"  >
				<div>
					<h2>Descripcion </h2>
					<div id="divDescriConsTrat" class="descrEnfer">
					Datos
					</div>
				</div>

				<div>
					<h2>Tipo </h2>
					<div id="divTipo" class="descrEnfer">
					Datos
					</div>
				</div>

				<div>
					<h2>Forma de Aplicarlo</h2>
					<div id="divAplicacion" class="descrEnfer">
					Datos
					</div>
				</div>

				<div>
					<h2>Efectos Segundarios</h2>
					<div id="DivEfecConsTrat" class="descrEnfer">
					Datos
					</div>
				</div>

				<div>
					<h2>Referencias</h2>
					<div id="DivReferencias" class="descrEnfer">
					Datos
					</div>
				</div>               
				
                <div id="mantTrata"></div>
				
			</div>
	</div>
<?php include 'paginas/Componentes/comentarios/index.php';?>
</body>
</html>

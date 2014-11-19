
<script>

$(document).ready(function(e) {  
	CargarDatos_Tratamiento("<?php echo $_GET["id_trat"]?>");
});

</script>


<div id="splash">
Cargando
</div>    
    

<div class="clContenedor" id="main">
			
    
        
	<div class="clRow clTexto-cen group-enfermedad">
        
        <h2 id="Nombre_Tratamiento">Nombre del tratamiento</h2>
    
			<div class="clColum-esc-2 clColum-mov-6"  >
				<div class="clRow">
                     <div class="clColum-esc-1"></div>
                     <div class="clColum-esc-4">
                          <div id="divMenuEnferCons" class="clMenuLateral group-enfermedad" >
                            <h2>MENU</h2>
                            <ul>
                              <li><a href="#divCuerpoConsTrat" >Inicio</a></li>
                              <li><a href="#divAplicacion"> Forma de Aplicarlo</a></li>
                              <li><a href="#DivEfecConsTrat"> Efectos Adversos</a></li>  
                              <li><a href="#DivEnlacesConsTrat"> Enlaces Externos</a></li>  
                              <li><a href="#DivOtrosConsTrat"> Otros</a></li> 
                            </ul>
                        </div>
                     </div>
                     <div class="clColum-esc-1"></div>
				</div>
			</div>
			<div class="clColum-esc-3 clColum-mov-6"  >
				<div class="group-enfermedad">
					<h2>Descripcion </h2>
					<div id="divDescriConsTrat" class="descrEnfer">
					Datos
					</div>
				</div>

				<div class="group-enfermedad">
					<h2>Forma de Aplicarlo</h2>
					<div id="divAplicacion" >
					Datos
					</div>
				</div>

				<div class="group-enfermedad">
					<h2>Efectos Segundarios</h2>
				     <div id="DivEfecConsTrat" >
					   Datos
					</div>
				</div>

				<div class="group-enfermedad">
					<h2>Referencias</h2>
					<div id="DivReferencias" >
					Datos
					</div>
				</div>               
				
                <div id="mantTrata"></div>
				
			</div>
	</div>
<div class="clRow clTexto-cen group-enfermedad">
<h2>Comentarios</h2>
<?php include 'paginas/Componentes/comentarios/index.php'; ?>
</div>
</body>
</html>

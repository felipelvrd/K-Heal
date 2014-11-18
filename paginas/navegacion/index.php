<a href="#"><img id="imgBarraSuperior" src="recursos/Logo2.png" onClick="$(location).attr('href', '?p=principal');" alt="imgKheal"></a>
<ul>
<div id="dvBarraNavegacion"></div>
</ul>


  <div id="venModaRegistrar" class="Regis"><!-- este seria el apartado de la ventana modal de REGISTRO -->
	<div class="dvTrianguloBorde" id='tbRegistrar'>
    <div class="dvTriangulo" id="trRegistrar"></div>
    <div class="dvFlotante" id="dvRegistrar">
			<div>
				 <form>             
					<div >
						 <label for="txtCorreoRegistro">Correo Electronico</label><input type="text"  id="txtCorreoRegistro"/>
					</div>                        
					<div >
						 <label for="txtNombreRegistro">Nombre</label><input type="text"  id="txtNombreRegistro" />
					</div> 
					<div >
						 <label for="txtContrasenaRegistro">Contraseña</label><input type="password"  id="txtContrasenaRegistro" />
					</div> 
					<div >
						 <label for="txtReContrasenaRegistro">Verifique</label><input type="password"  id="txtReContrasenaRegistro" />
					</div> 
				</form>
			</div>
			<div style="float:right; margin-top:20px; margin-bottom:10px;"> 
                 <button type="button" id="btnAceptarRegistro">Registrar</button>
			</div>
        </div>
    </div>
						
</div>


<div id="venModaNotif" class="Notif"> <!-- este seria el apartado de la ventana modal de NOTIFICACIONES--> 
	<div class="dvTrianguloBorde" id='tbNotif'>
    <div class="dvTriangulo" id="trNotif"></div>
    <div class="dvFlotante" id="dvNotif">	
    
    <div>		
			<div id="divCuerpoNotif">
			    <ul>
				 <div id='dvNotificaciones'></div>
				</ul>
			</div>			
	</div>
    </div></div></div>

	<div id="venModaIngresar" class="login"><!-- este seria el apartado de la ventana modal de INGRESAR-->
		
        <div class="dvTrianguloBorde" id='tbLogin'>
    <div class="dvTriangulo" id="trLogin"></div>
    <div class="dvFlotante" id="dvLogin">	
        <div >
			<div>
				 <form >                    
					<div >
						 <label for="txtUsuarioLogin">Usuario</label><input type="text"  id="txtUsuarioLogin" value="" />
					</div>                        
					<div >
						 <label for="txtCotrasenaLogin">Contraseña</label><input type="password"  id="txtCotrasenaLogin" />
					</div> 
				</form>
			</div>
			<div style="float:right; margin-top:20px; margin-bottom:10px;" > 
                 <button type="button" id="btnAceptarLogin">ACEPTAR</button>
			</div>
			</div>						
</div>
</div></div>
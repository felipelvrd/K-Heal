<img id="imgBarraSuperior" src="recursos/Logo2.png"  alt="imgKheal"> 
<ul>
<div id="dvBarraNavegacion"></div>
</ul>


  <div id="venModaRegistrar"><!-- este seria el apartado de la ventana modal de REGISTRO -->
	<div class="dvTrianguloBorde" id='tbRegistrar'>
    <div class="dvTriangulo" id="trRegistrar"></div>
    <div class="dvFlotante" id="dvRegistrar">		
			<div>
				<h4>
					REGISTRO
				</h4>
			</div>
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
			<div > 
                 <button type="button" id="btnAceptarRegistro">ACEPTAR</button>
			</div>
			<div > 
                 <button type="button" id="btnRegistroFace">FACEBOOK</button>
			</div>
			<div > 
                 <button type="button" id="btnRegistroGoogle">GOOGLE</button>
			</div>
			<div>
            <span id="spnMensajeRegistro"></span>
            </div>	
        </div>
    </div>
						
</div>


<div id="venModaNotif"> <!-- este seria el apartado de la ventana modal de NOTIFICACIONES--> 
	<div class="dvTrianguloBorde" id='tbNotif'>
    <div class="dvTriangulo" id="trNotif"></div>
    <div class="dvFlotante" id="dvNotif">	
    
    <div>		
			<div>
				<h4>
					NOTIFICACIONES
				</h4>
			</div>
			<div id="divCuerpoNotif">
			    <ul>
				 <div id='dvNotificaciones'></div>
				</ul>
			</div>			
	</div>
    </div></div></div>

	<div id="venModaIngresar"><!-- este seria el apartado de la ventana modal de INGRESAR-->
		
        <div class="dvTrianguloBorde" id='tbLogin'>
    <div class="dvTriangulo" id="trLogin"></div>
    <div class="dvFlotante" id="dvLogin">	
        <div >
			<div >
				<h4 id="myModalLabel">
					ENTRAR
				</h4>
			</div>
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
			<div  > 
                 <button type="button" id="btnAceptarLogin">ACEPTAR</button>
			</div>
			<div>
            <span id="spnMensajeLogin"></span>
            </div>		</div>						
</div>
</div></div>
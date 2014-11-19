
<div class="clContenedor">
    	<div class="clRow group" >
		<h1 class="clTexto-cen">Administracion</h1>								
		</div>
		
       <div class="clRow group">
         <h2>Sugerencias</h2>
         <div class="clColum-esc-1"></div>
           <div class="clColum-esc-4" style="min-height:200px;">
             <table id="Sugerencias" class="display" cellspacing="" width="98%">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
             </table>
           </div>
          <div class="clColum-esc-1"></div>
       </div>
        <div class="clRow group">
        <h2>Mantenimiento de enfermedades</h2>		
        
			<div class="clColum-esc-3 clColum-mov-6">	
                <div class="clRow group" style="padding:3%; width:90%;">
                       <table id="example" class="display" cellspacing="" width="98%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>TipoEnfermedad</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                        </table>
                </div>
       
			</div>
            
			<div class="clColum-esc-3 clColum-mov-6">
                
                 <div class="clRow">
                  
                    <div class="clColum-esc-1 clColum-mov-2">
                     <button type="button"
                       id="btnAgregarEnfer" onClick="Agregar()">Agregar</button>
                    </div>
                   
                    <div class="clColum-esc-1 clColum-mov-2"   >
                     <button  type="button" id="btnModificarEnfer" onClick="Modificar()">Modificar</button>	
                    </div>
                   
                    <div class="clColum-esc-1 clColum-mov-2"   >
                     <button  type="button" id="btnEliminarEnfer" onClick="Eliminar_Enfermedad()">Eliminar</button>
                    </div>
                    
                </div> 
                
                <div class="clRow group">
                 <h2 id="h3_Accion" class="clTexto-cen" style="">-----</h2> 
                      
                   <div id="divCampos" style="display:none;">
   
                    <div class="clRow" >
                    <div id="divImgPilar1" class="clColum-esc-1"></div>
                     <div id="divImg" class="clColum-esc-3 form-control" style="display:none;">
                      <label>Imagen de la enfermedad</label> 
                      <img id="imgConsulta"  class="dz_small" style="width:95%;">
                     </div>
                    <div id="divdzEnfermedad" class="clColum-esc-4" style="display:none;">
                        <div class="form-control">
                         <label id="label_dzEnfermedad">Imagen de la enfermedad</label> 
                         <form id="dzEnfermedad" action="php/subir1.php" class="dropzone dz_small" 
                                                                         method="post" 
                                                                         enctype="multipart/form-data"> 
                             <input id="input_dzEnfermedad" name="data" type="hidden" value="">
                             <input id="input_url" name="url" type="hidden" value="">
                             <input id="dzAccion" name="accion" type="hidden" value="Enfermedades">  
                             <div class="fallback">
                             <input name="file" type="file" multiple />
                             </div>
                         </form>
                        </div>
                     </div>
                     <div id="divImgPilar2" class="clColum-esc-1"></div>
                    </div>
                  
                    <div class="clRow"   >
                        <div class="clColum-esc-3 clColum-mov-6"   >
                            <div  id="divEnfeNombre" class="form-control">							
                                <label>Nombre</label> 
                                <input type="text"  id="txtNombEnfer" required/>                            
                            </div>   
                        </div>
                        <div class="clColum-esc-3 clColum-mov-6"   >  
                            <div  id="divEnfeFamilia" class="form-control">
                                <label>TipoEnfermedad</label>
                                <input type="text"  id="txtTipoEnfermedad" required/>
                            </div>
                        </div>
                    </div>
                    <div class="clRow"   >
                        <div class="clColum-esc-6 clColum-mov-6"   >
                            <div id="divEnfeDescri" class="form-control">
                                <label>Descripcion </label>		
                                <textarea name="textarea" class="jqte-Descripcion" id="jqte-Descripcion"></textarea>	
                                <script>
                                    $('.jqte-Descripcion').jqte();
                                </script>		
                            </div>	
                        </div>
                    </div>
                    <div class="clRow"   >
                        <div class="clColum-esc-6 clColum-mov-6"   >
                            <div id="divEnfeHistoria" class="form-control">
                                <label>Diagnostico </label>		
                                <textarea name="textarea" class="jqte-Diagnostico" id="jqte-Diagnostico"></textarea>	
                                <script>
                                    $('.jqte-Diagnostico').jqte();
                                </script>
                            </div>
                        </div>
                        <div class="clColum-esc-6 clColum-mov-6"   >
                            <div id="divEnfeSintoma" class="form-control">
                                 <label>Sintomas</label>		
                                <textarea name="textarea" class="jqte-Sintomas" id="jqte-Sintomas"></textarea>	
                                <script>
                                    $('.jqte-Sintomas').jqte();
                                </script>
                            </div>	
                        </div>
                    </div>
                    <div class="clRow"   >
                        <div class="clColum-esc-6 clColum-mov-6"   >
                            <div id="divEnfeRelacion" class="form-control">
                            <label>Prevención</label>		
                            <textarea name="textarea" class="jqte-Prevencion" id="jqte-Prevencion"></textarea>	
                            <script>
                              $('.jqte-Prevencion').jqte();
                            </script>
                        </div>
                        </div>
                       
                        <div class="clColum-esc-6 clColum-mov-6" >
                            <div id="divEnfeEnlaces" class="form-control">
                                <label>Referencias</label>
                                <textarea name="textarea" class="jqte-Referencias" id="jqte-Referencias"></textarea>	
								<script>
                                  $('.jqte-Referencias').jqte();
                                </script>
                            </div>
                        </div>
                        
                        <div class="clColum-esc-6 clColum-mov-6" >
                            <div id="divEnfeEnlaces" class="form-control">
                                <label>Enfermedades_Relacionadas</label>
                                <textarea name="textarea" class="jqte-Enfermedades_Relacionadas" id="jqte-Enfermedades_Relacionadas"></textarea>	
								<script>
                                  $('.jqte-Enfermedades_Relacionadas').jqte();
                                </script>
                            </div>
                        </div>
                        
                    </div>
                    <div class="clRow" >
                        <div class="clColum-esc-3 clColum-mov-6"   >
                            <div id="divEnfeOtros" class="form-control">
                                <label>Etiquetas de busqueda</label>
                                <textarea id="txtEtiquetas" name="textarea" required></textarea>	
                            </div>
                        </div>
                        
                         <div class="clColum-esc-3 clColum-mov-6"   >
                            <div id="divEnfeEstado" class="form-control">
                                <label>Estado</label>     
                                <SELECT id="cbEstaEnfer" SIZE=1> 
                                    <OPTION  value="Activo" class="form-control" >Activo</OPTION>
                                    <OPTION  value="Inactivo" class="form-control" >Inactivo</OPTION>
                                </SELECT> 
                            </div>
                        </div>
                        
                        <div class="clColum-esc-6 clColum-mov-6" style="text-align:center; margin-top:25px;">
                         <button type="button" id="btnGuardar" onClick="Guardar()">Guardar</button>
                       </div>
               
                  
                    </div>
                    
               
                </div>
               
              </div>
                   
			</div>
          
    </div>

  </div>
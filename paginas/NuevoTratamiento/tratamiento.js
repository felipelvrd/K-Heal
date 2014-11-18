// JavaScript Document

function registrarTratamiento(enf_id){
       var parametros = {
		   "IdEnfermedad" : enf_id,
		   "Nombre" : $('#txNombre').val(),
		   "Descripcion" : $('#taDescripcion').val(),
		   "Indicaciones" : $('#taFormaAplicarlo').val(),
		   "Efectos_Segundarios" : $('#taEfectosSecundarios').val(),
		   "Referencias" : $('#taReferencias').val()
       };
	   
       $.ajax({
               data:  parametros,
               url:   'paginas/NuevoTratamiento/registrarTratamiento.php',
               type:  'post',
               beforeSend: function () {
                       $("#dvMsg").html("Espere por favor...");
               },
               success:  function (response) {
                       $('#dvMsg').html(response);
					    url = "?p=Listar_Tratamientos&enf_id="+enf_id;
      					$(location).attr("href", url);
               }
       });
}

function modificarTratamiento(id_trat){
	var parametros = {
		   "Id" : id_trat,
		   "Nombre" : $('#txNombre').val(),
		   "Descripcion" : $('#taDescripcion').val(),
		   "Indicaciones" : $('#taFormaAplicarlo').val(),
		   "Efectos_Segundarios" : $('#taEfectosSecundarios').val(),
		   "Referencias" : $('#taReferencias').val()
       };
	   
       $.ajax({
               data:  parametros,
               url:   'paginas/NuevoTratamiento/modificarTratamiento.php',
               type:  'post',
               beforeSend: function () {
                       $("#dvMsg").html("Espere por favor...");
               },
               success:  function (response) {
                       $('#dvMsg').html(response);
					    url = "?p=Listar_Tratamientos&enf_id="+$_GET('enf_id');
      					$(location).attr("href", url);
               }
       });
}

$(document).ready(function(e) {
	if($_GET("id_trat")!=null){
		$('#hTitulo').html("Modificar Tratamiento");
		$('#btRegistarTratamiento').html("Modificar <br>Tratamiento");
    	cargarTratamiento($_GET("id_trat"));
		$('#btRegistarTratamiento').click(function(){modificarTratamiento($_GET('id_trat'));}); 
		
	}
	else{
		$('#btRegistarTratamiento').click(function(){registrarTratamiento($_GET('enf_id'));}); 
	}
	
});

function cargarTratamiento(id_trat){
	var parametros = {
		   "id" : id_trat,
		   "accion" : 3
       };
       $.ajax({
               data:  parametros,
               url:   'php/tratamientos.php',
               type:  'post',
			   dataType:'json',
               success:  function (response) {
				  $('#txNombre').val(response.nombre);
				  $('#taDescripcion').jqteVal(response.descripcion);
				  $('#taFormaAplicarlo').jqteVal(response.indicaciones);
				  $('#taEfectosSecundarios').jqteVal(response.efectos_segundarios);
				  $('#taReferencias').jqteVal(response.refencias);				   
               }
       });
}

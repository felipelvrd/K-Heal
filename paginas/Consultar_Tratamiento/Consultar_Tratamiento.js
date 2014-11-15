// JavaScript Document
function CargarDatos_Tratamiento(id){
	   var parametros = {
		   "id" : id,
		   "accion" : 3
       };
       $.ajax({
               data:  parametros,
               url:   'php/tratamientos.php',
               type:  'post',
               beforeSend: function () {
				       $('#main').css("display","none");
                       $("#splash").html("Espere por favor...");
               },
               success:  function (response) {
                       $('#main').css("display","inline");
					   $('#splash').css("display","none");
					   
					   $("#divDescriConsTrat").html(response.descripcion);
					   $("#divAplicacion").html(response.indicaciones);
					   $("#DivEfecConsTrat").html(response.efectos_segundarios);
					   $("#DivReferencias").html(response.referencias);	   
               }
       });
}
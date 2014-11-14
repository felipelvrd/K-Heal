// JavaScript Document
function CargarDatos_Enfermedad(id){
	   var parametros = {
		   "id" : id,
		   "accion" : 3
       };
       $.ajax({
               data:  parametros,
               url:   'php/enfermedades.php',
               type:  'post',
               beforeSend: function () {
				       $('#main').css("display","none");
                       $("#splash").html("Espere por favor...");
               },
               success:  function (response) {
                       $('#main').css("display","inline");
					   $('#splash').css("display","none");
					   $('#divDescriEnferCons').html('<p>'+response+'</p>');
               }
       });
}
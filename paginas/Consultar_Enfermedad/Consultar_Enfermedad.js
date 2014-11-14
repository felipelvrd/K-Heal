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
					   
					   $('#Nombre_Enfermedad').html(response.nombre); 
					   $('#divDescriEnferCons').html(response.descripcion);
					   $('#divSintomas').html(response.sintomas);
					   $('#divDiagnostico').html(response.diagnostico);
					   $('#divPrevencion').html(response.prevencion);
					   $('#link_Tratamientos').attr("href","index.php?p=Listar_Tratamientos&n=" + response.nombre+"&enf_id="+id); 
               }
       });
}
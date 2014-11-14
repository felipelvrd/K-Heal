// JavaScript Document
function CargarDatos_Tratamiento(id){
	   var parametros = {
		   "idEnfermedad" : id,
		   "accion" : 2
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
					   
					   for(i=0;i<response.length;i++)
					   { 
					     $("#divListaTrata").append("<div id='Resul"+i+"'style='margin-top:20px'></div>"); 
					     $("#Resul"+i).load('paginas/Componentes/Componentes.php #cmp_Tratamiento',{d:response[i].descripcion,n:response[i].nombre,id:response[i].id});  
					   }
					   
               }
       });
}
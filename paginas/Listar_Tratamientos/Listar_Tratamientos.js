// JavaScript Document
function Listar_Tratamientos(id,NombreEnf){
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
					     $("#Resul"+i).load('paginas/Componentes/Componentes.php #cmp_Tratamiento',{d:response[i].descripcion,n:response[i].nombre,id:response[i].id, idUsu:response[i].idUsu, idEnf:response[i].idEnf, n:$_GET("n")});  
					   }
					   
					   $("#h2_Enfermedad_Consultada").html(NombreEnf);
					   
					   if(response.length==0){
					   		 $("#h2lTratamientos").html("No hay tratamientos publicados");
					   }
					   
               }
       });
}

function nTratamiento(enf_id,id_enf){
       $.ajax({
               url:   'paginas/Listar_Tratamientos/isLogin.php',
               type:  'post',

               success:  function (response) {
                       if(response == 1){
					   		url = "?p=NuevoTratamiento&enf_id="+enf_id+"&n="+id_enf;
							$(location).attr("href", url);
					   }
						else
							msgMostrar("Necesita acceder para poder publicar un tratamiento",1);
               }
       });
}
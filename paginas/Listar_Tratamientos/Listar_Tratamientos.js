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
					   
					   alert(response); 
					   
					   $("#section" + s).append("<div id='Resul"+i+"'style='margin-top:20px'></div>"); 
				     //$("#Resul"+i).load('paginas/Componente_Resultado.php?d='+itemsFound[i].description+'&n=test');
					 $("#Resul"+i).load('paginas/Componentes/Componentes.php #cmp_ResultadoBusqueda',{d:itemsFound[i].Descripcion,n:itemsFound[i].Nombre,id:itemsFound[i].Id});
               }
       });
}
// JavaScript Document

function votar(TipoEvaluacion,idTratamiento){
	   var parametros = {
		   "TipoEvaluacion" : TipoEvaluacion,
		   "idTratamiento" :idTratamiento 
       };
       $.ajax({
               data:  parametros,
               url:   'paginas/votos/votar.php',
               type:  'post',
               beforeSend: function () {
                       $("#tmp").html("Espere por favor...");
               },
               success:  function (response) {
                       $('#tmp').html(response);
               }
       });
}


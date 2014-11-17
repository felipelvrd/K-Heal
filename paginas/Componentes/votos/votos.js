// JavaScript Document

function votar(TipoEvaluacion,idTratamiento,int){
	   var parametros = {
		   "TipoEvaluacion" : TipoEvaluacion,
		   "idTratamiento" :idTratamiento 
       };
       $.ajax({
               data:  parametros,
               url:   'paginas/Componentes/votos/votar.php',
               type:  'post',
               success:  function (response) {
				   		msgMostrar(response,3);
                       //$('#tmp'+int).html(response);
					   nVotos('N',idTratamiento,int);
					   pVotos('P',idTratamiento,int);
               }
       });
}


function nVotos(TipoEvaluacion,idTratamiento,int){
		var parametros = {
		   "TipoEvaluacion" : TipoEvaluacion,
		   "idTratamiento" :idTratamiento 
       };
       $.ajax({
               data:  parametros,
               url:   'paginas/Componentes/votos/nVotos.php',
               type:  'post',
               beforeSend: function () {
                       //$("#spVotosNocure"+int).html("0");
               },
               success:  function (response) {
                       $('#spVotosNocure'+int).html(response);
               }
       });
}

function pVotos(TipoEvaluacion,idTratamiento,int){
		var parametros = {
		   "TipoEvaluacion" : TipoEvaluacion,
		   "idTratamiento" :idTratamiento 
       };
       $.ajax({
               data:  parametros,
               url:   'paginas/Componentes/votos/nVotos.php',
               type:  'post',
               beforeSend: function () {
                     //  $("#spVotosMecure"+int).html("0");
               },
               success:  function (response) {
                       $('#spVotosMecure'+int).html(response);
               }
       });
}


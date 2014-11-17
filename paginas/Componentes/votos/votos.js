// JavaScript Document

function votar(TipoEvaluacion,idTratamiento,int){
	   var parametros = {
		   "TipoEvaluacion" : TipoEvaluacion,
		   "idTratamiento" :idTratamiento 
       };
       $.ajax({
               data:  parametros,
               url:   'paginas/Componentes/votos/votar.php',
			   dataType: 'json',
               type:  'post',
               success:  function (response) {
				   	   msgMostrar(response.msg,response.tipo);
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
               success:  function (response) {
                       $('#spVotosMecure'+int).html(response);
               }
       });
}


// JavaScript Document

function votarC(TipoEvaluacion,IdComentario,int){
	   var parametros = {
		   "TipoEvaluacion" : TipoEvaluacion,
		   "IdComentario" :IdComentario 
       };
       $.ajax({
               data:  parametros,
               url:   'paginas/Componentes/votosComentarios/votar.php',
               type:  'post',
               success:  function (response) {
                       $('#tmp'+int).html(response);
					   nVotosC('N',IdComentario,int);
					   pVotosC('P',IdComentario,int);
               }
       });
}


function nVotosC(TipoEvaluacion,IdComentario,int){
		var parametros = {
		   "TipoEvaluacion" : TipoEvaluacion,
		   "IdComentario" :IdComentario 
       };
       $.ajax({
               data:  parametros,
               url:   'paginas/Componentes/votosComentarios/nVotos.php',
               type:  'post',
               success:  function (response) {
                       $('#spVotosCNo'+int).html(response);
               }
       });
}

function pVotosC(TipoEvaluacion,IdComentario,int){
		var parametros = {
		   "TipoEvaluacion" : TipoEvaluacion,
		   "IdComentario" :IdComentario 
       };
       $.ajax({
               data:  parametros,
               url:   'paginas/Componentes/votosComentarios/nVotos.php',
               type:  'post',
               success:  function (response) {
                       $('#spVotosCsi'+int).html(response);
               }
       });
}


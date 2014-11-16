

function comentar(IdTratamientos){
	   var parametros = {
		   "Descripcion" : $('#taComentario').val(),
		   "IdTratamientos" :IdTratamientos,
		   "accion" : 1
       };
       $.ajax({
               data:  parametros,
               url:   'paginas/Componentes/comentarios/comentario.php',
               type:  'post',
               beforeSend: function () {
                       $("#dvMensajeComentario").html("Espere por favor...");
               },
               success:  function (response) {
                       $('#dvMensajeComentario').html(response);
					   listarComentarios(IdTratamientos);
               }
       });
}

function listarComentarios(IdTratamientos){
	   var parametros = {
		   "Descripcion" :'',
		   "IdTratamientos" :IdTratamientos,
		   "accion" : 2
       };
       $.ajax({
               data:  parametros,
               url:   'paginas/Componentes/comentarios/comentario.php',
               type:  'post',
               success:  function (response) {
                       $('#dvListaComentarios').html(response);
               }
       });
}
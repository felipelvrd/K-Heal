// JavaScript Document
function Ingresar()
{
	$("#venModaIngresar").removeClass("Oculto");
}

function Registrar()
{
	$("#venModaRegistrar").removeClass("Oculto");
}
function Notificaciones()
{
	$("#venModaNotif").removeClass("Oculto");
}

function Salir()
{
	cargarBarra(1);
}

$(document).ready(function(){ 
	$("#btnAceptarIngreso").click(function (){		
		//$("#venModaIngresar").addClass("Oculto");
		});
		
	$("#btnAceptarRegistro").click(function (){			
		//$("#venModaRegistrar").addClass("Oculto");
		});
	$("#btnRegistroFace").click(function (){			
		$("#venModaRegistrar").addClass("Oculto");
		});
	$("#btnRegistroGoogle").click(function (){			
		$("#venModaRegistrar").addClass("Oculto");
		});
	$("#btnCerrarModal").click(function (){				
		$("#venModaIngresar").addClass("Oculto");
		});
	$("#btnCerrarModal2").click(function (){			
		$("#venModaRegistrar").addClass("Oculto");
		});
	$("#btnCerrarNotif").click(function (){			
		$("#venModaNotif").addClass("Oculto");
		});
	//cargarBarra(0);
});

function Navegar(uri)
{
	$("#divFramePrincipal").load(uri);	
}

function Navegar2(uri)
{
	$("#divFrameAdmin").load(uri);	
}

function cargarBarra(funcion){	 
 		var parametros = {
		   "funcion" : funcion
       };  
       $.ajax({
		   	   data:  parametros,
               type:  'post',
               url:   'paginas/navegacion/barrarnavegacion.php',
               beforeSend: function () {
                       $("#dvBarraNavegacion").html("Espere por favor...");
               },
               success:  function (response) {
                       $('#dvBarraNavegacion').html(response);
               }
       });
}
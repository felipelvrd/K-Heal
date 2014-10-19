

// pagina de Inicio
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
});

function Navegar(uri)
{
	$("#divFramePrincipal").load(uri);	
}

function Navegar2(uri)
{
	$("#divFrameAdmin").load(uri);	
}







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
	cargarNotificaciones();
	
}

function Salir()
{
	cargarBarra(1);
}

function borrarNoti(idNotifi){
	var parametros = {
		   "Id" : idNotifi
       };  
       $.ajax({
		   	   data:  parametros,
               type:  'post',
               url:   'paginas/navegacion/borrarNotif.php',
               success:  function (response) {
                       cargarNotificaciones();
					   NotiPen();
               }
       });
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
	cargarBarra(0);
});

function NotiPen(){
 		var parametros = {
		   "accion" : 1
       };  
       $.ajax({
		   	   data:  parametros,
               type:  'post',
               url:   'paginas/navegacion/listarNotificaciones.php',
               success:  function (response) {
				   if(response>0)
                       $('#aNotificaciones').addClass("TNoficaciones");
					else
					   $('#aNotificaciones').removeClass("TNoficaciones");
					
               }
       });
}

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
					   NotiPen();
               }
       });
}

function cargarNotificaciones(){	 
 		var parametros = {
		   "accion" : 0
       };  
       $.ajax({
		   	   data:  parametros,
               type:  'post',
               url:   'paginas/navegacion/listarNotificaciones.php',
               beforeSend: function () {
                       $("#dvNotificaciones").html("Espere por favor...");
               },
               success:  function (response) {
                       $('#dvNotificaciones').html(response);
               }
       });
}
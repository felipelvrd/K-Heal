// JavaScript Document
function Ingresar()
{
	$("#venModaIngresar").fadeToggle(200);
}

function Registrar()
{
	$("#venModaRegistrar").fadeToggle(200);
}
function Notificaciones()
{
	$("#venModaNotif").fadeToggle(200);
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

	$("#venModaRegistrar").hide();
	$("#venModaIngresar").hide();
	$("#venModaNotif").hide();
	
	
	
	$(document).click(function() { 		
		if ($("#venModaRegistrar").is(":visible"))
			$("#venModaRegistrar").fadeToggle(500);
		if ($("#venModaIngresar").is(":visible"))
			$("#venModaIngresar").fadeToggle(500);
		if ($("#venModaNotif").is(":visible"))
			$("#venModaNotif").fadeToggle(500);
		
	 }); 
	cargarBarra(0);
});

function cargarEventos(){
	$('.login').click(function(e){ 
		e.stopPropagation();
		if ($("#venModaRegistrar").is(":visible"))
			$("#venModaRegistrar").fadeToggle(500);
		if ($("#venModaNotif").is(":visible"))
			$("#venModaNotif").fadeToggle(500);
 	});
	$('.Notif').click(function(e){ 
		e.stopPropagation(); 
		if ($("#venModaRegistrar").is(":visible"))
			$("#venModaRegistrar").fadeToggle(500);
		if ($("#venModaIngresar").is(":visible"))
			$("#venModaIngresar").fadeToggle(500);
 	});
	$('.Regis').click(function(e){ 
		e.stopPropagation();
		if ($("#venModaIngresar").is(":visible"))
			$("#venModaIngresar").fadeToggle(500); 
		if ($("#venModaNotif").is(":visible"))
			$("#venModaNotif").fadeToggle(500);
 	});
}

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
					   cargarEventos();
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
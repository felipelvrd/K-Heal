// JavaScript Document

$(document).ready(function() {
	$('#btnAceptarLogin').click(function (){
		try{
			var contrasena = $('#txtCotrasenaLogin').val();
			var email =$('#txtUsuarioLogin').val();

			if(email=="")
				throw "El correo electronico no puede ir en blanco";
			if(contrasena=="")
				throw "La contraseña no puede ir en blanco";

			logear(email,contrasena);
		}
		catch(ex){
			msgMostrar(ex,1);
		}
		});
});

function logear(email,contrasena){
       var parametros = {
		   "email" : email,
		   "contrasena" : $.sha256(contrasena)
       };
	   
       $.ajax({
               data:  parametros,
               url:   'paginas/navegacion/login.php',
               type:  'post',
			   dataType:'json',
               success:  function (response) {
                       msgMostrar(response.msg,response.tipo);
					   cargarBarra(0);
					   $("#venModaIngresar").hide();
					   location.reload();
               }
       });
}
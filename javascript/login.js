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
			$("#spnMensajeLogin").html(ex);
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
               url:   'php/login.php',
               type:  'post',
               beforeSend: function () {
                       $("#spnMensajeLogin").html("Espere por favor...");
               },
               success:  function (response) {
                       $('#spnMensajeLogin').html(response);
               }
       });
}
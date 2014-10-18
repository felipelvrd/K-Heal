// JavaScript Document

$(document).ready(function() {
	$('#btnAceptarRegistro').click(function (){
		try{
			var nombre=$('#txtNombreRegistro').val();
			var contrasena = $('#txtContrasenaRegistro').val();
			var email =$('#txtCorreoRegistro').val();
			var recontrasena = $('#txtReContrasenaRegistro').val();
			if(nombre=="")
				throw "Nombre no puede ir en blanco.";
			if(email=="")
				throw "El correo electronico no puede ir en blanco";
			if(contrasena=="")
				throw "La contraseña no puede ir en blanco";
			if(recontrasena!=contrasena)
				throw "Las contraseñas no coinciden";
			registrar(email,nombre,contrasena);
		}
		catch(ex){
			$("#spnMensajeRegistro").html(ex);
		}
		});
});

function registrar(email,nombre,contrasena){
       var parametros = {
		   "nombre" : nombre,
		   "email" : email,
		   "contrasena" : contrasena
       };
	   
       $.ajax({
               data:  parametros,
               url:   'php/registro.php',
               type:  'post',
               beforeSend: function () {
                       $("#spnMensajeRegistro").html("Espere por favor...");
               },
               success:  function (response) {
                       $('#spnMensajeRegistro').html(response);
               }
       });
}
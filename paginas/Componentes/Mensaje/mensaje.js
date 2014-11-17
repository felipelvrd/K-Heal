$(document).ready(function(e) {
    $('#dvMensaje').hide();
});

function msgMostrar(msg,tipo){
	if(tipo == 1)
		$('#dvMensaje').addClass("dvError");
	if(tipo == 2)
		$('#dvMensaje').addClass("dvExito");
	if(tipo == 3)
		$('#dvMensaje').addClass("dvInfo");
	$('#spMensaje').html(msg);
	$('#dvMensaje').slideDown(200);
	
	setTimeout(function() { $('#dvMensaje').slideToggle( 1000, function() {$('#dvMensaje').removeClass();}); }, 5000);
}

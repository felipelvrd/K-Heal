// JavaScript Document

function registrarTratamiento(enf_id){
       var parametros = {
		   "IdEnfermedad" : enf_id,
		   "Nombre" : $('#txNombre').val(),
		   "Descripcion" : $('#taDescripcion').val(),
		   "Indicaciones" : $('#taFormaAplicarlo').val(),
		   "Efectos_Segundarios" : $('#taEfectosSecundarios').val(),
		   "Referencias" : $('#taReferencias').val()
       };
	   
       $.ajax({
               data:  parametros,
               url:   'paginas/NuevoTratamiento/registrarTratamiento.php',
               type:  'post',
               beforeSend: function () {
                       $("#dvMsg").html("Espere por favor...");
               },
               success:  function (response) {
                       $('#dvMsg').html(response);
					    url = "?p=Listar_Tratamientos&enf_id="+enf_id;
      					$(location).attr("href", url);
               }
       });
}

function $_GET(param)
{
	url = document.URL;
	url = String(url.match(/\?+.+/));
	url = url.replace("?", "");
	url = url.split("&");
	x = 0;
	while (x < url.length)
		{
			p = url[x].split("=");
			if (p[0] == param)
			{
				return decodeURIComponent(p[1]);
		}
		x++;
	}
}
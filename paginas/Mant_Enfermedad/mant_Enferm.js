
var table;
var Seleccionado=null;
var Accion="---";

$(document).ready(function() {
   
  Dropzone.options.dzEnfermedad = {
	  maxFiles:1,
	  init: function() {
       this.on("success", function(file, responseText) {
       $("#input_url").val(responseText);
    });
  },
	  sending:function(e)
	  {	
		  if(Accion=="Modificar")
		  $("#input_dzEnfermedad").val(Seleccionado.ID);
	  }

	  };
  
   Accion = {"accion":2};
   
    table = $('#example').DataTable ({
		serverSide:true,
		ajax: {
				url: 'php/enfermedades.php',
				type: 'POST',
				data: Accion 
          },
		
		columns: [
		    { data: 'ID' },
			{ data: 'Nombre' },
			{ data: 'TipoEnfermedad' },
			{ data: 'Estado' }
	      ],

		ordering: false,
		language: {
					"lengthMenu": "Mostrando _MENU_ registros",
					"zeroRecords": "No se encontraron resultados",
					"info": "Mostrando pagina  _PAGE_ de _PAGES_",
					"infoEmpty": "Dato no disponible",
					"infoFiltered": "(Filtrando de un total de registros = _MAX_)",
					"loadingRecords": "Cargando..",
					"processing":     "Procesando...",
					"search":         "Buscar:",
					paginate: {
					"first":      "Primero",
					"last":       "Ultimo",
					"next":       "Siguiente",
					"previous":   "Anterior"
                     }
		  
                   },
	     responsive:true
      });
	  
	  
	 $('#example tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
               table.$('tr.selected').removeClass('selected');
			   $(this).addClass('selected');
			   var data = table.row('.selected').data();
			   CargarDatos(data);
			   Seleccionado=data;
			   Consultando();
        }
    } );
 
	$.fn.dataTable.ext.errMode = 'throw';
}); 


function Agregar()
{
	$("#divCampos").css("display","inherit");
	$("#h3_Accion").html("Agregando");
	$("#btnGuardar").css("display","inherit");
	LimpiarCampos();	
	Accion="Agregar";
	//$("#dzEnfermedad").css("display","inherit");
	$("#divImg").css("display","none");
	$("#divImgPilar1").css("display","inherit");
	$("#divImgPilar2").css("display","inherit");
	$("#divdzEnfermedad").removeClass("clColum-esc-3");
	$("#divImg").removeClass("clColum-esc-3");
	$("#divdzEnfermedad").addClass("clColum-esc-4");

}

function Modificar()
{
	if(Seleccionado==null)
	{
	   msgMostrar("Aviso ->  Seleccione el registro en la tabla que desea modificar",3);
	   return;
    }
	
	$("#divCampos").css("display","inherit");
	$("#btnGuardar").css("display","inherit");
	$("#h3_Accion").html("Modificando");	
	$("#label_dzEnfermedad").css("display","inherit");
	$("#label_dzEnfermedad").html("Nueva Imagen");
	Accion="Modificar";
	$("#divImg").css("display","inherit");
	$("#divdzEnfermedad").css("display","inherit");
	$("#dzEnfermedad").css("display","inherit");
	$("#divImgPilar1").css("display","none");
	$("#divImgPilar2").css("display","none");
	$("#divdzEnfermedad").removeClass("clColum-esc-4");
	$("#divdzEnfermedad").addClass("clColum-esc-3");
	$("#divImg").removeClass("clColum-esc-4");
	$("#divImg").addClass("clColum-esc-3");
}

function Consultando()
{
   $("#divCampos").css("display","inherit");
   $("#btnGuardar").css("display","none");
   $("#h3_Accion").html("Consultando");
   //$("#imgConsulta").attr("src",Seleccionado.Imagen);
   Accion="Consulta";
   $("#dzEnfermedad").css("display","none");
   $("#label_dzEnfermedad").css("display","none");
   $("#divImgPilar1").css("display","inherit");
   $("#divImgPilar2").css("display","inherit");
   $("#divImg").css("display","inherit");
   $("#divImg").addClass("clColum-esc-4");
}

function Estado_Inicial()
{
  $("#btnGuardar").css("display","none");
  $("#divCampos").css("display","none");
  Accion="----";
  $("#h3_Accion").html("-----");
  
}

function Modificar_Enfermedad()
{

	
		var json = {"descripcion":$('#jqte-Descripcion').val(),
	            "diagnostico":$('#jqte-Diagnostico').val(),
				"sintomas":$('#jqte-Sintomas').val(),
				"prevencion":$('#jqte-Prevencion').val(),
				"referencias":$('#jqte-Referencias').val(),
				"nombre":$('#txtNombEnfer').val(),
				"tipoenfermedad":$("#txtTipoEnfermedad").val(),
				"etiquetas":$("#txtEtiquetas").val(),
				"estado":$("#cbEstaEnfer").val()=="Activo"?"A":"I",
				"enfermedades_relacionadas":$("#jqte-Enfermedades_Relacionadas").val(),
				"imagen":$("#input_url").val(),
				"accion":1,
				"id":Seleccionado.ID  
			   }
			   

			   
			   
	 $.ajax({url:"php/enfermedades.php",
	        data:json,
			type:"POST",
			dataType:"json",
			success: function(response)
			{
				 msgMostrar(response,2);
				 table.ajax.reload(); 
				 LimpiarCampos();
				 Estado_Inicial();
			},
			error: function(response){msgMostrar(response.responseText,1);}
	       	
	      });
			   
	
 
}

function Eliminar_Enfermedad()
{
	if(Seleccionado==null)
	{
	   msgMostrar("Aviso ->  Seleccione el registro en la tabla que desea eliminar",3);
	   return;
    }
	
	if(confirm("Esta seguro que desea eliminar la enfermedad" +Seleccionado.Nombre)==false)
	return;
	
		var json = {
				"accion":4,
				"id":Seleccionado.ID  
			   }
			   
			   
	 $.ajax({url:"php/enfermedades.php",
	        data:json,
			type:"POST",
			dataType:"json",
			success: function(response)
			{
				 msgMostrar(response,2);
				 table.ajax.reload(); 
				 LimpiarCampos();
			},
			error: function(response){msgMostrar(response.responseText,1);}
	       	
	      });

}





function CargarDatos(data)
{
	$('#imgConsulta').css("display","inherit");
	$('#dzEnfermedad').css("display","none");
	
	
	//$('#imgConsulta').attr("href",data.Imagen);
	$('#jqte-Descripcion').jqteVal(data.Descripcion);
	$('#jqte-Diagnostico').jqteVal(data.Diagnostico);
	$('#jqte-Sintomas').jqteVal(data.Sintomas);
	$('#jqte-Prevencion').jqteVal(data.Prevencion);
	$('#jqte-Referencias').jqteVal(data.Referencias);
	$('#txtNombEnfer').val(data.Nombre);
	$("#txtTipoEnfermedad").val(data.TipoEnfermedad);
	$("#txtEtiquetas").val(data.Etiquetas);
	$("#jqte-Enfermedades_Relacionadas").jqteVal(data.Enfermedades_Relacionadas);
	
	if(data.Estado=="A")
	$('#cbEstaEnfer > option[value="Activo"]').attr('selected', 'selected');
	else
	$('#cbEstaEnfer > option[value="Inactivo"]').attr('selected', 'selected');
	
}

function LimpiarCampos()
{
	$('#jqte-Descripcion').jqteVal("")
	$('#jqte-Diagnostico').jqteVal(""),
	$('#jqte-Sintomas').jqteVal(""),
	$('#jqte-Prevencion').jqteVal(""),
	$('#jqte-Referencias').jqteVal(""),
	$('#txtNombEnfer').val(""),
	$("#txtTipoEnfermedad").val(""),
	$("#txtEtiquetas").val(""),
	$('#cbEstaEnfer > option[value="Activo"]').attr('selected', 'selected');
	$("#jqte-Enfermedades_Relacionadas").jqteVal("");
}

function Guardar()
{
	if(Accion=="Agregar")
	{
		Agregar_Enfermedad();
	}
	
	if(Accion=="Modificar")
	{
		Modificar_Enfermedad();
	}
	
}

function Agregar_Enfermedad()
{        
   if($('#jqte-Descripcion').val()!=""&&
      $('#jqte-Diagnostico').val()!=""&&
	     $('#jqte-Sintomas').val()!=""&&
	   $('#jqte-Prevencion').val()!=""&&
	   $('#jqte-Referencias').val()!=""&&
	       $('#txtNombEnfer').val()!=""&&
	       $("#txtEtiquetas").val()!=""&&
	  $("#txtTipoEnfermedad").val()!="");
	   else
	   {
		   msgMostrar("Faltan campos por rellenar",3);
		   return;
	   }

    $("#h3_Accion").html("Agregando");

	var json = {"descripcion":$('#jqte-Descripcion').val(),
	            "diagnostico":$('#jqte-Diagnostico').val(),
				"sintomas":$('#jqte-Sintomas').val(),
				"prevencion":$('#jqte-Prevencion').val(),
				"referencias":$('#jqte-Referencias').val(),
				"nombre":$('#txtNombEnfer').val(),
				"tipoenfermedad":$("#txtTipoEnfermedad").val(),
				"etiquetas":$("#txtEtiquetas").val(),
				"estado":$("#cbEstaEnfer").val()=="Activo"?"A":"I",
				"enfermedades_relacionadas":$("#jqte-Enfermedades_Relacionadas").val(),
				"accion":0       
			   }
			   
			   
	$.ajax({url:"php/enfermedades.php",
	        data:json,
			type:"POST",
			dataType:"json",
			success: function(response)
			{
				 msgMostrar(response,2);
				 table.ajax.reload();
				 LimpiarCampos();
			},
			error: function(response){msgMostrar(response.responseText,1);}
	       	
	      });
			   
   // alert($('#jqte-Descripcion').val());
}


// JavaScript Document
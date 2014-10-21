
window.onload = function() {
   
   
   //Aca se le da funcionabilidad a los boton previo del paginador    
    $("#arrowPrevious").click(function() {
        $("#section" + currentPaginator).hide();
        currentPaginator--;
        $("#section" + currentPaginator).show();
        $("#paginator span").html("P&aacute;gina " + currentPaginator + " de: " + TotalPaginas);
        if (currentPaginator === 1) {
            $("#arrowPrevious").hide();
        }
        if (currentPaginator < TotalPaginas) {
            $("#arrowNext").show();
        }
    });

   //Aca se le da funcionabilidad al boton siguiente del paginador    
    $("#arrowNext").click(function() {
        $("#section" + currentPaginator).hide();
        currentPaginator++;
        $("#section" + currentPaginator).show();
        $("#paginator span").html("P&aacute;gina " + currentPaginator + " de: " + TotalPaginas);
        if (TotalPaginas == currentPaginator) {
            $("#arrowNext").hide();
        }
        if (currentPaginator > 1) {
            $("#arrowPrevious").show();
        }
    });

    $("#wrapper, #found, #paginator").css("display", "block");
    setTimeout(function() {
        $("#wrapper").addClass("initWeb");
    }, 500);

};


var items = []; //Aca se guardan todos los resultados que se desea sean indexados
var itemsFound = []; //Aca se guardan los resultados segun la busqueda


//Esta funcion es para introducir nuevos objetos al vector items
function addItem(title, link, description) {
    items.push({"title": title, "link": link, "description": description});
}

function search() {
    
	itemsFound = [];
    
	removeClass(document.getElementById("paginator"), "initWeb");
    removeClass(document.getElementById("found"), "initWeb");
    
	addClass(document.getElementById("logo"), "closeLogo");
    
	Resultados_Menos_Prioridad=[];
   
    setTimeout(function() {
        var matchString = document.forms.searchForm.search.value; // obtiene el valor del campo de busqueda.
        
		if(items.length == 0)
		{ConstruirElementos(itemsFound);}
		
		for (var k in items) //Se recorre los resultados que se pueden mostrar, para meterlos en los que se van a mostrar 
		 {
            if (items[k].title.toLowerCase().indexOf(matchString.toLowerCase()) !== -1)
            {
				itemsFound.push(items[k]);
			}
			
			else 
			{
			    Resultados_Menos_Prioridad.push(items[k]);
			}
			
            if (k == (items.length - 1)) 
			{
				for ( var i = 0, l = Resultados_Menos_Prioridad.length; i < l; i++ )
				{
                    itemsFound.push(Resultados_Menos_Prioridad[i]);
                }
				
                ConstruirElementos(itemsFound);
			}
        }
    }, 1000);
}


function ConstruirElementos(itemsFound) 
{
    document.getElementById("found").innerHTML = ""; //Se limpia el html de la seccion  de resultados
    resetPaginator(); // Se resetea el paginador
	
    var Datos_Totales = itemsFound.length;
   
    var Cant_Max_Pag = 10; //Cantidad maxima de elementos que se mostraran en una sola seccion
   
    var Cantidad_Para_Visualizar = (Datos_Totales / Cant_Max_Pag);
	
    Cantidad_Para_Visualizar = Cantidad_Para_Visualizar.toString();
    Cantidad_Para_Visualizar = Cantidad_Para_Visualizar.split("."); // Partir en cuando se encuentre un punto y convertir en un vector

    
    if (Cantidad_Para_Visualizar[1]) //Si ahi decimales 
	  {
        if (Cantidad_Para_Visualizar[0] == 0) // si los resultados de la parte entera son == 0 sino 
		{
            $("#arrowNext").hide();
        } else {
            addClass(document.getElementById("paginator"), "initWeb");
        }
		
		
        Cantidad_Para_Visualizar = Cantidad_Para_Visualizar[0];
        Cantidad_Para_Visualizar++;
        TotalPaginas = Cantidad_Para_Visualizar;

    }
	
	else //Ahora sino ahi decimales haga esto
	
	 {
        
		if (Cantidad_Para_Visualizar[0] == 0)  
		{
            $.error = $('\
                                    <div class="alert">\
                                        No se han encontrado resultados. Por favor inserte una nueva palabra\
                                    </div>\
                                    ');
            $("#found").append($.error);
            addClass(document.getElementById("found"), "initWeb");
        }
		
	    else //Si la division es por ejemplo 10/10 = 1 entonces el paginador no debe visualizar el arrowNext
		 {
            if (Cantidad_Para_Visualizar[0] == 1) {
                $("#arrowNext").hide();
            }
			
            TotalPaginas  = Cantidad_Para_Visualizar;
        }

    }

   //Aca se construye los elementos que se visualizaran en pantalla 
    var current = 0;
    for (var s = 1; s <= Cantidad_Para_Visualizar; s++) 
	{
		
		//En estas 2 lineas siguientes se crea la seccion donde se guardaran la cantidad de resultados --> osea una pagina que estara en el paginador de  resultados
        $.createDiv = $('<div id="section' + s + '" class="itemResult"></div>');
        $("#found").append($.createDiv);
		
		
		//En las estas lineas siguientes se crea el contenido que va en esta seccion	
        for (var i = (current * Cant_Max_Pag ); i <= ((Cant_Max_Pag  * s) - 1); i++) 
		{
            if (itemsFound[i]) 
			{
				
                $.result = $('\
				               <div class="media">\
                               \
							    <p class="pull-left">\
                               \
							    <img class="media-object img-responsive"  alt="Informacion" src='+ itemsFound[i].link + '/IMGS/LOGO.png \u0022 />\
							   \
							   </p>\
                               \
							    <div class="media-body">\
                                \
								 <a href=' + itemsFound[i].link + '>' + itemsFound[i].title + '</a>\
								 <h3 media-heading>Descripción</h3>\
                                 \
								 <p>'+ itemsFound[i].description +'</p>\
                                 \
							    </div>\ </div>\ '); 
							    
						
				
				
			/*	
								'\
							<div class="itemResultado">\
							<img src=' + itemsFound[i].link + '/IMGS/LOGO.png \u0022  style={float:left; width=200px; heigh=200px;} >\
							<a href=' + itemsFound[i].link + '>' + itemsFound[i].title + '</a>\
							<div class="linkGreen">' + itemsFound[i].link + '</div>\
							<div>' + itemsFound[i].description + '</div><br/>\
				</div>\ */
				
				
				
               $("#section" + s).append($.result); // Aca lo introduce en la seccion correspondiente
			   
                if (i == ((Cant_Max_Pag  * s) - 1)) {
                    current++;
                }
            }

        }
		
		//Aca se pone el un span para mostrar en que pagina se esta, del total de paginas y se le agrega un efecto a los  resultados
        if (Cantidad_Para_Visualizar == s) 
		{
			//&aacute; es para tildar y que aparezca como Página # de #
            $("#paginator span").html("P&aacute;gina " + currentPaginator + " de: " + TotalPaginas);
            addClass(document.getElementById("found"), "initWeb");
            addClass(document.getElementById("paginator"), "initWeb");
            $(".itemResultado").hover(
                    function() {
                        $(this).css("background", "#faf7f7");
                    },
                    function() {
                        $(this).css("background", "transparent");
                    }
            );
        }

    }

}

function resetPaginator() {
    TotalPaginas = 0;
    currentPaginator = 1;
    $("#arrowPrevious").hide();
    $("#paginator span").html("P&aacute;gina " + currentPaginator);
    $("#arrowNext").show();
}

function hasClass(ele, cls) {
    return ele.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
}

function addClass(ele, cls) {
    if (!this.hasClass(ele, cls))
        ele.className += cls;
}

function removeClass(ele, cls) {
    if (hasClass(ele, cls)) {
        var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
        ele.className = ele.className.replace(reg, '');
    }
}

function ObtenerDatos(pBusqueda)
{
	var B;
	if(pBusqueda != "" && pBusqueda != null)
	{
	    B = {Busqueda : pBusqueda};
		$("#input1").val(pBusqueda);
	}
	else
    {	
	   pBusqueda = document.forms.searchForm.search.value;
	   B = {Busqueda : pBusqueda};
	}

	$.ajax({
		type:'GET',
		data:B,
		url:'php/Consulta.php',
		dataType:'json',
		success:function(response)
		{
  		    var ResultadoBusqueda = response;
            items = [];
                                                  
		    for(i=0;i<ResultadoBusqueda.length;i=i+2)
		    {
			  addItem(ResultadoBusqueda[i],"#",ResultadoBusqueda[i+1]);   
		    }

            search();
 
		},
		error:function(response)
		{
			var msg = response.responseText;  
		}
	});
 
}
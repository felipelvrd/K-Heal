<?php

//Clases creadas para funcionar con el scrip dataTable en el lado del servidor


class dtPeticion
{
   public $draw; //Creo que es un identificador que utiliza el datatable
   public $star; //Pagina actual que esta cargando el datatable
   public $length; //Cantidad de registros que se estan filtrando
   public $busqueda; //Este lleva las columnas de respuesta
}


class dtRespuesta
{
   public $draw; //Creo que es un identificador que utiliza el datatable
   public $recordsTotal; //Cantidad de registros en la base de datos
   public $recordsFiltered; //Cantidad de registros filtrados
   public $data=array(); //Este lleva las columnas de respuesta
}


  // public $error; // Si ocurre algun error meterlo aca	
?>
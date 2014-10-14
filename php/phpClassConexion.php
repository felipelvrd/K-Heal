<?php

/**
 * @author Juan Luis Granados
 * @Fecha 27/08/14
 * @Descripcion Es un clase que tiene el string de conexion necesario para cualquier cosulta a BD,
 * es necesario incluir este archivo en cada archivo php donde se hagan consultas a BD
 */

class DBManager{
    var $conect;//Esta variable guarda la conexion a BD
    var $BaseDatos;//Nombre de la BD
    var $Servidor;//Servidor
    var $Usuario;//Usuario para la BD
    var $Clave;//Contraseña para la BD
    
    //Constructor de la Conexion
    function DBManager(){
        $this->BaseDatos = "bd_una_pregunta";
        $this->Servidor = "localhost";
        $this->Usuario ="root";
        $this->Clave = "123";
        $this->Puerto=8888;//Puede que en su pc el puerto no sea necesario, en la mia si porque yo especifique otro
    }

    //Inicia la conexion, retorna true si fue existosa
    function Conectar() {	 
        $con=mysqli_connect($this->Servidor,$this->Usuario,$this->Clave,$this->BaseDatos,$this->Puerto);
        if(mysqli_connect_errno()){
            echo "Error al conectar con la BD. ".mysqli_connect_error();
            return false;
        }
        else{
            $this->conect=$con;
            return true;
        }
    }
    
    function CerrarConexion(){
        mysqli_close($this->conect);
    }
}

?>
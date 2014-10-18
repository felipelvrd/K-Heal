<?php

include_once("phpClassConexion.php");

$conexion= new DBManager();//Instancia de la Conexion a BD
$salida="";//En esta variable se devolvera el HTML

if($conexion->Conectar()==true){
    //Si la consulta produjo resultados
    if($resultado=mysqli_query($conexion->conect,"SELECT * FROM khlusuarios;")){
        //Si el resultado tiene mas de 0 columnas
        if($resultado->num_rows!=0){
            //Si todavia hay filas del resultado por procesar
            while($row=$resultado->fetch_assoc()){
                $salida.="<li>
                            <a href='#'>".$row['Nombre']."</a>
                         </li>";
            }
        }
        else{
            $salida="<li>NO HAY CATEGORIAS EN LA BD<li>";
        }
        echo $salida;
    }
    else{
        echo "Error al obtener las categorias. ".mysqli_connect_error();
        exit;
    }
    $conexion->CerrarConexion();

	echo $salida;
}
?>
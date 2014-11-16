<?php

include_once("../../../php/phpClassConexion.php");

$TipoEvaluacion = $_POST['TipoEvaluacion'];
$IdComentario =  $_POST['IdComentario'];

$conexion= new DBManager();//Instancia de la Conexion a BD

if($conexion->Conectar()==true){
    //Si la consulta produjo resultados
    if($resultado=mysqli_query($conexion->conect,"SELECT count(*) FROM khlevaluacionescomentarios where IdComentario = $IdComentario and TipoEvaluacion = '$TipoEvaluacion';")){
        //Si el resultado tiene mas de 0 columnas
        if($resultado->num_rows!=0){
            //Si todavia hay filas del resultado por procesar
           $row=$resultado->fetch_assoc();
           echo $row['count(*)'];
        }
        else{
            echo 0;
        }
    }
    else{
        echo "Error al obtener los votos. ".mysqli_connect_error();
        exit;
    }
    $conexion->CerrarConexion();
}
?>
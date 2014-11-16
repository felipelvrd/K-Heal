<?php

include_once("../../../php/phpClassConexion.php");
session_start();
$Descripcion = $_POST['Descripcion'];
$IdTratamientos = $_POST['IdTratamientos'];
@$idUsuario = $_SESSION['idUsuario'];
@$Fecha =date('Y-m-d H:i:s');
$accion = $_POST['accion'];

if($accion==1){
	$conexion= new DBManager();//Instancia de la Conexion a BD
	
	if($conexion->Conectar()==true){
		try{
			if(!isset($_SESSION['idUsuario'])){
				throw new Exception("Necesita estar logueado para poder comentar");
			}
			if($resultado=mysqli_query($conexion->conect,"INSERT INTO hklcomentarios (Descripcion, IdTratamientos, IdUsuario,Fecha) VALUES ('$Descripcion',$IdTratamientos,$idUsuario,'$Fecha');")){
				echo "Comentario registrado satisfactoriamente";
			}
			else{
				throw new Exception("Ocurrio un error al intentar registrar el comentario".mysqli_connect_error());
				exit;
			}
		}catch(Exception $ex){
			echo $ex->getMessage();
		}
		$conexion->CerrarConexion();
	}
}
else if ($accion==2){
	$conexion= new DBManager();//Instancia de la Conexion a BD
	if($conexion->Conectar()==true){
		//Si la consulta produjo resultados
		if($resultado=mysqli_query($conexion->conect,"SELECT distinct(c.Descripcion),c.Id, c.Fecha, u.Nombre FROM hklcomentarios c inner join khlusuarios u on c.IdUsuario = u.Id  where IdTratamientos = $IdTratamientos;")){
			//Si el resultado tiene mas de 0 columnas
			if($resultado->num_rows!=0){
				//Si todavia hay filas del resultado por procesar
				while($row=$resultado->fetch_assoc()){
					echo '<div class="dvLComentario">
									<div class="dvLUsuaComentario">
										<div class="dvLAvatarUsuario">
											<img src="recursos/Usuarios/Nombre_Usuario/imgPerfil.jpeg" width="100" height="100" alt=""/>
										</div>
										<p class="pLNombreUsuario">'.$row['Nombre'].'</p>
										<p class="pFechaComentario">'.$row['Fecha'].'</p>
									</div>
									<div class="dvLDescripcionComentario">
									'.$row['Descripcion'].'
									</div>
									<div class="dvLVotos">
         								';
										$idComent = $row['Id'];
										 include ("../votosComentarios/index.php");
         							echo '</div>
								</div>';
				}
			}
			else{
				echo "No hay comentarios";
			}
		}
		else{
			echo "Error al obtener los comentarios. ".mysqli_connect_error();
			exit;
		}
		$conexion->CerrarConexion();
	}
}
?>
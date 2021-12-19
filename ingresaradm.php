<?php 

	$conexion=mysqli_connect('localhost','root','','proyecto');

    $nombre=$_POST['usuario'];
	$contra=$_POST['pass'];	
	 
	$sql= "SELECT * from administrador where nombre = '$nombre'";
	$result = mysqli_query($conexion, $sql);
	$fila = mysqli_fetch_assoc($result);

    

	if($fila['nombre'] != NULL){
		if($fila['contra'] == $contra){
            echo 1;
        }
        else{
            echo 0;
        }
	}
    else
     echo 0;

	mysqli_free_result($result);
	
 ?>

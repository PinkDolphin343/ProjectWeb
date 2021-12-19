<?php 

	$conexion=mysqli_connect('localhost','root','','proyecto');

    $boleta=$_POST['boleta'];
	 
	$sql= "SELECT * from usuarios where boleta = '$boleta'";
	$result = mysqli_query($conexion, $sql);
	$fila = mysqli_fetch_assoc($result);

    

	if($fila['boleta'] != NULL){
	 echo 1;
	}
    else
     echo 0;

	mysqli_free_result($result);
	
 ?>
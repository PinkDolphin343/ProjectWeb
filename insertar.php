<?php 
	$conexion=mysqli_connect('localhost','root','','proyecto');
	$escfinal='';

	$boleta=$_POST['boleta'];
	$nombre=$_POST['nombre'];
	$apellidop=$_POST['apellidop'];
	$apellidom=$_POST['apellidom'];
	$fecha=$_POST['fecha'];
	$curp=$_POST['curp'];
	$calle=$_POST['calle'];
	$numero=$_POST['numero'];
	$col=$_POST['col'];
	$alcaldia=$_POST['alcaldia'];
	$cp=$_POST['cp'];
	$tel=$_POST['tel'];
	$mail=$_POST['mail'];
	$escuela=$_POST['escuela'];
	$alcaldia=$_POST['mail'];
	$ef=$_POST['ef'];
	$escuelapre=$_POST['escuelapre'];
	$promedio=$_POST['promedio'];
	$fechac= date_create_from_format('d M, Y H:i:s', '08 Mar, 2020 07:15:00');
	$hora=date_format($fechac, 'H:i:s');
	$grupo=1;
	

	if($escuela == 'OTRO')
	 $escfinal=$escuelapre;
	 else
	 $escfinal=$escuela;

	 
	$sql= "SELECT * from usuarios where boleta = '$boleta'";
	$result = mysqli_query($conexion, $sql);
	$fila = mysqli_fetch_assoc($result);

	if($fila['boleta'] != NULL){
		echo 2;
	}

	mysqli_free_result($result);
	

	for ($j = 1; $j <= 302; $j++) {
	$sql2="INSERT into usuarios (boleta,nombre,apellidop,apellidom,fechanacim,curp,calle,
	numero,colonia,alcaldia,cp,tel,email,escuela,entidadf,promedio)
			values ('$boleta','$nombre','$apellidop','$apellidom','$fecha','$curp','$calle',
			'$numero','$col','$alcaldia','$cp','$tel','$mail','$escfinal','$ef','$promedio')";


	mysqli_query($conexion,$sql2);

	

	$sql3="SELECT * FROM cita WHERE id_cita=(SELECT max(id_cita) FROM cita)";	
	$result = mysqli_query($conexion, $sql3);
	$fila = mysqli_fetch_assoc($result);

	if(($fila['id_cita'] % 25 < 25 && $fila['id_cita'] % 25 > 0) || $fila['id_cita'] == NULL){
		if($fila['id_cita'] == NULL){
			if($fila['id_cita'] == NULL){
			$hora = $fechac->modify('+1 hours');
			$hora = $fechac->modify('+45 minutes');		
			$hora = $fechac->format('H:i:s');
			}
		}
		else{
			$grupo=$fila['salon'];
			$hora=$fila['horario'];
		}
	}
	else
	if($fila['id_cita'] % 25 == 0){
		$grupo=$fila['salon'] +1;
		$grupo=$grupo % 6;
		 if($grupo == 0)
		 $grupo=6;
		$hora=$fila['horario'];
		if($fila['id_cita'] % 150 == 0){
			if($fila['id_cita'] != 1){
				$fechac = date_create_from_format("H:i:s",$hora=$fila['horario']);
				$hora = $fechac->modify('+1 hours');
				$hora = $fechac->modify('+45 minutes');	
				$hora = $fechac->format('H:i:s');
			}
		}
	}

	
	$sql4="INSERT into cita (salon,horario,boleta) values ('$grupo','$hora','$boleta')";
	mysqli_query($conexion,$sql4);
	
	mysqli_free_result($result);	
}

	echo 1;

 ?>
<?php
    $escfinal='';
    $boleta=$_POST['boleta'];
	$nombre=$_POST['nombre'];
	$apellidop=$_POST['apellidop'];
	$apellidom=$_POST['apellidom'];
	$fecha=$_POST['fechanac'];
	$curp=$_POST['curp'];
	$calle=$_POST['Calle'];
	$numero=$_POST['numcalle'];
	$col=$_POST['col'];
	$alcaldia=$_POST['alcaldia'];
	$cp=$_POST['cp'];
	$tel=$_POST['tel'];
	$mail=$_POST['email'];
	$escuela=$_POST['esc'];
	$ef=$_POST['estadoR'];
	$escuelapre=$_POST['nomesc'];
	$promedio=$_POST['prom'];

    if($escuela == 'OTRO')
	 $escfinal=$escuelapre;
	 else
	 $escfinal=$escuela;
?>

<html>
    <head>
    </head>
    <body>
        <h1>Su info es:</h1><br>
        <p>Boleta:<?php echo $boleta; ?></p><br>
        <p>nombre:<?php echo $nombre; ?></p><br>
     <p>apelidop:<?php echo $apellidop; ?></p><br>
     <p>appelidom:<?php echo $apellidom; ?></p><br>
     <p>fecha:<?php echo $fecha; ?></p><br>
     <p>curp:<?php echo $curp; ?></p><br>
     <p>calle:<?php echo $calle; ?></p><br>
     <p>numero:<?php echo $numero; ?></p><br>
     <p>colonia:<?php echo $col; ?></p><br>
     <p>alcaldia:<?php echo $alcaldia; ?></p><br>
     <p>cp:<?php echo $cp; ?></p><br>
     <p>telefono:<?php echo $tel; ?></p><br>
     <p>mail:<?php echo $mail; ?></p><br>
     <p>escuela:<?php echo $escfinal; ?></p><br>
     <p>entidad:<?php echo $ef; ?></p><br>
     <p>promedio:<?php echo $promedio; ?></p><br>
    </body>
</html>
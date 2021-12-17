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
    <script src="jquery-3.6.0.min.js"></script>
    </head>
    <body>
    <h1>Su info es:</h1><br>

    <p>Boleta:</p><input id='boleta' type='text'  value='<?php echo $boleta; ?>' disabled><br>
    <p>nombre:</p><input id='nombre' type='text'  value='<?php echo $nombre; ?>' disabled><br>
     <p>apelidop:</p><input type='text'  value='<?php echo $apellidop; ?>'disabled><br>
     <p>appelidom:</p><input type='text'  value='<?php echo $apellidom; ?>'disabled><br>
     <p>fecha:</p><input type='text'  value='<?php echo $fecha; ?>'disabled><br>
     <p>curp:</p><input type='text'  value='<?php echo $curp; ?>'disabled><br>
     <p>calle:</p><input type='text'  value='<?php echo $calle; ?>'disabled><br>
     <p>numero:</p><input type='text'  value='<?php echo $numero; ?>'disabled><br>
     <p>colonia:</p><input type='text'  value='<?php echo $col; ?>'disabled><br>
     <p>alcaldia:</p><input type='text'  value='<?php echo $alcaldia; ?>'disabled><br>
     <p>cp:</p><input type='text'  value='<?php echo $cp; ?>'disabled><br>
     <p>telefono:</p><input type='text'  value='<?php echo $tel; ?>'disabled><br>
     <p>mail:</p><input type='text'  value='<?php echo $mail; ?>'disabled><br>
     <p>escuela:</p><input type='text'  value='<?php echo $escfinal; ?>'disabled><br>
     <p>entidad:</p><input type='text'  value='<?php echo $ef; ?>'disabled><br>
     <p>promedio:</p><input type='text'  value='<?php echo $promedio; ?>'disabled><br>
    
        
        <form id="frmajax" action="insertar.php" onsubmit="enviar()" method="post">

        <input id='boleta' type='text' name='boleta' value='<?php echo $boleta; ?>' style="visibility:hidden">
    <input id='nombre' type='text' name='nombre' value='<?php echo $nombre; ?>' style="visibility:hidden">
     <input type='text' name='apellidop' value='<?php echo $apellidop; ?>' style="visibility:hidden">
     <input type='text' name='apellidom' value='<?php echo $apellidom; ?>' style="visibility:hidden">
     <input type='text' name='fechanac' value='<?php echo $fecha; ?>' style="visibility:hidden">
     <input type='text' name='curp' value='<?php echo $curp; ?>' style="visibility:hidden">
     <input type='text' name='Calle' value='<?php echo $calle; ?>' style="visibility:hidden">
     <input type='text' name='numcalle' value='<?php echo $numero; ?>' style="visibility:hidden">
     <input type='text' name='col' value='<?php echo $col; ?>' style="visibility:hidden">
     <input type='text' name='alcaldia' value='<?php echo $alcaldia; ?>' style="visibility:hidden">
     <input type='text' name='cp' value='<?php echo $cp; ?>' style="visibility:hidden">
     <input type='text' name='tel' value='<?php echo $tel; ?>' style="visibility:hidden">
     <input type='text' name='email' value='<?php echo $mail; ?>' style="visibility:hidden">
     <input type='text' name='esc' value='<?php echo $escfinal; ?>' style="visibility:hidden">
     <input type='text' name='estadoR' value='<?php echo $ef; ?>' style="visibility:hidden">
     <input type='text' name='prom' value='<?php echo $promedio; ?>' style="visibility:hidden">
     

    <input  id="btnguardar" class="boton" type="submit"  value="Aceptar">
    <input type="button" value="Modificar" onClick="history.go(-1);">

</form>
    </body>
</html>

<script type="text/javascript">
    function enviar(){
    var datos2 = $('#frmajax').serialize();
            alert(datos2);
            $.ajax({
                type: "POST",
                url: "insertar.php",
                data: datos2,
    }
       
</script>
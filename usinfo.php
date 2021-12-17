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
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/style.css" as='style'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    </head>
    <body>
        <div class="hero">
        <div class="contenido-hero">
            <h2>Instituto Politecnico Nacional</h2>
            <p><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="88"
                    height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFC107" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <circle cx="12" cy="11" r="3" />
                    <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 0 1 -2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" />
                </svg>CDMX, Zacatenco</p>

            <a class="boton" href="#contacto">Contactar</a>
        </div>
    </div>

    <div class="nav-bg navegacion">
        <h1>Por favor confirma tus datos que se muestran a continuacion: </h1><br>
        </div>

    <div class="formulario sombra">
     <div  class="campo" >
    <label>Boleta:</label>
    <input id='boleta' type='text'  value='<?php echo $boleta; ?>' disabled><br>
    </div>

    <div class="campo">
    <label >nombre:</label>
    <input id='nombre' type='text'  value='<?php echo $nombre; ?>' disabled><br>
    </div>

    <div class="campo">
     <label>apelidop:</label>
     <input type='text'  value='<?php echo $apellidop; ?>'disabled><br>
    </div>

    <div class="campo">
     <label>appelidom:</label>
     <input type='text'  value='<?php echo $apellidom; ?>'disabled><br>
    </div>

    <div class="campo">
    <label>fecha:</label>
     <input type='text'  value='<?php echo $fecha; ?>'disabled><br>
    </div>

    <div class="campo">
    <label>curp:</label>
     <input type='text'  value='<?php echo $curp; ?>'disabled><br>
    </div>

    <div class="campo">
    <label>calle:</label>
     <input type='text'  value='<?php echo $calle; ?>'disabled><br>
    </div>

    <div class="campo">
    <label>numero:</label>
     <input type='text'  value='<?php echo $numero; ?>'disabled><br>

    </div>

    <div class="campo">
    <label>colonia:</label>
     <input type='text'  value='<?php echo $col; ?>'disabled><br>
    </div>

    <div class="campo">
    <label>alcaldia:</label>
     <input type='text'  value='<?php echo $alcaldia; ?>'disabled><br>
    </div>

    <div class="campo">
    <label>cp:</label>
     <input type='text'  value='<?php echo $cp; ?>'disabled><br>
    </div>
    
    <div class="campo">
    <label>telefono:</label>
     <input type='text'  value='<?php echo $tel; ?>'disabled><br>
    </div>

    <div class="campo">
    <label>mail:</label>
     <input type='text'  value='<?php echo $mail; ?>'disabled><br>
    </div>

    <div class="campo">
    <label>escuela:</label>
     <input type='text'  value='<?php echo $escfinal; ?>'disabled><br>
    </div>

    <div class="campo">
    <label>entidad:</label>
     <input type='text'  value='<?php echo $ef; ?>'disabled><br>
    </div>

    <div class="campo">
     <label>promedio:</label>
     <input type='text'  value='<?php echo $promedio; ?>'disabled><br>


    <div class="campo">
     <input  id="btnguardar" class="boton" type="submit"  value="Aceptar">
    <input type="button" value="Modificar" class="boton" onClick="history.go(-1);">
    </div>

    </div>

    </div>
        
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
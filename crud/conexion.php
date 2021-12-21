<?php
	error_reporting(E_WARNING );
        
	$conexion=new mysqli("localhost","root","","proyecto");
	mysqli_select_db("proyecto",$conn) or die (
	"Error: No es posible establecer la conexión"
	);
?>
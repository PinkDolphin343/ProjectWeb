<?php 
    include 'conexion.php';
    $boleta=$_GET['boleta'];
    $sql="delete from proyecto where boleta='".$boleta."'";
    mysqli_query($conexion, $sql);
    header('location:index.php');


?>
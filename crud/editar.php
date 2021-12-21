<?php 
    include 'conexion.php';
    $boleta=$_GET['boleta'];
    $sql="SELECT * from usuarios where boleta='".$boleta."' ";
    $resultado=mysqli_query($conexion, $sql);
    while ($fila=mysqli_fetch_assoc($resultado)) {
?>

<div>
    <form>
        <input type="hidden" name="txtboleta" value="<?php echo $filas['boleta']?>">
        <label>Usuario: </label><br>
        <input type="text" name="txtuser" value="<?php echo $filas['nombre']?>><br>
        <label>Email: </label><br>
        <input type="text" name="txtemail"><hr>
        <input type="submit" value="Agregar" value="<?php echo $filas['email']?>>
        <a href="index.php">Regresar</a>

    </form>
    <?php } ?>
</div>
    
<?php 
    $boleta=$_GET['txtboleta'];
    $nombre=$_GET['txtuser'];
    $email=$_GET['txtemail'];
    if($user!=null||$email!=null){
        $sql2="update proyecto set usuario= '".$user."',Email='".$email."' where boleta='".$boleta."'";
        mysqli_query($conexion, $sql2);
        if ($user=1) {
            # code...
            header("location:index.php");
        }
    }

 ?>
<div>
    <form>
        <label>Usuario: </label><br>
        <input type="text" name="txtuser"><br>
        <label>Email: </label><br>
        <input type="text" name="txtemail"><hr>
        <input type="submit" value="Agregar">
        <a href="index.php">Regresar</a>

    </form>
</div>

-->

<?php
    include 'conexion.php';
    $user=$_GET['txtuser'];
    $email=$_GET['txtuser'];
    if($user!=null||$email!=null){
        $sql="inset into usuario(usuario,email)values('".$user."','".$email."')";
        mysqli_query($conexion, $sql);
        if ($user=1) {
            # code...
            header("location:index.php");
        }
    }


?>
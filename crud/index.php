
<! DOCTYPE html>
<html>
  <head>
 <title>CRUD</title>

</head>
  <body>
    <?php
    include 'conexion.php';
    $sql="SELECT * from usuarios";
    $resultado=mysqli_query($sql);
    ?>

    <div>
    <a href="agregar.php">Nuevo</a>
      <table>
        <thead>
          <tr>
            <th>boleta</th>
            <th>nombre</th>
            <th>apellidop</th>
            <th>apellidom</th>
            <th>fechanacim</th>
            <th>curp</th>
            <th>calle</th>
            <th>numero</th>
            <th>colonia</th>
            <th>alcaldia</th>
            <th>cp</th>
            <th>tel</th>
            <th>email</th>
            <th>escuela</th>
            <th>entidadf</th>
            <th>Acciones</th>
            
          </tr>
        </thead>
        
        <tbody>
        <?php while ($filas=mysqli_fetch_assoc($resultado)){

        ?>
        <tr>
          <td><?php echo $filas['boleta']?></td>
          <td><?php echo $filas['nombre']?></td>
          <td><?php echo $filas['apellidop']?></td>
          <td><?php echo $filas['apellidom']?></td>
          <td><?php echo $filas['fechanacim']?></td>
          <td><?php echo $filas['curp']?></td>
          <td><?php echo $filas['calle']?></td>
          <td><?php echo $filas['numero']?></td>
          <td><?php echo $filas['colonia']?></td>
          <td><?php echo $filas['alcaldia']?></td>
          <td><?php echo $filas['cp']?></td>
          <td><?php echo $filas['tel']?></td>
          <td><?php echo $filas['email']?></td>
          <td><?php echo $filas['escuela']?></td>
          <td><?php echo $filas['entidadf']?></td>
          <td>
            <a href="editar.php?id=<?php echo $filas['boleta']?>">Editar</a>
            <a href="eliminar.php?id=<?php echo $filas['boleta']?>">Eliminar</a>
          </td>

        
        </tr>
        <?php }?>

        </tbody>


      </table>
    </div>


    
	  
</body>
</html>
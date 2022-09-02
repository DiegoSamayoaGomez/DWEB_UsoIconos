<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <p>
        <h2>INGRESO DE DATOS DEL ESTUDIANTE</h2>
    </p>
    <form action="EstudianteController.php" method="post">
        <p>
            <label for="apellidos">Apellidos</label> apellidos
            <input type="text" name="apellidos">
        </p>
        
        <p>
            <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        </p>
        
        <p>
            <label for="direccion">direccion</label>
            <input type="text" name="direccion">
        </p>
        
        <p>
            <label for="telefono">Telefono</label>
            <input type="number" name="telefono">
        </p>
        
        <p>
            <input type="submit" value="Guardar Registro">
        </p>



      
      </a>
    </form>
    <hr>
    <h3>LISTADO DE ESTUDIANTES</h3>
    <hr>

    
<hr>

<table border="1">
        <tr>
            <th>ID</th>
            <th>Apellidos</th>
            <th>Nombres</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th colspan="2">OPERACIONES</th>
            
        </tr>

        <tr>
            <td>1</td>
            <td>Samayoa</td>
            <td>Diego</td>
            <td>Ciudad</td>
            <td>12345678</td>

            <td style="text-align: center;">
                <!-- <a href="eliminar.html"><img alt="Eliminar" src="C:\xampp\htdocs\MODULO II\01-09 TABLA\src"> -->                    
                <a href="eliminar.html"><img alt="Eliminar" src="icons8_trash_32.png">         
            </td>

            <td style="text-align: center;">
                <a href="editar.html"><img alt="editar" src="icons8_edit_32.png">
            </td>
            
        </tr>
    </table>

    <hr>


    <table border="1">
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th colspan="2">OPERACIONES</th>
        
    <?php
        include_once "EstudianteModel.php";
        $Estudiante = new Estudiante();
        $ListaEstudiantes = $Estudiante->ListarEstudiantes();
        while($Estudiantes = mysqli_fetch_assoc($ListaEstudiantes))
        {?>
          <tr>
                <td>  <?php echo $Estudiantes['nombre'] ?> </td>
                <td>  <?php echo $Estudiantes['apellidos'] ?> </td>
                <td>  <?php echo $Estudiantes['direccion'] ?> </td>
                <td>  <?php echo $Estudiantes['telefono'] ?> </td>
                <td style="text-align: center;">
                <a href="editar.html"><img alt="editar" src="icons8_trash_32.png">
                 </td>

                <td style="text-align: center;">
                <a href="editar.html"><img alt="editar" src="icons8_edit_32.png">
                </td>
          </tr>
          
       <?php } ?>
    
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
   
        <title>Ingreso de datos</title>

</head>
<body>
    <p>
        <h2>INGRESO DE DATOS DEL ESTUDIANTE</h2>
        
    </p>

    <P>Diego Alejandro Samayoa Gomez</P>
    <form action="EstudianteController.php" method="post">
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" required>
        </p>
        
        <p>
            <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required>
        </p>
        
        <p>
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" required>
        </p>
        
        <p>
            <label for="telefono">Telefono</label>
            <input type="number" name="telefono" required>
        </p>
        
        <hr>
        <p>
            <input type="submit" value="Guardar Registro" name="btnGuardar">
        </p>


      
      </a>
    </form>
    <hr>
    <h3>LISTADO DE ESTUDIANTES (Local)</h3>
    <p>Conexión LOCAL a servidor de base de datos</p>

    <hr>


<table class="table table-striped w-50">
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
    <h2>TABLAS EN MYSQL (Online)</h2>
    <p>Conexión ONLINE a servidor de bases de datos</p>


    <table class="table table-striped w-50 pb-3">
    
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
                
                
                <td><a href="VistaEditarEstudiante.php?idEst=<?php echo $Estudiantes['idestudiante'];?>"><img alt="Eliminar" src="icons8_edit_32.png"></a></td>
                
                <td style="text-align: center;">
                <a href="eliminar.html"><img alt="Eliminar" src="icons8_trash_32.png">  
                </td>

          </tr>
          
       <?php } ?>
    
    </table>
</body>
</html>
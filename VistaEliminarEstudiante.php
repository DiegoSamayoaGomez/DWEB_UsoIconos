<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VistaEditarEstudiante</title>
    <link rel="stylesheet" href="styles.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <form action="EstudianteController.php" method="POST">
                        <?php
                            include_once "EstudianteModel.php";
                            $nuevoEstudiante = new Estudiante();
                            /*FILTRAR AL ESTUDIANTE SEGUN ID ENVIADO*/
                            $resultado = $nuevoEstudiante->FiltrarEstudiante($_GET['idEst']);

                            while($resultadoFiltrado = mysqli_fetch_assoc($resultado))
                            {
                        ?>
                                <p>
                                <label for="txtapellidos">Apellidos:</label>
                                <input type="text" name="txtapellidos" 
                                value="<?php echo $resultadoFiltrado['apellidos']?>" required disabled="disabled">
                                </p>

                                <p>
                                <label for="txtnombre">Nombre:</label>
                                <input type="text" name="txtnombre" 
                                value="<?php echo $resultadoFiltrado['nombre']?>" required disabled="disabled">
                                </p>

                                <p>
                                <label for="txtdireccion">Direccion:</label>
                                <input type="text" name="txtdireccion" 
                                value="<?php echo $resultadoFiltrado['direccion']?>" required disabled="disabled">
                                </p>

                                <p>
                                <label for="txttelefono">Telefono:</label>
                                <input type="text" name="txttelefono" 
                                value="<?php echo $resultadoFiltrado['telefono']?>" required disabled="disabled">
                                </p>

                                 <p>
                                    <input type="hidden" name="idStudent" 
                                    value="<?php echo $resultadoFiltrado['idestudiante']?>" required disabled="disabled">
                                 </p>   
                            <?php
                            }
                            ?>
                <p>¿Seguro desea eliminar a este estudiante?</p>        
                <input type="submit" value="Eliminar Estudiante" name="btnEliminar"> 
                <input type="submit" value="Cancelar" name="btnCancelar"> 
                           
    </form>
</body>
</html>
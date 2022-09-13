
<?php
/*
include "EstudianteModel.php";
$nuevoEstudiante = new Estudiante();
$nuevoEstudiante->GuardarEstudiante($_POST['apellidos'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono']);

<?php
*/



include "EstudianteModel.php";
$nuevoEstudiante = new Estudiante();

/*GUARDAR*/
if(isset($_POST['btnGuardar']))
{
    $nuevoEstudiante->GuardarEstudiante($_POST['apellidos'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono']);
    header('Location: VistaEstudiante.php');
}
else

/*EDITAR*/
if(isset($_POST['btnEditar']))
{
 $nuevoEstudiante->EditarEstudiante($_POST['idStudent'],$_POST['txtapellidos'],$_POST['txtnombre'],$_POST['txtdireccion'],$_POST['txttelefono']); 
 header('Location: VistaEstudiante.php');
        
}

/*EDITAR*/
if(isset($_POST['btnEliminar']))
{
 $nuevoEstudiante->EliminarEstudiante($_POST['idStudent'],$_POST['txtapellidos'],$_POST['txtnombre'],$_POST['txtdireccion'],$_POST['txttelefono']); 
 header('Location: VistaEstudiante.php');
        
}

/*EDITAR*/
if(isset($_POST['btnCancelar']))
{ 
 header('Location: VistaEstudiante.php');        
}




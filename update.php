<?php

include("conexion.php");
$con=conectar();

$cod_estudiante = $_POST['cod_estudiante'];
$dni            = $_POST['dni'];
$nombres        = $_POST['nombres'];
$apellidos      = $_POST['apellidos'];

$sql="UPDATE alumno SET  dni='$dni',nombres='$nombres',apellidos='$apellidos' WHERE cod_estudiante='$cod_estudiante'"; // c sql para actualizar los datos del alumno seleccionado en el formulario actualizar.php
$query=mysqli_query($con,$sql);
 
    if($query){ // si la consulta se ejecuta correctamente
        Header("Location: alumno.php"); // redirecciona a la pagina alumno.php
    }
?>
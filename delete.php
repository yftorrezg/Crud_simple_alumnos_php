<?php
    include("conexion.php");
    $con=conectar();

    $cod_estudiante=$_GET['id']; // id del alumno

    $sql="DELETE FROM alumno  WHERE cod_estudiante='$cod_estudiante'";
    $query=mysqli_query($con,$sql);

        if($query){ // si la consulta se ejecuta correctamente
            Header("Location: alumno.php");
        } else {
            echo "Error al eliminar";
        }
?>
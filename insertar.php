<?php
    include("conexion.php");
    $con=conectar(); // llamamos a la funcion conectar

    //'name' input del formulario = a la BD de la tabla alumno
    $cod_estudiante = $_POST['cod_estudiante']; 
    $dni            = $_POST['dni']; 
    $nombres        = $_POST['nombres'];
    $apellidos      = $_POST['apellidosz'];

    // aqui se hace la consulta sql
    /* $sql = "INSERT INTO alumno(cod_estudiante, dni, nombres, apellidos) VALUES ('$cod_estudiante','$dni','$nombres','$apellidos')"; */

    $sql="INSERT INTO alumno VALUES('$cod_estudiante','$dni','$nombres','$apellidos')";
    $query= mysqli_query($con,$sql); // ejecuta la consulta

    if($query){ // si la consulta se ejecuta correctamente
        Header("Location: alumno.php"); // redirecciona a la pagina alumno.php
    }else {
        echo "Error al insertar";
    }
?>
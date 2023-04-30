<?php
function conectar()
{
    /* 
        $con = mysqli_connect("localhost", "root", "", "alumno") or die("Error al conectar a la base de datos");
        return $con;  
    */
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "alumno";

    $con = mysqli_connect($host, $user, $pass);
    mysqli_select_db($con, $bd);
    return $con;   
}
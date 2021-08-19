<?php

$conexion = mysqli_connect('localhost','root','', 'registro')or die(mysql_error($mysqli));

insertar($conexion);

function insertar($conexion){
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $consulta = "INSERT INTO personas(usuario, email, password) VALUES ('$usuario', '$email', '$password')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}

?>
<?php
session_start();
include 'conexion/conexion.php';

  
        
    $usuario = $_POST['usuario']; //Nombre de Usuario
    $password = md5($_POST['password']);

    $consulta = $conn->query("SELECT * FROM usuario WHERE nombre_usuario = '$usuario'
    and password_usuario = '$password'")->fetch(PDO::FETCH_ASSOC);
    
    if(count($consulta)>0){
        $_SESSION['nombreUsuario']=$usuario;
        echo true;
    }else{
        echo false;


    }

    ?>
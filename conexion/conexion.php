<?php
//Variables
    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $dbname = "bd_proyecto";
    $key = '##$%&/&%/()/&%$$dkfjañksdghaghueyr34872398596722';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname" //crea la conexion
                    , $username
                    , $password
                    , array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

       //echo "conectado";
         

    } catch(PDOException $e){
        echo "La conexión falló: " . $e->getMessage();  
        exit;      
    }
?>
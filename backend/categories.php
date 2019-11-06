<?php

include("../conexion/conexion.php");
//session_start(); 

if(isset($_GET)){

$sql = 'SELECT nombre_categorias FROM categorias';

$result = $conn->query($sql)->fetchAll();

$registros = array();

foreach($result as $clave => $valor) {
    $registros [] = array(
        'nombre_categorias' => $valor['nombre_categorias']
    );

    $categorias = json_encode($registros);
   
   
    echo $categorias;


}






}





?>
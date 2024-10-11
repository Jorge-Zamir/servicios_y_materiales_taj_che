<?php
$host="localhost";
$bd="servicios y materiales taj che";
$usuario="root";
$contraseña="";

try {
        $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contraseña);
       

} catch ( Exception $ex) {

    echo $ex->getMessage();
}
?>

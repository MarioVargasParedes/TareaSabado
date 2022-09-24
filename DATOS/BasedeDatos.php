<?php
$db = new PDO('mysql:host=localhost; dbname=financiera', 'root','m71260929');
if(!$db){
    echo 'Error al conectar la Base de Datos';
    exit;
}

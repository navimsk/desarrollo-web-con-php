<?php

session_start();
include_once '../mvc/v1/usuario.php';
include_once '../../mvc/v1/models/usuario.php';

$modelo = new Usuario();

echo 'Encender<br>';

var_dump($_POST['id']);

echo 'Respuesta: ' . $modelo->powerOn($_POST['id']);

$_SESSION['ok']['msg'] = 'Se encendio exitosamente :)';
    echo $_SESSION['ok']['msg'];
    header("Location: ../");
    exit();
    


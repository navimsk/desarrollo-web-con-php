<?php
session_start();

if(isset($_SESSION['user_id'])){
//el suuario ya está logueado
header("Location: ../../../dashboard/");
exit();
}

$formUsername = $_POST['username'];
$formPassword = $_POST['password'];

$user = 'proyecto@web.cl';
$pass = 'holaMundo!';


if($user === $formUsername && $pass === $formPassword){

$_SESSION['user_id'] = 1;
$_SESSION['username'] = 'profe :)';

header("Location: ../../../backoffice/");
exit();
} 

$_SESSION['error'] = ['login' => 'Error de usuario o contraseña'];
    header("Location: ../");
  
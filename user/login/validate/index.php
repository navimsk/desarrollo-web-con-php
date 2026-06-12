<?php
session_start();

if(isset($_SESSION['user_id'])){
//el suuario ya está logueado
header("Location: ../../../backoffice/");
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
else{
    header("Location: ../index.php?error=1");
    exit();
}
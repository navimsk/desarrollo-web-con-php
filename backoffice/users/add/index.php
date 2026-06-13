<?php
echo '<pre>';

var_dump($_POST);
echo '<hr>';

session_start();
$_SESSION['errores'] = ['mantenedor'=>'usuarios'];

if ($_POST['email'] !="") {
    $_SESSION['errores']['email'] = 'El campo email esta con problemas';

}
echo '</pre>';
// profe nosostros pusimos 
// los errores al 
// momento de agregar el usuario
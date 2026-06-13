<?php

session_start();

// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

if (isset($_SESSION['user_id'])) {
  header('Location: backoffice/');
  exit();
} else {
    header('Location: user/login/index.php');
    exit();
}
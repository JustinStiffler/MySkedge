<?php

session_start();
require_once("Dao.php");

if (isset($_POST['loginButton'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $access = new Dao();
  $access->login($email, $password);  
}

?>

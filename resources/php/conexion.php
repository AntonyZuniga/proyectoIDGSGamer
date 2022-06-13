<?php

#Variables necesarias para el inicio de sesión
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'proyecto';

$DBC = mysqli_connect($hostname,$username,$password,$db);

if ($DBC->connect_error) {
    die('Database error:' . $DBC->connect_error);
  }

?>
<<<<<<< HEAD
<?php

#Variables necesarias para el inicio de sesión
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'gaming';

$DBC = mysqli_connect($hostname,$username,$password,$db);

if ($DBC->connect_error) {
    die('Database error:' . $DBC->connect_error);
  }

=======
<?php

#Variables necesarias para el inicio de sesión
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'gaming';

$DBC = mysqli_connect($hostname,$username,$password,$db);

if ($DBC->connect_error) {
    die('Database error:' . $DBC->connect_error);
  }

>>>>>>> 624cd5889f7f40752f5e71efbdeaae620db30b09
?>
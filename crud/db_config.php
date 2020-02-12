<?php
// Database credentials config file , Assuming you are running MySQL server with default setting(user 'root' with no password)

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'storemovie');


//Attemp to connect to MySQL database

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check connection
if ($con === false) {
  die("ERROR: could not connect. ".mysqli_connect_error());

 }

?>

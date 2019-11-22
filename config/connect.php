<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basic-php-site";

try
{
  $con = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8",$username,$password);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
}

?>

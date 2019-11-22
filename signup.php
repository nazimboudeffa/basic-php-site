<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if (isset($_SESSION['username'])){
        echo "Vous êtes connecté";
      } else {
        include 'forms/register.php';
      }
    ?>
  </body>
</html>

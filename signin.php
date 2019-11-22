<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'includes/head.php' ?>
  </head>
  <body>
    <?php
      if (isset($_SESSION['username'])){
        echo "Vous êtes connecté";
      } else {
        include 'forms/login.php';
      }
    ?>
  </body>
</html>

<?php
session_start();
global $BasicPHPSite;
if (!isset($BasicPHPSite)) {
    $BasicPHPSite = new stdClass;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <?php include 'includes/head.php' ?>

  </head>
<body>

  <?php include 'includes/header.php' ?>

  <?php include 'includes/content.php' ?>

</body>
</html>

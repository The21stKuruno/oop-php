<?php
  include_once 'includes/parentclass.inc.php';
  include_once 'includes/newclass.inc.php';
  $object = new NewClass;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Learn OOP</title>
  </head>
  <body>
    <?php
      echo $object->name();
    ?>
  </body>
</html>

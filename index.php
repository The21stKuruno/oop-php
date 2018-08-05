<?php
  // include_once 'includes/parentclass.inc.php';
  include_once 'includes/newclass.inc.php';
  // $object = new NewClass;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Learn OOP</title>
  </head>
  <body>
    <?php
      $object = new NewClass;
      $object2 = new NewClass;

      $object->setNewProperty("This is the new data!");
      echo $object->getProperty();

      $object2->setNewProperty("This is the second new data!");
      echo $object2->getProperty();
    ?>
  </body>
</html>
